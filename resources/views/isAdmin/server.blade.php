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
        <h1 class="font-bold text-3xl">Admin Server</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Dashboard - START -->
  <div class="grid grid-cols-4 max-[1100px]:grid-cols-3 max-[800px]:grid-cols-2 grid-rows-auto py-6 gap-2">

    <!-- Widget Start file transfer server status - START-->
    <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{isOnline: true}">
      <p class="text-center my-2">Server Status</p>
      <!--  -->
      <div class="flex flex-nowrap flex-col justify-center grow">
        <div class="flex flex-col p-1 items-center justify-center">
          <p class="text-center text-sm font-bold" x-show="isOnline">Online</p>
          <p class="text-center text-sm font-bold" x-show="!isOnline">Offline</p>
          <p class="text-[3rem] text-center pb-2" x-show="isOnline">🟢</p>
          <p class="text-[3rem] text-center" x-show="!isOnline">🔴</p>
        </div>

      </div>
      <!--  -->
    </div>
    <!-- Widget Start file transfer server status - END-->


    <!-- Widget Start file transfer server status - START-->
    <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{isOnline: true}">
      <p class="text-center my-2">Server Status</p>
      <!--  -->
      <div class="flex flex-nowrap flex-col p-1 gap-4 items-center justify-center" x-data="{isMaintenance: false, isServer: true, isFileServer: true}">
        
        <div class="w-[100%] flex justify-between items-center gap-2 text-xs font-[600] p-2 border-2 border-white whitespace-nowrap rounded shadow-md text-center" @click="isServer = !isServer"  :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isServer, 'fill-[#14ed08] shadow-[#14ed08]': isServer}">
          <div class="checkmark relative flex justify-center items-center h-[30px] w-[30px] rounded-full bg-[--c2] transition shadow-xl" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isServer, 'fill-[#14ed08]': isServer}" >
              <svg class="mx-auto transition" :class="{'fill-[#b7b7b7]': !isServer, 'fill-[#14ed08]': isServer}" width="20px" height="20px" viewBox="-1.92 -1.92 35.84 35.84" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#acacac"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>switch1</title> <path d="M15.5 31.062c-6.904 0-12.5-5.597-12.5-12.5 0-5.315 3.323-9.844 8-11.651v4.449c-2.399 1.503-4 4.162-4 7.202 0 4.694 3.806 8.5 8.5 8.5s8.5-3.806 8.5-8.5c0-2.596-1.166-4.915-3-6.475v-4.736c4.143 2.036 7 6.284 7 11.212 0 6.903-5.597 12.499-12.5 12.499zM16 17.062c-1.104 0-2-0.896-2-2v-11.124c0-1.104 0.896-2 2-2s2 0.896 2 2v11.125c0 1.104-0.896 1.999-2 1.999z"></path> </g></svg>
            </div>
          <p>
          Toggle Web Server
          </p>  
        </div>

        <div class="w-[100%] flex justify-between items-center gap-2 text-xs font-[600] p-2 border-2 border-white whitespace-nowrap rounded shadow-md text-center" @click="isFileServer = !isFileServer" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isFileServer, 'fill-[#14ed08] shadow-[#14ed08]': isFileServer}">
          <div class="checkmark relative flex justify-center items-center h-[30px] w-[30px] rounded-full bg-[--c2] transition shadow-xl" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isFileServer, 'fill-[#14ed08]': isFileServer}" >
              <svg class="mx-auto transition" :class="{'fill-[#b7b7b7]': !isFileServer, 'fill-[#14ed08]': isFileServer}" width="20px" height="20px" viewBox="-1.92 -1.92 35.84 35.84" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#acacac"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>switch1</title> <path d="M15.5 31.062c-6.904 0-12.5-5.597-12.5-12.5 0-5.315 3.323-9.844 8-11.651v4.449c-2.399 1.503-4 4.162-4 7.202 0 4.694 3.806 8.5 8.5 8.5s8.5-3.806 8.5-8.5c0-2.596-1.166-4.915-3-6.475v-4.736c4.143 2.036 7 6.284 7 11.212 0 6.903-5.597 12.499-12.5 12.499zM16 17.062c-1.104 0-2-0.896-2-2v-11.124c0-1.104 0.896-2 2-2s2 0.896 2 2v11.125c0 1.104-0.896 1.999-2 1.999z"></path> </g></svg>
            </div>
          <p>
          Toggle File Transfer Server
          </p>  
        </div>

        <div class="w-[100%] flex justify-between items-center gap-2 text-xs font-[600] p-2 border-2 border-white whitespace-nowrap rounded shadow-md text-center" @click="isMaintenance = !isMaintenance" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isMaintenance, 'fill-[#14ed08] shadow-[#14ed08]': isMaintenance}">
          <div class="checkmark relative flex justify-center items-center h-[30px] w-[30px] rounded-full bg-[--c2] transition shadow-xl" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isMaintenance, 'fill-[#14ed08]': isMaintenance}" >
              <svg class="mx-auto transition" :class="{'fill-[#b7b7b7]': !isMaintenance, 'fill-[#14ed08]': isMaintenance}" width="20px" height="20px" viewBox="-1.92 -1.92 35.84 35.84" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#acacac"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>switch1</title> <path d="M15.5 31.062c-6.904 0-12.5-5.597-12.5-12.5 0-5.315 3.323-9.844 8-11.651v4.449c-2.399 1.503-4 4.162-4 7.202 0 4.694 3.806 8.5 8.5 8.5s8.5-3.806 8.5-8.5c0-2.596-1.166-4.915-3-6.475v-4.736c4.143 2.036 7 6.284 7 11.212 0 6.903-5.597 12.499-12.5 12.499zM16 17.062c-1.104 0-2-0.896-2-2v-11.124c0-1.104 0.896-2 2-2s2 0.896 2 2v11.125c0 1.104-0.896 1.999-2 1.999z"></path> </g></svg>
            </div>
          <p>
          Toggle Web Maintenance
          </p>  
        </div>



      </div>
      <!--  -->
    </div>
    <!-- Widget Start file transfer server status - END-->


  </div>
  <!-- Dashboard - END -->


</div>
@endsection