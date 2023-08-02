<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\VepostTracking;
use Aws\S3\S3Client;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VepostUser;
use DateTime;
use Illuminate\Support\Facades\Log;
use Jenssegers\Agent\Agent;
use ZipArchive;

class isAuthFilesController extends Controller
{

    public function get()
    {
        // $transfers = Transfers::get();

        // to get and send to web page all data related to user and transfers
        $transfers = ["x", "y"]; // fake data
        return view("isauth.files", ['transfers' => $transfers]);
    }

    public function uploadImage(Request $request)
    {

        if ($request->hasFile('file')) {

            // Get the receiver email from the request
            $receiverEmail = $request->input('useremail');
            $receiverUser = $this->getVepostUserByEmail($receiverEmail);
            $receiverDisplayName = $request->input('userdisplayname');

            // Check if the receiver email exists in the database
            if (!$receiverUser) {
                return back()->with('error', 'Receiver email does not exist');
            }

            // Get the file
            $file = $request->file('file');
            // Get the filename
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            // Get the file size
            $fileSize = $file->getSize();
            // Convert the size in a more readable fashion
            $humanReadable = $this->formatBytes($fileSize);

            Log::info($file);
            // Compress the file using gzip and get the compressed file path and size
            $compressedFile = $this->compressFile($file);
            $compressedFilePath = $compressedFile['path'];
            $compressedFileSize = $compressedFile['size'];

            // Get the original file extension
            $extension = strtolower($file->getClientOriginalExtension());
            $uniqId = uniqid() . '_' . mt_rand(1000, 9999) . '.';
            $fileName = $uniqId;

            // Define the folder path within the bucket
            $folderPath = 'others/';
            $imageExtensions = ['jpg', 'psd', 'jpeg', 'png', 'gif', 'apng', 'avif', 'webp', 'svg', 'bmp', 'tiff', 'ico'];
            $videoExtensions = ['mp4', 'avi', 'mov', 'wmv'];
            $textExtensions = ['doc', 'docx', 'odt', 'pdf', 'rtf', 'tex', 'txt', 'wpd'];
            $archiveExtensions = ['rar', 'zip', '7z', 'tar', 'gz', 'ace'];


            if (in_array($extension, $imageExtensions)) {
                $folderPath = 'images/';
            } elseif (in_array($extension, $videoExtensions)) {
                $folderPath = 'videos/';
            } elseif (in_array($extension, $textExtensions)) {
                $folderPath = 'text/';
            } elseif (in_array($extension, $archiveExtensions)) {
                $folderPath = 'archives/';
            }

            // Create the object key by combining the folder path and the random name with the file extension
            $objectKey = $folderPath . $fileName . 'zip';

            // Upload the file to S3
            $s3Client = new S3Client([
                'credentials' => [
                    'key' => config('aws.AWS_ACCESS_KEY_ID'),
                    'secret' => config('aws.AWS_SECRET_ACCESS_KEY'),
                ],
                'region' => config('aws.AWS_DEFAULT_REGION'), // Fetch the region from the .env file
                'version' => 'latest',
                'http'    => ['verify' => false]
            ]);

            $bucket = config('aws.AWS_BUCKET');

            $s3Client->putObject([
                'Bucket' => $bucket,
                'Key' => $objectKey,
                'Body' => fopen($compressedFilePath, 'r'),
                'ACL' => 'public-read',
            ]);

            // Save the S3 URL to the database
            $fileUrl = $s3Client->getObjectUrl($bucket, $fileName);

            // Retrieve the username of the sender
            /** @var User $user */
            $user = auth()->user()->load('vepostUser');

            // Get user OS and OS version
            $vepost = $this->getUserOS($request);

            $vepostTracking = new VepostTracking();
            $vepostTracking->mpID = $uniqId;
            $vepostTracking->sender_username = $user->vepostUser->username;
            $vepostTracking->sender_vepost_addr = $user->vepostUser->vepost_addr;
            $vepostTracking->sender_displayname = $user->vepostUser->displayname;
            $vepostTracking->sender_OS = $vepost['os'];
            $vepostTracking->sender_OS_version = $vepost['osVersion'];
            $vepostTracking->sender_device_name = $vepost['deviceName'];
            $vepostTracking->receiver_username = $receiverUser->username ?? $receiverDisplayName;
            $vepostTracking->receiver_vepost_addr = $receiverUser->vepost_addr;
            $vepostTracking->receiver_displayname = $receiverUser->displayname;
            $vepostTracking->file_name = $originalName . '.' . $extension;
            $vepostTracking->file_size_original = $humanReadable;
            $vepostTracking->file_size_transfer = $this->formatBytes($compressedFileSize);
            $vepostTracking->file_url = $fileUrl;
            $vepostTracking->time_send_start = new DateTime();
            $vepostTracking->sender_pub_ip = $request->input('userip');
            $vepostTracking->save();

            // Redirect back with a success message
            return back()->with('success', 'File sent successfully');
        }


        // Redirect back with an error message
        return back()->with('error', 'No file was provided');
    }

    // To keep in mind that if the user is using inspect in the browser, we will get
    // the os and osversion of the device the browser is emulating at that time
    public function getUserOS(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        $agent = new Agent();
        $agent->setUserAgent($userAgent);

        $os = $agent->platform(); // Get the operating system
        $osVersion = $agent->version($os); // Get the operating system version
        $deviceName = $agent->device(); // Get the device name

        return [
            'os' => $os,
            'osVersion' => $osVersion,
            'deviceName' => $deviceName
        ];
    }

    private function getVepostUserByEmail($email)
    {
        // Assuming you have a "vepost_users" table to store vepost_user information
        $vepostUser = VepostUser::where('vepost_addr', $email)->first();

        // If the vepost_user exists, return it
        if ($vepostUser) {
            return $vepostUser;
        }

        // If the vepost_user does not exist, return null
        return null;
    }

    private function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        return round($bytes / (pow(1024, $pow)), $precision) . ' ' . $units[$pow];
    }

    private function compressFile($file)
    {

        $tempDir = sys_get_temp_dir();
        $originalFileName = $file->getClientOriginalName();
        $tempFileName = $originalFileName . '.zip';
        $tempFilePath = $tempDir . DIRECTORY_SEPARATOR . $tempFileName;

        // Create a new ZIP archive
        $zip = new ZipArchive();
        if ($zip->open($tempFilePath, ZipArchive::CREATE) !== true) {
            // Failed to create ZIP archive, handle the error
            return null;
        }

        // Add the original file to the ZIP archive
        $zip->addFile($file->getPathname(), $originalFileName);

        // Close the ZIP archive
        $zip->close();

        $compressedFileSize = filesize($tempFilePath); // Get the size of the compressed file

        return [
            'path' => $tempFilePath,
            'size' => $compressedFileSize,
        ];
    }
}
