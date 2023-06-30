@extends ('layout')

@section('content')

<!-- to fetch from db later -->
@php
$receipts = [
[
'transfer_details' => [
'time_send_start' => '2023-06-28 10:15:00',
'ltime_send_start' => '2023-06-28 10:15:00',
'time_send_end' => '2023-06-28 10:30:00',
'ltime_send_end' => '2023-06-28 10:30:00',
'time_recv_end' => '2023-06-28 10:35:00',
'ltime_recv_end' => '2023-06-28 10:35:00',
'file_name' => 'example_file.pdf',
'file_size_original' => '2.3 MB',
'file_size_transfer' => '1.8 MB',
'send_option' => 1,
],
'sender' => [
'sender_username' => 'john_doe',
'sender_displayname' => 'John Doe',
'sender_ezepost_addr' => 'john_doe@ezepost.com',
'sender_pub_ip' => '123.456.789.123',
'sender_pub_port' => 5000,
'sender_prv_ip' => '192.168.1.10',
'sender_prv_port' => 8080,
'sender_mac_addr' => '00:11:22:33:44:55',
'sender_OS' => 'Windows',
'sender_OS_version' => '10',
'sender_device_name' => 'Laptop',
'sender_device_username' => 'john',
],
'receiver' => [
'receiver_username' => 'jane_smith',
'receiver_displayname' => 'Jane Smith',
'receiver_ezepost_addr' => 'jane_smith@ezepost.com',
'receiver_pub_ip' => '987.654.321.789',
'receiver_pub_port' => 6000,
'receiver_prv_ip' => '192.168.1.20',
'receiver_prv_port' => 9090,
'receiver_mac_addr' => 'AA:BB:CC:DD:EE:FF',
'receiver_OS' => 'MacOS',
'receiver_OS_version' => '11.2.3',
'receiver_device_name' => 'Desktop',
'receiver_device_username' => 'jane',
],
'other_info' => [
'id' => 'some-random-id',
'subject_ref' => 'Invoice #12345',
'decrypt_status' => 'Decryption successful',
'time_post_opened' => '2023-06-28 10:40:00',
'deleted_without_open' => null,
],
],
[
'transfer_details' => [
'time_send_start' => '2023-06-29 14:20:00',
'ltime_send_start' => '2023-06-29 14:20:00',
'time_send_end' => '2023-06-29 14:30:00',
'ltime_send_end' => '2023-06-29 14:30:00',
'time_recv_end' => '2023-06-29 14:35:00',
'ltime_recv_end' => '2023-06-29 14:35:00',
'file_name' => 'presentation.pptx',
'file_size_original' => '5.8 MB',
'file_size_transfer' => '4.2 MB',
'send_option' => 2,
],
'sender' => [
'sender_username' => 'alex_smith',
'sender_displayname' => 'Alex Smith',
'sender_ezepost_addr' => 'alex_smith@ezepost.com',
'sender_pub_ip' => '789.123.456.789',
'sender_pub_port' => 7000,
'sender_prv_ip' => '192.168.1.30',
'sender_prv_port' => 7070,
'sender_mac_addr' => '11:22:33:44:55:66',
'sender_OS' => 'Linux',
'sender_OS_version' => 'Ubuntu 20.04',
'sender_device_name' => 'Workstation',
'sender_device_username' => 'alex',
],
'receiver' => [
'receiver_username' => 'mary_jones',
'receiver_displayname' => 'Mary Jones',
'receiver_ezepost_addr' => 'mary_jones@ezepost.com',
'receiver_pub_ip' => '321.654.987.123',
'receiver_pub_port' => 8000,
'receiver_prv_ip' => '192.168.1.40',
'receiver_prv_port' => 8080,
'receiver_mac_addr' => 'AA:BB:CC:DD:EE:FF',
'receiver_OS' => 'Windows',
'receiver_OS_version' => '11',
'receiver_device_name' => 'Laptop',
'receiver_device_username' => 'mary',
],
'other_info' => [
'id' => 'some-random-id',
'subject_ref' => 'Contract Agreement',
'decrypt_status' => 'Decryption failed',
'time_post_opened' => null,
'deleted_without_open' => '2023-06-29 14:45:00',
],
]

]
@endphp

<span :class="{ 'hidden': !isActive }"></span>

<div :class="{ 'col-span-2': !isActive }">

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Admin Files</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->


  <!-- Files - START -->
  <div class="flex flex-col py-6 border-2 border-[#e6e6e6] rounded-lg" x-data="{ isActive: 2 }">

    <div class="widget col-span-2 flex flex-col ">
      <!-- TABS - START -->
      <div class="flex flex-nowrap justify-evenly text-xs">
        <div class="w-[100%] px-2 flex justify-evenly">

          <!-- Tab 1 -->
          <div class="accordion-item w-[90%] max-w-[800px] min-w-[140px] transition mx-auto my-1 py-2" :class="{ 'border-b-2 grayscale': isActive !== 1 }">
            <div class="accordion-header cursor-pointer flex justify-between transition text-start" @click="isActive === 1 ? '' : isActive = 1">
              <div class="flex flex-nowrap justify-evenly w-[100%] flex-col">
                <span class="mx-auto h-[50px] w-[50px]">
                  <svg style="width:100%; height:100%;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-46.08 -46.08 604.16 604.16" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path style="fill:#ED8800;" d="M478.362,257.617h-28.88l-322.829,0.539v247.916l323.4,0.538c0.296,0,0.594-0.002,0.899-0.006 c29.501-0.493,53.503-25.306,53.503-55.313v-167.58C504.455,269.322,492.75,257.617,478.362,257.617z"></path>
                      <path style="fill:#CC7400;" d="M478.362,257.617h-28.88l-3.749,0.006c14.273,0.134,25.846,11.781,25.846,26.087v167.58 c0,30.008-24.005,54.778-53.506,55.269c-0.305,0.004,31.979,0.05,31.979,0.05c0.296,0,0.594-0.002,0.899-0.006 c29.501-0.493,53.503-25.306,53.503-55.313v-167.58C504.455,269.322,492.75,257.617,478.362,257.617z"></path>
                      <path style="fill:#ECE5DD;" d="M342.771,9.701H89.582c-15.517,0-28.142,12.624-28.142,28.142v134.62v258.156l334.147,0.539h35.352 c10.819,0,19.621-8.802,19.621-19.621V106.712L342.771,9.701z"></path>
                      <path style="fill:#D9CBBD;" d="M417.792,77.22l0.046,29.491v304.825c0,10.819-8.802,19.621-19.621,19.621h32.722 c10.819,0,19.621-8.802,19.621-19.621V106.712L417.792,77.22z"></path>
                      <path style="fill:#FFB656;" d="M72.247,506.072c-35.379,0-64.163-28.784-64.163-64.163V220.8c0-27.545,22.409-49.954,49.954-49.954 h65.845c9.205,0,18.235,3.167,25.423,8.917l25.909,20.727c10.859,8.687,24.497,13.472,38.402,13.472h152.418 c17.186,0,31.168,13.982,31.168,31.168v206.507c0,14.42,5.663,27.931,15.946,38.043c0.486,0.479,0.98,0.946,1.48,1.402 l16.393,15.494L72.247,506.072z"></path>
                      <path style="fill:#FFA733;" d="M414.63,491.085c-0.5-0.456-0.994-0.924-1.48-1.402c-10.283-10.112-15.946-23.623-15.946-38.043 V245.13c0-17.186-13.982-31.168-31.168-31.168h-32.337c17.186,0,31.168,13.982,31.168,31.168v206.507 c0,14.42,5.663,27.931,15.946,38.043c0.486,0.479,0.98,0.946,1.48,1.402l16.393,14.987l32.337,0.507L414.63,491.085z"></path>
                      <g>
                        <path style="fill:#BABABA;" d="M126.653,93.777h107.789c4.465,0,8.084-3.62,8.084-8.084s-3.62-8.084-8.084-8.084H126.653 c-4.465,0-8.084,3.62-8.084,8.084S122.188,93.777,126.653,93.777z"></path>
                        <path style="fill:#BABABA;" d="M277.558,93.777h21.558c4.466,0,8.084-3.62,8.084-8.084s-3.618-8.084-8.084-8.084h-21.558 c-4.466,0-8.084,3.62-8.084,8.084S273.092,93.777,277.558,93.777z"></path>
                        <path style="fill:#BABABA;" d="M126.653,136.893h86.232c4.465,0,8.084-3.62,8.084-8.084c0-4.465-3.62-8.084-8.084-8.084h-86.232 c-4.465,0-8.084,3.62-8.084,8.084C118.568,133.273,122.188,136.893,126.653,136.893z"></path>
                        <path style="fill:#BABABA;" d="M256,136.893h64.674c4.466,0,8.084-3.62,8.084-8.084c0-4.465-3.618-8.084-8.084-8.084H256 c-4.465,0-8.084,3.62-8.084,8.084C247.916,133.273,251.535,136.893,256,136.893z"></path>
                      </g>
                      <path style="fill:#C0AB91;" d="M363.436,107.789c-11.989,0-21.743-9.754-21.743-21.743V9.03l109.733,98.76H363.436z"></path>
                      <path d="M478.362,247.916h-20.257V105.095c0-0.183-0.016-0.363-0.029-0.544c-0.005-0.072-0.004-0.146-0.012-0.218 c-0.033-0.356-0.092-0.706-0.171-1.051c-0.018-0.079-0.042-0.154-0.063-0.232c-0.073-0.28-0.162-0.555-0.264-0.825 c-0.032-0.086-0.063-0.171-0.098-0.257c-0.137-0.327-0.291-0.647-0.471-0.953c-0.027-0.046-0.06-0.091-0.088-0.137 c-0.163-0.265-0.342-0.52-0.534-0.765c-0.061-0.078-0.122-0.154-0.186-0.231c-0.236-0.279-0.485-0.55-0.76-0.798L347.639,2.075 c-0.263-0.237-0.544-0.447-0.833-0.647c-0.065-0.044-0.127-0.088-0.193-0.13c-0.285-0.183-0.577-0.351-0.881-0.497 c-0.052-0.025-0.106-0.045-0.158-0.069c-0.272-0.124-0.551-0.232-0.834-0.324c-0.066-0.022-0.13-0.045-0.197-0.066 c-0.318-0.095-0.641-0.17-0.969-0.225c-0.072-0.012-0.146-0.02-0.219-0.03c-0.29-0.041-0.583-0.067-0.877-0.075 c-0.059-0.002-0.117-0.008-0.177-0.009C342.278,0.003,342.254,0,342.232,0H89.582C69.904,0,53.895,16.009,53.895,35.687v126.122 C23.864,163.677,0,188.691,0,219.184v221.107C0,479.831,32.169,512,71.708,512h378.313c0.351,0,0.704-0.003,1.055-0.009 C484.67,511.431,512,483.233,512,449.135v-167.58C512,263.006,496.911,247.916,478.362,247.916z M350.316,26.236l78.638,70.775 h-65.518c-7.235,0-13.12-5.885-13.12-13.12V26.236z M71.708,495.832c-30.674,0-55.54-24.866-55.54-55.54V219.183 c0-22.827,18.504-41.331,41.331-41.331h65.845c7.255,0,14.372,2.496,20.037,7.029l25.908,20.727 c12.382,9.905,27.934,15.36,43.789,15.36h61.41c4.465,0,8.084-3.62,8.084-8.084l0,0c0-4.465-3.62-8.084-8.084-8.084h-61.41 c-12.199,0-24.163-4.197-33.69-11.817l-25.908-20.727c-8.554-6.844-19.182-10.572-30.137-10.572H70.063V35.687 c0-10.78,8.738-19.519,19.519-19.519h244.566V83.89c0,16.176,13.113,29.289,29.289,29.289h78.501v296.202 c0,6.074-4.924,10.998-10.998,10.998h-26.729V243.514c0-21.381-17.333-38.714-38.714-38.714h-55.363 c-4.465,0-8.084,3.62-8.084,8.084l0,0c0,4.465,3.62,8.084,8.084,8.084h55.363c12.452,0,22.545,10.093,22.545,22.545v206.507 c0,16.752,6.578,32.446,18.524,44.193c0.56,0.551,1.131,1.091,1.707,1.618H71.708z M495.832,449.134 c0,25.331-20.198,46.276-45.025,46.69c-12.423,0.203-24.08-4.459-32.905-13.14c-8.829-8.681-13.691-20.283-13.691-32.663v-13.474 h26.729c14.98,0,27.166-12.187,27.166-27.166V264.084h20.257c9.633,0,17.469,7.837,17.469,17.471V449.134z"></path>
                    </g>
                  </svg>
                </span>
                <p class="text-sm text-center line-clamp-1 font-bold">Storage</p>
              </div>
            </div>
          </div>
          <!-- Tab 1 -->

          <!-- Tab 2 -->
          <div class="accordion-item w-[90%] max-w-[800px] min-w-[140px] transition mx-auto my-1 py-2 border-l-2 border-r-2" :class="{ 'border-b-2 grayscale': isActive !== 2 }">
            <div class="accordion-header cursor-pointer flex justify-between transition text-start" @click="isActive === 2 ? '' : isActive = 2">
              <div class="flex flex-nowrap justify-evenly w-[100%] flex-col">
                <span class="mx-auto h-[50px] w-[50px]">
                  <svg style="width:100%; height:100%;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-46.08 -46.08 604.16 604.16" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path style="fill:#ACABB1;" d="M102.4,130.425V42.513c0-20.47,16.653-37.124,37.124-37.124h232.951 c20.471,0,37.125,16.653,37.125,37.124v87.912H102.4z"></path>
                      <path style="fill:#898790;" d="M372.476,5.389h-30.036c20.47,0,37.124,16.653,37.124,37.124v87.912H409.6V42.513 C409.6,22.043,392.947,5.389,372.476,5.389z"></path>
                      <path style="fill:#FFB656;" d="M458.429,80.842h-54.218H107.789H53.571c-26.568,0-48.182,21.615-48.182,48.182v232.394 c0,26.567,21.614,48.182,48.182,48.182h54.218h296.421h54.218c26.567,0,48.182-21.615,48.182-48.182V129.024 C506.611,102.457,484.995,80.842,458.429,80.842z"></path>
                      <g>
                        <path style="fill:#FFA733;" d="M458.429,80.842h-29.642c26.567,0,48.182,21.615,48.182,48.182v232.394 c0,26.567-21.615,48.182-48.182,48.182h29.642c26.567,0,48.182-21.615,48.182-48.182V129.024 C506.611,102.457,484.995,80.842,458.429,80.842z"></path>
                        <path style="fill:#FFA733;" d="M430.332,274.863H81.668c-12.343,0-22.384,10.041-22.384,22.384v25.297 c0,12.342,10.041,22.383,22.384,22.383h348.664c12.342,0,22.384-10.041,22.384-22.384v-25.297 C452.716,284.904,442.675,274.863,430.332,274.863z"></path>
                      </g>
                      <g>
                        <path style="fill:#ECE5DD;" d="M146.751,506.611c-24.455,0-44.351-19.896-44.351-44.351V274.863h307.2v148.524 c0,3.551-0.461,7.094-1.37,10.529l-2.123,8.021h-51.773c-5.187,0-9.407,4.22-9.407,9.407v53.73l-9.332,1.263 c-0.991,0.135-1.488,0.203-188.839,0.275h-0.004V506.611z"></path>
                        <path style="fill:#ECE5DD;" d="M365.249,506.611c24.455,0,44.351-19.896,44.351-44.351V274.863H102.4v148.524 c0,3.551,0.461,7.094,1.37,10.529l2.123,8.021l61.18,63.135l9.332,1.263c0.991,0.135,1.488,0.203,188.839,0.275H365.249z"></path>
                      </g>
                      <path style="fill:#D9CBBD;" d="M380.918,274.863v187.396c0,24.302-19.651,44.093-43.896,44.339 c8.903,0.004,18.298,0.008,28.223,0.012h0.004c24.455,0,44.351-19.896,44.351-44.351V274.863H380.918z"></path>
                      <path style="fill:#3E3D43;" d="M118.975,237.137c-32.914,0-59.691-26.777-59.691-59.691V80.842h393.432v96.604 c0,32.914-26.777,59.691-59.691,59.691H118.975z"></path>
                      <path style="fill:#898790;" d="M363.789,32.337H148.211c-4.465,0-8.084,3.618-8.084,8.084V51.2c0,4.466,3.62,8.084,8.084,8.084 c4.465,0,8.084-3.618,8.084-8.084v-2.695h199.411V51.2c0,4.466,3.618,8.084,8.084,8.084s8.084-3.618,8.084-8.084V40.421 C371.874,35.955,368.255,32.337,363.789,32.337z"></path>
                      <path style="fill:#FF6342;" d="M342.232,156.295c13.372,0,24.253,10.88,24.253,24.253c0,13.372-10.88,24.253-24.253,24.253 s-24.253-10.88-24.253-24.253C317.979,167.175,328.859,156.295,342.232,156.295z"></path>
                      <g>
                        <path style="fill:#BABABA;" d="M148.211,328.758h150.905c4.466,0,8.084-3.618,8.084-8.084s-3.618-8.084-8.084-8.084H148.211 c-4.465,0-8.084,3.618-8.084,8.084S143.746,328.758,148.211,328.758z"></path>
                        <path style="fill:#BABABA;" d="M339.61,328.471l24.083,0.286c0.032,0.001,0.066,0.001,0.098,0.001c4.42,0,8.029-3.557,8.081-7.988 c0.054-4.465-3.524-8.126-7.987-8.179l-24.083-0.286c-0.032-0.001-0.066-0.001-0.098-0.001c-4.42,0-8.029,3.557-8.081,7.988 C331.569,324.757,335.147,328.419,339.61,328.471z"></path>
                        <path style="fill:#BABABA;" d="M234.442,377.263h-86.232c-4.465,0-8.084,3.618-8.084,8.084s3.62,8.084,8.084,8.084h86.232 c4.465,0,8.084-3.618,8.084-8.084S238.907,377.263,234.442,377.263z"></path>
                        <path style="fill:#BABABA;" d="M371.874,385.347c0-4.466-3.618-8.084-8.084-8.084h-86.232c-4.466,0-8.084,3.618-8.084,8.084 s3.618,8.084,8.084,8.084h86.232C368.255,393.432,371.874,389.813,371.874,385.347z"></path>
                      </g>
                      <path style="fill:#C0AB91;" d="M167.121,505.079l-1.331-1.331l-59.896-61.811l-1.426-5.389h53.201 c8.158,0,14.796,6.638,14.796,14.796v54.458L167.121,505.079z"></path>
                      <path d="M342.232,210.189c16.344,0,29.642-13.298,29.642-29.642s-13.298-29.642-29.642-29.642s-29.642,13.298-29.642,29.642 S325.887,210.189,342.232,210.189z M342.232,167.074c7.43,0,13.474,6.044,13.474,13.474s-6.044,13.474-13.474,13.474 s-13.474-6.044-13.474-13.474S334.802,167.074,342.232,167.074z"></path>
                      <path d="M458.429,75.453h-43.439V42.513C414.989,19.071,395.918,0,372.476,0H139.524c-23.442,0-42.513,19.071-42.513,42.513v32.939 H53.571C24.032,75.453,0,99.484,0,129.024v232.394c0,29.54,24.032,53.571,53.571,53.571h43.439v8.398 c0,12.383,4.823,24.025,13.578,32.782l46.095,46.095c6.279,6.278,14.626,9.736,23.506,9.736h185.06 c27.426,0,49.739-22.313,49.739-49.741v-47.27h43.439c29.54,0,53.571-24.032,53.571-53.571V129.024 C512,99.484,487.968,75.453,458.429,75.453z M113.179,42.513c0-14.526,11.819-26.345,26.345-26.345h232.951 c14.528,0,26.346,11.819,26.346,26.345v32.939H113.179V42.513z M70.063,91.621h371.874v85.825c0,26.97-21.942,48.912-48.912,48.912 h-274.05c-26.97,0-48.912-21.942-48.912-48.912V91.621z M97.011,334.147H81.668c-6.399,0-11.605-5.205-11.605-11.605v-25.297 c0-6.398,5.206-11.604,11.605-11.604h15.343V334.147z M161.684,484.398l-37.072-37.072h33.055c2.215,0,4.017,1.802,4.017,4.017 L161.684,484.398L161.684,484.398z M414.989,285.642h15.343c6.399,0,11.605,5.205,11.605,11.605v25.297 c0,6.399-5.206,11.605-11.605,11.605h-15.343V285.642z M495.832,361.418c0,20.657-16.746,37.403-37.403,37.403h-43.439v-48.505 h15.343c15.338,0,27.773-12.435,27.773-27.773v-25.297c0-15.338-12.435-27.773-27.773-27.773H189.126 c-4.465,0-8.084,3.62-8.084,8.084c0,4.465,3.62,8.084,8.084,8.084h209.695v176.617c0,18.542-15.031,33.573-33.572,33.573H180.188 c-0.79,0-1.566-0.072-2.336-0.177v-44.311c0-11.148-9.037-20.186-20.186-20.186H114.19c-0.663-2.505-1.011-5.11-1.011-7.771V285.642 h40.302c4.465,0,8.084-3.62,8.084-8.084c0-4.465-3.62-8.084-8.084-8.084H81.668c-15.338,0-27.773,12.435-27.773,27.773v25.296 c0,15.338,12.435,27.773,27.773,27.773h15.343v48.505H53.571c-20.657,0-37.403-16.746-37.403-37.403V129.024 c0-20.657,16.746-37.403,37.403-37.403h0.323v85.825c0,35.942,29.138,65.08,65.08,65.08h274.05c35.942,0,65.08-29.138,65.08-65.08 V91.621h0.323c20.657,0,37.403,16.746,37.403,37.403V361.418z"></path>
                    </g>
                  </svg>
                </span>
                <p class="text-sm text-center line-clamp-1 font-bold">Receipts</p>
              </div>
            </div>
          </div>
          <!-- Tab 2 -->

        </div>
      </div>
    </div>
    <!-- TABS - END -->

    <div class="tabContainer" x-data="{ isModal: false }">
      <!-- Storage Tab Content - START -->
      <div class="accordion-content transition" x-show="isActive === 1">
        <div class="relative flex flex-col flex-nowrap p-2">
          <!-- Paginate top half - START -->
          <div class="paginate flex justify-center items-center gap-4 mt-2">
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">1</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">2</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">3</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">4</a>
          </div>
          <!-- Paginate top half - END -->

          <!-- File Search - START -->
          <div class="relative flex flex-col justify-between navButton font-[600] mb-2" x-data="{ file: '' }">
            <p>Search File</p>
            <div class="flex flex-nowrap overflow-hidden justify-center">
              <input type="text" name="file" class="rounded-l p-2 w-[90%] text-black" placeholder="File" required x-model="file">
              <button type="submit" class="bg-[#f08409] rounded-r h-100 w-10" x-show="file.trim() !== ''">
                <svg class="h-100 w-100" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#f08409da" stroke-width="1.248">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L9.70711 19.7071C9.31658 20.0976 8.68342 20.0976 8.29289 19.7071C7.90237 19.3166 7.90237 18.6834 8.29289 18.2929L14.5858 12L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289Z" fill="#ffffff"></path>
                  </g>
                </svg>
              </button>
            </div>
          </div>
          <!-- File Search - END -->

          <!-- List Of Files 10/page ? - START -->
          <div class="flex flex-wrap py-2 px-2 transition-all">
            <!-- File Card - START -->
            <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded transition-all duration-500">

              <div class="flex flex-nowrap items-center ">
                <span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black] hover:scale-[1.1] ">@include('components.dlsvg')</span>
                <p class="text-xs line-clamp-1" title="file-namefile-namefile-name.extension">file-namefile-namefile-name.extension</p>
              </div>
              <div class="grid grid-cols-[1fr_20px]">
                <div>
                  <p>From:</p>
                  <p class="text-xs line-clamp-1 font-bold" title="usern ame">Some User Name</p>
                  <p class="text-xs line-clamp-1" title="User Email">UserEmail@email.user</p>
                </div>
                <div>
                  <button title="Delete File">@include('components.deleteusersvg')</button>
                </div>
              </div>
            </div>
            <!-- File Card - END -->
            <!-- File Card - START -->
            <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded transition-all duration-500">

              <div class="flex flex-nowrap items-center ">
                <span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black] hover:scale-[1.1] ">@include('components.dlsvg')</span>
                <p class="text-xs line-clamp-1" title="file-namefile-namefile-name.extension">file-namefile-namefile-name.extension</p>
              </div>
              <div class="grid grid-cols-[1fr_20px]">
                <div>
                  <p>From:</p>
                  <p class="text-xs line-clamp-1 font-bold" title="usern ame">Some User Name</p>
                  <p class="text-xs line-clamp-1" title="User Email">UserEmail@email.user</p>
                </div>
                <div>
                  <button title="Delete File">@include('components.deleteusersvg')</button>
                </div>
              </div>
            </div>
            <!-- File Card - END -->
            <!-- File Card - START -->
            <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded transition-all duration-500">

              <div class="flex flex-nowrap items-center ">
                <span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black] hover:scale-[1.1] ">@include('components.dlsvg')</span>
                <p class="text-xs line-clamp-1" title="file-namefile-namefile-name.extension">file-namefile-namefile-name.extension</p>
              </div>
              <div class="grid grid-cols-[1fr_20px]">
                <div>
                  <p>From:</p>
                  <p class="text-xs line-clamp-1 font-bold" title="usern ame">Some User Name</p>
                  <p class="text-xs line-clamp-1" title="User Email">UserEmail@email.user</p>
                </div>
                <div>
                  <button title="Delete File">@include('components.deleteusersvg')</button>
                </div>
              </div>
            </div>
            <!-- File Card - END -->
            <!-- File Card - START -->
            <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded transition-all duration-500">

              <div class="flex flex-nowrap items-center ">
                <span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black] hover:scale-[1.1] ">@include('components.dlsvg')</span>
                <p class="text-xs line-clamp-1" title="file-namefile-namefile-name.extension">file-namefile-namefile-name.extension</p>
              </div>
              <div class="grid grid-cols-[1fr_20px]">
                <div>
                  <p>From:</p>
                  <p class="text-xs line-clamp-1 font-bold" title="usern ame">Some User Name</p>
                  <p class="text-xs line-clamp-1" title="User Email">UserEmail@email.user</p>
                </div>
                <div>
                  <button title="Delete File">@include('components.deleteusersvg')</button>
                </div>
              </div>
            </div>
            <!-- File Card - END -->
            <!-- File Card - START -->
            <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded transition-all duration-500">

              <div class="flex flex-nowrap items-center ">
                <span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black] hover:scale-[1.1] ">@include('components.dlsvg')</span>
                <p class="text-xs line-clamp-1" title="file-namefile-namefile-name.extension">file-namefile-namefile-name.extension</p>
              </div>
              <div class="grid grid-cols-[1fr_20px]">
                <div>
                  <p>From:</p>
                  <p class="text-xs line-clamp-1 font-bold" title="usern ame">Some User Name</p>
                  <p class="text-xs line-clamp-1" title="User Email">UserEmail@email.user</p>
                </div>
                <div>
                  <button title="Delete File">@include('components.deleteusersvg')</button>
                </div>
              </div>
            </div>
            <!-- File Card - END -->
            <!-- File Card - START -->
            <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded transition-all duration-500">

              <div class="flex flex-nowrap items-center ">
                <span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black] hover:scale-[1.1] ">@include('components.dlsvg')</span>
                <p class="text-xs line-clamp-1" title="file-namefile-namefile-name.extension">file-namefile-namefile-name.extension</p>
              </div>
              <div class="grid grid-cols-[1fr_20px]">
                <div>
                  <p>From:</p>
                  <p class="text-xs line-clamp-1 font-bold" title="usern ame">Some User Name</p>
                  <p class="text-xs line-clamp-1" title="User Email">UserEmail@email.user</p>
                </div>
                <div>
                  <button title="Delete File">@include('components.deleteusersvg')</button>
                </div>
              </div>
            </div>
            <!-- File Card - END -->
          </div>
          <!-- List Of Files 10/page ? - END -->



          <!-- Paginate bottom half - START -->
          <div class="paginate flex justify-center items-center gap-4 my-2">
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">1</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">2</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">3</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">4</a>
          </div>
          <!-- Paginate bottom half - END -->
        </div>
      </div>
      <!-- Storage Tab Content - END -->

      <!-- Receipts Tab Content - START -->
      <div class="accordion-content transition" x-show="isActive === 2">
        <div class="relative flex flex-col flex-nowrap p-2">

          <!-- Paginate top half - START -->
          <div class="paginate flex justify-center items-center gap-4 mt-2">
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">1</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">2</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">3</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">4</a>
          </div>
          <!-- Paginate top half - END -->

          <!-- File Search - START -->
          <div class="relative flex flex-col justify-between navButton font-[600] mb-2" x-data="{ file: '' }">
            <p>Search File</p>
            <div class="flex flex-nowrap overflow-hidden justify-center">
              <input type="text" name="file" class="rounded-l p-2 w-[90%] text-black" placeholder="File" required x-model="file">
              <button type="submit" class="bg-[#f08409] rounded-r h-100 w-10" x-show="file.trim() !== ''">
                <svg class="h-100 w-100" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#f08409da" stroke-width="1.248">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L9.70711 19.7071C9.31658 20.0976 8.68342 20.0976 8.29289 19.7071C7.90237 19.3166 7.90237 18.6834 8.29289 18.2929L14.5858 12L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289Z" fill="#ffffff"></path>
                  </g>
                </svg>
              </button>
            </div>
          </div>
          <!-- File Search - END -->

          <!-- Receipts - START -->
          <div class="flex flex-wrap py-2 px-2 transition-all">
            @foreach ($receipts as $receipt)
            <!-- Receipt Example - START -->
            <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded transition-all duration-500">
              <div class="grid grid-cols-1">
                <div>
                  <p>From:</p>
                  <p class="text-xs line-clamp-1 font-bold" title="{{ $receipt['sender']['sender_ezepost_addr'] }}">
                    {{ $receipt['sender']['sender_ezepost_addr'] }}
                  </p>
                  <p class="text-xs line-clamp-1" title="{{ $receipt['sender']['sender_displayname'] }}">
                    {{ $receipt['sender']['sender_displayname'] }}
                  </p>
                  <p>To:</p>
                  <p class="text-xs line-clamp-1 font-bold" title="{{ $receipt['receiver']['receiver_ezepost_addr'] }}">
                    {{ $receipt['receiver']['receiver_ezepost_addr'] }}
                  </p>
                  <p class="text-xs line-clamp-1" title="{{ $receipt['receiver']['receiver_displayname'] }}">
                    {{ $receipt['receiver']['receiver_displayname'] }}
                  </p>
                </div>
                <div class="flex flex-wrap items-center ">

                  <div class="flex flex-nowrap items-center ">

                    <span class="text-xs" title="{{ $receipt['transfer_details']['file_size_original'] }}">
                      {{ $receipt['transfer_details']['file_size_original'] }}</span>
                    <span title="Download" class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black] hover:scale-[1.1] ">
                      <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <path d="M11 3.01254C10.9983 2.46026 11.4446 2.01114 11.9969 2.00941C12.5492 2.00768 12.9983 2.45399 13 3.00627L11 3.01254Z" fill="#FFC44D"></path>
                          <path d="M14.3158 10.2951L13.0269 11.592L13 3.00627L11 3.01254L11.0269 11.5983L9.73003 10.3095C9.33828 9.92018 8.7051 9.92214 8.3158 10.3139C7.9265 10.7056 7.92849 11.3388 8.32024 11.7281L8.32275 11.7306L8.32374 11.7316L12.039 15.4236L15.7206 11.7187L15.7262 11.7131L15.727 11.7123L15.7278 11.7115L15.7337 11.7056L15.7344 11.7049L14.3158 10.2951Z" fill="#FFC44D"></path>
                          <path d="M15.7344 11.7049C16.1237 11.3131 16.1217 10.6799 15.73 10.2906C15.3382 9.90134 14.705 9.90335 14.3158 10.2951L15.7344 11.7049Z" fill="#FFC44D"></path>
                          <path d="M4 12C4 10.8954 4.89543 10 6 10C6.55228 10 7 9.55228 7 9C7 8.44771 6.55228 8 6 8C3.79086 8 2 9.79086 2 12V18C2 20.2091 3.79086 22 6 22H17C19.7614 22 22 19.7614 22 17V12C22 9.79086 20.2091 8 18 8C17.4477 8 17 8.44771 17 9C17 9.55228 17.4477 10 18 10C19.1046 10 20 10.8954 20 12V17C20 18.6569 18.6569 20 17 20H6C4.89543 20 4 19.1046 4 18V12Z" fill="#FFC44D"></path>
                        </g>
                      </svg>
                    </span>
                    <p class="text-xs line-clamp-1" title="{{ $receipt['transfer_details']['file_name'] }}">
                      {{ $receipt['transfer_details']['file_name'] }}
                    </p>
                  </div>



                </div class="flex flex-nowrap">
                <div class="flex flex-nowrap justify-end ">
                  <form action="POST" class="flex flex-nowrap justify-end ">
                    <button formaction="/file-id/pdf" title="Generate PDF Receipt" class="w-[40px] h-[50px]" onclick="alert('Generate and download receipt')">@include('components.file-pdf')</button>
                    <button formaction="/file-id/word" title="Generate MsWORD Receipt" class="w-[40px] h-[50px]" onclick="alert('Generate and download receipt')">@include('components.file-word')</button>
                  </form>
                  <button title="Generate QR CODE" class="w-[40px] h-[50px]" @click="isModal = !isModal" onclick="generate(`{{ $receipt['other_info']['id'] }}`)">@include('components.file-qr')</button>
                </div>
              </div>
            </div>
            <!-- Receipt Example - END -->
            @endforeach
          </div>
          <!-- Receipts - END -->

          <!-- Paginate bottom half - START -->
          <div class="paginate flex justify-center items-center gap-4 my-2">
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">1</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">2</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">3</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">4</a>
          </div>
          <!-- Paginate bottom half - END -->
        </div>
      </div>

      @include('components.admin-receipts-qrcode-modal')

      <script defer>
        const qrImage = document.querySelector("#qrimg");
        const downloadBtn = document.querySelector("#qrdownload");

        const getQrCodeUrl = (data) => `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(data)}`;

        const generate = (receiptID) => {
          const qrCodeUrl = getQrCodeUrl(`http://127.0.0.1:8000/${receiptID}/pdf`);
          qrImage.src = qrCodeUrl;
        }

        const download = async () => {
          try {
            const response = await fetch(qrImage.src);
            const blob = await response.blob();
            const dlLink = document.createElement("a");
            dlLink.href = URL.createObjectURL(blob);
            dlLink.download = "qrCode.jpg";
            dlLink.click();
          } catch (error) {
            console.error("Error occurred while downloading the QR code:", error);
            alert("Error occurred while downloading the QR code:", error)
          }
        };
      </script>
      <!-- Receipts Tab Content - END -->
    </div>


  </div>
  <!-- Files - END -->


</div>
@endsection