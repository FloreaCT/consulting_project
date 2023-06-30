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

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Password Reset</h1>
        <p class="section-description">Enter your new password.</p>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->
  <div>
    <form method="POST" action="" class="max-w-[600px] mx-auto p-4">
      @csrf

      <!-- Password -->
      <div class="mt-4">
        <input placeholder="Insert new password" id="password" class="block mt-1 w-full rounded" type="password" name="password" required autocomplete="new-password" />
        <error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Confirm Password -->
      <div class="mt-4">
        <input id="password_confirmation" class="block mt-1 w-full rounded" type="password" placeholder="Repeat new password" name="password_confirmation" required autocomplete="new-password" />
        <error :messages="$errors->get('password_confirmation')" class="mt-2" />
      </div>

      <div class="flex items-center justify-center mt-4 rounded bg-[--c2] py-2 text-white">
        <button>Reset Password
        </button>
      </div>
    </form>

</body>

</html>