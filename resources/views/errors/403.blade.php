<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    {{ config('app.name', 'Laravel') }}
  </title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Scripts -->
  <script type="module" src="/js/app.js"></script>
  <script type="module" src="/js/bootstrap.js"></script>
</head>
<body>

<div class="relative flex flex-col w-[100svw] h-[100svh] overflow-hidden">
  <img src="storage/10.jpg" class="absolute w-[100svw] h-[100svh] object-cover scale-150 origin-center" loop muted autoplay />
  <div class="overlay relative flex flex-col w-[100svw] h-[100svh]">
    <!-- Heading - START -->
    <div class="my-8 text-center text-white overflow-auto">
        <div class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] flex flex-col justify-center items-center">
            <p class="text-3xl font-bold">403</p>
            <p class="text-sm">Unauthorized Action</p>

            <p class="mt-8">Looking for something you needed and was supposed to be here?</p>
            <a href="http://127.0.0.1:8000/contact" class="text-sm text-white p-2 border-2 border-white whitespace-nowrap rounded bg-[--c2]">Contact Us!</a>
        </div>
    </div>
    <!-- Heading - END -->
  </div>
</div>
</body>
</html>