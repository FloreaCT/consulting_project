@php
    $controlstring = substr(Auth::user()->controlstring, 1, 2);

    if ($controlstring == '00' || $controlstring == '10') {
        echo 'Top-up';
    } elseif ($controlstring == '01') {
        echo 'Personal Starter';
    } elseif ($controlstring == '02') {
        echo 'Personal Basic';
    } elseif ($controlstring == '03') {
        echo 'Personal Premium';
    } elseif ($controlstring == '11') {
        echo 'Business Starter';
    } elseif ($controlstring == '12') {
        echo 'Business Basic';
    } elseif ($controlstring == '13') {
        echo 'Business Premium';
    }
@endphp
