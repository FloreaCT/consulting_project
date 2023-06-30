@extends ('layout')


@section('content')
<span :class="{ 'hidden': !isActive }"></span>
<div :class="{ 'col-span-2': !isActive }">

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Notifications</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->
  <!-- Notifications Container - START -->
  <div class="flex flex-col gap-2">

    <!-- Notifications Card - START -->
    <div class="flex p-2 m-1 shadow-xl max-[400px]:flex-col items-center">
      <div class="flex flex-col">
        <span class="mx-auto relative scale-[0.6]">
          <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
          <span class="absolute top-0 right-0" title="Business Premium">@include('components.rank')</span>
        </span>
      </div>
      <!-- Notif. Msg. -->
      <p class="grow">Some User Name has sent you some files.</p>
      <!-- Notif. Actions -->
      <div class="flex flex-col flex-wrap justify-center items-center">
        <span class="text-xs">
          {{ date('Y-m-d H:i:s') }}</span>
        <div class="flex flex-wrap">
          <button class="text-xs text-white p-2 border-2 border-white whitespace-nowrap rounded bg-[--c2]">Toggle Read/Unread</button>
          <button class="text-xs text-white p-2 border-2 border-white whitespace-nowrap rounded bg-[--c3]">Delete</button>
        </div>
      </div>
    </div>
    <!-- Notifications Card - END -->

    <!-- Notifications Card - START -->
    <div class="flex p-2 m-1 shadow-xl max-[400px]:flex-col items-center">
      <div class="flex flex-col">
        <span class="mx-auto relative scale-[0.6]">
          <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
          <span class="absolute top-0 right-0" title="Business Premium">@include('components.rank')</span>
        </span>
      </div>
      <!-- Notif. Msg. -->
      <p class="grow">Some User Name has received your files.</p>
      <!-- Notif. Actions -->
      <div class="flex flex-col flex-wrap justify-center items-center">
        <span class="text-xs">
          {{ date('Y-m-d H:i:s') }}</span>
        <div class="flex flex-wrap">
          <button class="text-xs text-white p-2 border-2 border-white whitespace-nowrap rounded bg-[--c2]">Toggle Read/Unread</button>
          <button class="text-xs text-white p-2 border-2 border-white whitespace-nowrap rounded bg-[--c3]">Delete</button>
        </div>
      </div>
    </div>
    <!-- Notifications Card - END -->

    <!-- Notifications Card - START -->
    <div class="flex p-2 m-1 shadow-xl max-[400px]:flex-col items-center">
      <div class="flex flex-col">
        <span class="mx-auto relative scale-[0.6]">
          <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
          <span class="absolute top-0 right-0" title="Business Premium">@include('components.rank')</span>
        </span>
      </div>
      <!-- Notif. Msg. -->
      <p class="grow">Some User Name has downloading your files.</p>
      <!-- Notif. Actions -->
      <div class="flex flex-col flex-wrap justify-center items-center">
        <span class="text-xs">
          {{ date('Y-m-d H:i:s') }}</span>
        <div class="flex flex-wrap">
          <button class="text-xs text-white p-2 border-2 border-white whitespace-nowrap rounded bg-[--c2]">Toggle Read/Unread</button>
          <button class="text-xs text-white p-2 border-2 border-white whitespace-nowrap rounded bg-[--c3]">Delete</button>
        </div>
      </div>
    </div>
    <!-- Notifications Card - END -->

  </div>
  <!-- Notifications Container - END -->
</div>
@endsection