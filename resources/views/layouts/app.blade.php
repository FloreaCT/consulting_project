<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset('favicon-16x16.png') }}" type="image/x-icon">

  <title>
    {{ config('app.name', 'Laravel') }}
  </title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script defer src="{{asset('js/app.js')}}"></script>
</head>

<body class="min-h-screen antialiased grid grid-cols-[100px,1fr] overflow-x-hidden" x-data="{ isActive: true }">
  <div class="col-span-2 flex max-[330px]:flex-col max-[330px]:gap-4 justify-between items-center top-0 right-0 px-6 py-4">

    <svg class="block h-12 w-auto mt-2 max-sm:h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 131.4 80" style="enable-background:new 0 0 131.4 80;" xml:space="preserve">
      <style type="text/css">
        .st0 {
          fill: #E53323;
        }

        .st1 {
          fill: url(#SVGID_1_);
        }

        .st2 {
          fill: url(#SVGID_00000056394859992788285620000016356982458054443397_);
        }

        .st3 {
          fill: #FFCB00;
        }

        .st4 {
          fill: url(#SVGID_00000129194780860868990140000007357946114950875017_);
        }

        .st5 {
          fill: #F29100;
        }
      </style>
      <path class="st0" d="M38.5,44.3v6.1c0,0.5-0.4,1-1,1H1c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7c0,0.5-0.4,1-1,1  h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1H9.5v14.1h28C38,43.3,38.5,43.7,38.5,44.3z"></path>
      <path class="st0" d="M131.4,44.3v6.1c0,0.5-0.4,1-1,1H93.9c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7  c0,0.5-0.4,1-1,1h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1h-23.8v14.1h28C131,43.3,131.4,43.7,131.4,44.3z"></path>
      <path class="st0" d="M81.5,37.9c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C74.8,40.9,77.8,37.9,81.5,37.9"></path>
      <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="51.016" y1="44.5926" x2="75.541" y2="44.5926">
        <stop offset="0" style="stop-color:#BF0D0D"></stop>
        <stop offset="9.322089e-02" style="stop-color:#C71512"></stop>
        <stop offset="0.3551" style="stop-color:#D8261B"></stop>
        <stop offset="0.6423" style="stop-color:#E23021"></stop>
        <stop offset="1" style="stop-color:#E53323"></stop>
      </linearGradient>
      <path class="st1" d="M72.5,44.6c0-2.7,1.2-5.1,3-6.7H57.7c-3.7,0-6.7,3-6.7,6.7c0,3.7,3,6.7,6.7,6.7h17.8  C73.7,49.7,72.5,47.3,72.5,44.6z"></path>
      <linearGradient id="SVGID_00000132772404809936920710000015471056043988234416_" gradientUnits="userSpaceOnUse" x1="45.9171" y1="49.0714" x2="79.4457" y2="10.1596">
        <stop offset="0" style="stop-color:#E95A0C"></stop>
        <stop offset="0.25" style="stop-color:#F29100"></stop>
        <stop offset="0.7505" style="stop-color:#F29100"></stop>
        <stop offset="1" style="stop-color:#E95A0C"></stop>
      </linearGradient>
      <path style="fill:url(#SVGID_00000132772404809936920710000015471056043988234416_);" d="M57.7,51.3c-1.3,0-2.5-0.5-3.4-1.5  c-1.6-1.9-1.4-4.7,0.5-6.3l25.7-22.2c2.8-2.4,3.1-6.6,0.7-9.5c-2.4-2.8-6.6-3.1-9.5-0.7L45.7,33.6c-4.2,3.6-4.7,10-1.1,14.2  c2,2.3,4.8,3.5,7.6,3.5L57.7,51.3z"></path>
      <path class="st3" d="M48.9,0c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C42.2,3,45.2,0,48.9,0"></path>
      <linearGradient id="SVGID_00000074440112933318192930000005754585911127858072_" gradientUnits="userSpaceOnUse" x1="54.8232" y1="10.6357" x2="88.1831" y2="10.6357">
        <stop offset="0" style="stop-color:#FFCB00"></stop>
        <stop offset="0.3577" style="stop-color:#FEC800"></stop>
        <stop offset="0.6449" style="stop-color:#FCBE00"></stop>
        <stop offset="0.9068" style="stop-color:#F8AD00"></stop>
        <stop offset="1" style="stop-color:#F6A500"></stop>
      </linearGradient>
      <path style="fill:url(#SVGID_00000074440112933318192930000005754585911127858072_);" d="M85.7,3.5c-2-2.3-4.8-3.5-7.6-3.5H54.8  c1.9,1.6,3,4,3,6.7c0,2.7-1.2,5.1-3,6.7l22.8,0c1.3,0,2.5,0.5,3.4,1.6c1.6,1.9,1.4,4.7-0.5,6.3l4.1-3.6C88.9,14.1,89.4,7.7,85.7,3.5  z"></path>
      <g>
        <path class="st5" d="M12.8,61.1c1.2,0.6,2.2,1.3,2.9,2.4c0.7,1,1,2.3,1,3.7c0,1.4-0.3,2.6-1,3.7c-0.7,1-1.6,1.8-2.9,2.4   c-1.2,0.6-2.7,0.8-4.4,0.8H4v5.6H0.4V60.3h8C10.1,60.3,11.5,60.6,12.8,61.1z M11.8,70.1c0.8-0.7,1.2-1.6,1.2-2.9   c0-1.2-0.4-2.2-1.2-2.9c-0.8-0.7-2-1-3.6-1H4v7.7h4.2C9.8,71.1,11,70.7,11.8,70.1z"></path>
        <path class="st5" d="M42.7,78.7c-1.6-0.9-2.8-2.1-3.7-3.6c-0.9-1.5-1.4-3.2-1.4-5.1s0.5-3.6,1.4-5.1c0.9-1.5,2.2-2.7,3.7-3.6   s3.4-1.3,5.4-1.3c2,0,3.8,0.4,5.4,1.3c1.6,0.9,2.8,2,3.7,3.6c0.9,1.5,1.4,3.2,1.4,5.1c0,1.9-0.5,3.6-1.4,5.1   c-0.9,1.5-2.2,2.7-3.7,3.6c-1.6,0.9-3.4,1.3-5.4,1.3C46.1,80,44.3,79.6,42.7,78.7z M51.6,76c1-0.6,1.8-1.4,2.4-2.4   c0.6-1,0.9-2.2,0.9-3.5s-0.3-2.5-0.9-3.5c-0.6-1-1.4-1.9-2.4-2.4c-1-0.6-2.2-0.9-3.5-0.9c-1.3,0-2.5,0.3-3.5,0.9   c-1,0.6-1.8,1.4-2.4,2.4c-0.6,1-0.9,2.2-0.9,3.5s0.3,2.5,0.9,3.5c0.6,1,1.4,1.9,2.4,2.4c1,0.6,2.2,0.9,3.5,0.9   C49.4,76.8,50.6,76.5,51.6,76z"></path>
        <path class="st5" d="M82.5,79.4c-1.4-0.4-2.5-1-3.3-1.7l1.2-2.8c0.8,0.6,1.8,1.1,2.9,1.5c1.2,0.4,2.3,0.6,3.5,0.6   c1.4,0,2.5-0.2,3.2-0.7c0.7-0.5,1.1-1.1,1.1-1.8c0-0.6-0.2-1-0.6-1.4c-0.4-0.4-0.9-0.6-1.5-0.8c-0.6-0.2-1.4-0.4-2.5-0.7   c-1.5-0.4-2.7-0.7-3.6-1.1c-0.9-0.4-1.7-0.9-2.4-1.7c-0.7-0.7-1-1.8-1-3c0-1.1,0.3-2,0.9-2.9c0.6-0.9,1.5-1.6,2.6-2.1   c1.2-0.5,2.6-0.8,4.3-0.8c1.2,0,2.3,0.1,3.5,0.4c1.1,0.3,2.1,0.7,3,1.3l-1.1,2.8c-0.9-0.5-1.7-0.9-2.7-1.1   c-0.9-0.3-1.8-0.4-2.7-0.4c-1.4,0-2.5,0.2-3.2,0.7c-0.7,0.5-1,1.1-1,1.9c0,0.6,0.2,1,0.6,1.4c0.4,0.4,0.9,0.6,1.5,0.8   s1.4,0.4,2.5,0.7c1.4,0.3,2.6,0.7,3.5,1c0.9,0.4,1.7,0.9,2.4,1.7c0.7,0.7,1,1.7,1,3c0,1.1-0.3,2-0.9,2.9c-0.6,0.9-1.5,1.6-2.6,2.1   C90,79.7,88.5,80,86.8,80C85.3,80,83.9,79.8,82.5,79.4z"></path>
        <path class="st5" d="M121.1,63.4h-6.4v-3.1h16.5v3.1h-6.4v16.4h-3.6V63.4z"></path>
      </g>
    </svg>
    <div class="flex flex-nowrap">
      <!--  -->
    </div>
  </div>
<span :class="{ 'hidden': !isActive }"></span>
@php
  $controlString = auth()->user()->controlstring;
  $char19 = strlen($controlString) > 18 ? substr($controlString, 19, 1) : '';
@endphp
<!--  -->
@if ($char19 === '1')
  @include('isadmin.nav')
@elseif ($char19 === '0')
  @include('isauth.nav')
@endif
  <!-- content to be inserted -->

  <main class="bg-gray-100 dark:bg-gray-800" :class="{ 'col-span-2': !isActive }">
    <!-- Hero START -->
    <div class="relative flex flex-col h-100 overflow-hidden">
      <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
      <div class="overlay relative flex flex-col">
        <!-- Heading - START -->
        <div class="my-8 text-center">
          <h1 class="font-bold text-3xl">Profile</h1>
        </div>
        <!-- Heading - END -->
      </div>
    </div>
    <!-- Hero END -->
    {{ $slot }}
  </main>


  @stack('modals')

</body>

</html>