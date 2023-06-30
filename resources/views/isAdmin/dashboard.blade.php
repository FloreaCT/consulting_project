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
        <h1 class="font-bold text-3xl">Admin Dashboard</h1>
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

    <!-- Widget Start file transfer server idle or not - START-->
    <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{isSending: true}">
      <p class="text-center my-2">File Transfer Server</p>
      <!--  -->
      <div class="flex flex-nowrap justify-center grow">
        <div class="flex flex-col p-1 items-center justify-center">
          <p class="text-center text-sm font-bold">Activity</p>
          <div class="flex flex-nowrap overflow-hidden w-[90px] h-[90px]" :class="{ 'grayscale': !isSending }">
            <svg class="animate-infiniteLoop" :class="{ 'animate-infiniteLoop': isSending }" style="height:100%; width:100%;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.70711 4.29289C5.31658 3.90237 4.68342 3.90237 4.29289 4.29289C3.90237 4.68342 3.90237 5.31658 4.29289 5.70711L10.5858 12L4.29289 18.2929C3.90237 18.6834 3.90237 19.3166 4.29289 19.7071C4.68342 20.0976 5.31658 20.0976 5.70711 19.7071L12.7071 12.7071C13.0976 12.3166 13.0976 11.6834 12.7071 11.2929L5.70711 4.29289ZM12.7071 4.29289C12.3166 3.90237 11.6834 3.90237 11.2929 4.29289C10.9024 4.68342 10.9024 5.31658 11.2929 5.70711L17.5858 12L11.2929 18.2929C10.9024 18.6834 10.9024 19.3166 11.2929 19.7071C11.6834 20.0976 12.3166 20.0976 12.7071 19.7071L19.7071 12.7071C20.0976 12.3166 20.0976 11.6834 19.7071 11.2929L12.7071 4.29289Z" fill="#FFC44D"></path>
              </g>
            </svg>
          </div>
          <p class="text-xs text-center pb-2" x-show="isSending">Server is running...</p>
          <p class="text-xs text-center" x-show="!isSending">Server is<br>on standby.</p>
        </div>
      </div>
      <!--  -->
    </div>
    <!-- Widget Start file transfer server idle or not - END-->

    <!-- Widget Start stats about users - START-->
    <div class="widget grid col-span-1 max-[500px]:col-span-2 border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReciving: false, isSending: true}">
      <span class="col-span-2 mx-auto mt-2 h-[50px] w-[50px] block">@include('components.usersvg')</span>
      <p class="text-center col-span-2 font-bold">500 Total users</p>
      <p class="text-center my-2 col-span-2 border-b-2"></p>
      <!--  -->
      <div class="grid col-span-1 justify-center">
        <div class="grid ">
          <p class="font-bold text-center">Personal</p>
          <div>
            <div>
              <span class="font-bold">100</span>
              <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '00'])</span>
              <span class="text-xs">Topup</span>
            </div>
            <div>
              <span class="font-bold">100</span>
              <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '01'])</span>
              <span class="text-xs">Starter</span>

            </div>
            <div>
              <span class="font-bold">100</span>
              <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '02'])</span>
              <span class="text-xs">Basic</span>
            </div>
            <div>
              <span class="font-bold">100</span>
              <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '03'])</span>
              <span class="text-xs">Premium</span>
            </div>
          </div>
        </div>
      </div>
      <div class="grid col-span-1 justify-center">
        <div class="grid ">
          <p class="font-bold text-center">Business</p>
          <div>
            <div>
              <span class="font-bold">100</span>
              <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '10'])</span>
              <span class="text-xs">Topup</span>
            </div>
            <div>
              <span class="font-bold">100</span>
              <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '11'])</span>
              <span class="text-xs">Starter</span>

            </div>
            <div>
              <span class="font-bold">100</span>
              <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '12'])</span>
              <span class="text-xs">Basic</span>

            </div>
            <div>
              <span class="font-bold">100</span>
              <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '13'])</span>
              <span class="text-xs">Premium</span>
            </div>
          </div>
        </div>
      </div>




    </div>
    <!-- Widget Start stats about users - END-->

    <!-- Widget Start recent registred users - START-->
    <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReciving: false, isSending: true}">
      <p class="text-center my-2">Newest Users</p>
      <!--  -->
      <div class="flex flex-col justify-center items-center pb-2 gap-4">
        <!-- Contact Card - START-->
        <div class="flex flex-nowrap basis-1/3 max-w-[200px]">
            <span class="mx-auto relative">
              <span class="h-[50px] w-[50px] block">@include('components.usersvg')</span>
              <span class="absolute top-0 right-0 h-[20px] w-[20px]" title="Business Premium">@include('components.rank', ['cs' => '12'])</span>
            </span>
           <div>
             <p class="text-sm text-center line-clamp-1 font-bold" title="User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa">User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa</p>
             <p class="text-xs text-center line-clamp-1" title="User Email">User Email</p>
           </div>
         
        </div>
        <!-- Contact Card - END-->
       
        <!-- Contact Card - START-->
        <div class="flex flex-nowrap basis-1/3 max-w-[200px]">
            <span class="mx-auto relative">
              <span class="h-[50px] w-[50px] block">@include('components.usersvg')</span>
              <span class="absolute top-0 right-0 h-[20px] w-[20px]" title="Business Premium">@include('components.rank', ['cs' => '01'])</span>
            </span>
           <div>
             <p class="text-sm text-center line-clamp-1 font-bold" title="User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa">User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa</p>
             <p class="text-xs text-center line-clamp-1" title="User Email">User Email</p>
           </div>
         
        </div>
        <!-- Contact Card - END-->
       
        <!-- Contact Card - START-->
        <div class="flex flex-nowrap basis-1/3 max-w-[200px]">
            <span class="mx-auto relative">
              <span class="h-[50px] w-[50px] block">@include('components.usersvg')</span>
              <span class="absolute top-0 right-0 h-[20px] w-[20px]" title="Business Premium">@include('components.rank', ['cs' => '03'])</span>
            </span>
           <div>
             <p class="text-sm text-center line-clamp-1 font-bold" title="User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa">User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa</p>
             <p class="text-xs text-center line-clamp-1" title="User Email">User Email</p>
           </div>
         
        </div>
        <!-- Contact Card - END-->
       
      </div>
      <!--  -->
    </div>
        <!-- Widget Start recent registred users - END-->

    <!-- Widget Start last 3 notifications  - START-->
    <div class="widget col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReciving: false, isSending: true}">
      <p class="text-center my-2">Notifications</p>
      <!--  -->
      <div class="flex flex-nowrap justify-evenly text-xs">
        <!-- Last 3 Transmisions - START -->
        <div class="w-[100%] px-2 flex flex-col" x-data="{ isActive: null }">

          <!-- Transmision 1 -->
          <div class="accordion-item w-[90%] max-w-[800px] min-w-[240px] transition mx-auto my-1 py-2">
            <div class="accordion-header cursor-pointer flex justify-between transition text-start" @click="isActive === 1 ? isActive = null : isActive = 1">
              <div class="flex w-[100%] gap-1 whitespace-nowrap flex-wrap">
                <span title="Status Failed">🔴</span>
                <span>email.sender@email.com</span>
                <span title="action"> tried to download a package from </span>
                <span>email.receiver@email.com</span>
              </div>
              <span class="accordion-icon">
                <svg class="transition" width="24px" :class="{'rotate-[90deg]': isActive === 1}" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <rect width="24" height="24" fill="white"></rect>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM13 8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8L11 13.5858L9.70711 12.2929C9.31658 11.9024 8.68342 11.9024 8.29289 12.2929C7.90237 12.6834 7.90237 13.3166 8.29289 13.7071L11.2059 16.6201C11.2209 16.6351 11.2363 16.6497 11.252 16.6637C11.4352 16.87 11.7024 17 12 17C12.2976 17 12.5648 16.87 12.748 16.6637C12.7637 16.6497 12.7791 16.6351 12.7941 16.6201L15.7071 13.7071C16.0976 13.3166 16.0976 12.6834 15.7071 12.2929C15.3166 11.9024 14.6834 11.9024 14.2929 12.2929L13 13.5858L13 8Z" fill="#ffae00"></path>
                  </g>
                </svg>
              </span>
            </div>
            <div class="accordion-content transition" x-show="isActive === 1">
              <div>
                <p>Status: <span class="text-red-400">Failed!</span></p>
              </div>
              <div class="relative flex flex-col flex-nowrap p-2 border-2">
                <!-- loop over files. MAX 5 FILES! -->
                <span class="absolute top-[-7px] left-[15px] text-[1.6rem] rotate-90">📎</span>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit.jpg</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit amet..png</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem, ipsum dolor.rar</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit.zip</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing.docx</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Transmision 1 -->

          <!-- Transmision 2 -->
          <div class="accordion-item w-[90%] max-w-[800px] min-w-[240px] transition mx-auto my-1 py-2">
            <div class="accordion-header cursor-pointer flex justify-between transition text-start" @click="isActive === 2 ? isActive = null : isActive = 2">
              <div class="flex w-[100%] gap-1 whitespace-nowrap flex-wrap">
                <span title="Status Success">🟢</span>
                <span>email.sender@email.com</span>
                <span title="action"> has sent a package to </span>
                <span>email.receiver@email.com</span>
              </div>
              <span class="accordion-icon">
                <svg class="transition" width="24px" :class="{'rotate-[90deg]': isActive === 2}" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <rect width="24" height="24" fill="white"></rect>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM13 8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8L11 13.5858L9.70711 12.2929C9.31658 11.9024 8.68342 11.9024 8.29289 12.2929C7.90237 12.6834 7.90237 13.3166 8.29289 13.7071L11.2059 16.6201C11.2209 16.6351 11.2363 16.6497 11.252 16.6637C11.4352 16.87 11.7024 17 12 17C12.2976 17 12.5648 16.87 12.748 16.6637C12.7637 16.6497 12.7791 16.6351 12.7941 16.6201L15.7071 13.7071C16.0976 13.3166 16.0976 12.6834 15.7071 12.2929C15.3166 11.9024 14.6834 11.9024 14.2929 12.2929L13 13.5858L13 8Z" fill="#ffae00"></path>
                  </g>
                </svg>
              </span>
            </div>
            <div class="accordion-content transition" x-show="isActive === 2">
              <div>
                <p>Status: Success!</p>
              </div>
              <div class="relative flex flex-col flex-nowrap p-2 border-2">
                <!-- loop over files. MAX 5 FILES! -->
                <span class="absolute top-[-7px] left-[15px] text-[1.6rem] rotate-90">📎</span>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit.jpg</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit amet..png</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem, ipsum dolor.rar</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit.zip</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing.docx</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Transmision 2 -->

          <!-- Transmision 3 -->
          <div class="accordion-item w-[90%] max-w-[800px] min-w-[240px] transition mx-auto my-1 py-2">
            <div class="accordion-header cursor-pointer flex justify-between transition text-start" @click="isActive === 3 ? isActive = null : isActive = 3">
              <div class="flex w-[100%] gap-1 whitespace-nowrap flex-wrap">
                <span title="Status In Progress">🟡</span>
                <span>email.sender@email.com</span>
                <span title="action"> has started downloading a package from </span>
                <span>email.receiver@email.com</span>
              </div>
              <span class="accordion-icon">
                <svg class="transition" width="24px" :class="{'rotate-[90deg]': isActive === 3}" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <rect width="24" height="24" fill="white"></rect>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM13 8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8L11 13.5858L9.70711 12.2929C9.31658 11.9024 8.68342 11.9024 8.29289 12.2929C7.90237 12.6834 7.90237 13.3166 8.29289 13.7071L11.2059 16.6201C11.2209 16.6351 11.2363 16.6497 11.252 16.6637C11.4352 16.87 11.7024 17 12 17C12.2976 17 12.5648 16.87 12.748 16.6637C12.7637 16.6497 12.7791 16.6351 12.7941 16.6201L15.7071 13.7071C16.0976 13.3166 16.0976 12.6834 15.7071 12.2929C15.3166 11.9024 14.6834 11.9024 14.2929 12.2929L13 13.5858L13 8Z" fill="#ffae00"></path>
                  </g>
                </svg>
              </span>
            </div>
            <div class="accordion-content transition" x-show="isActive === 3">
              <div>
                <p>Status: In Progress</p>
              </div>
              <div class="relative flex flex-col flex-nowrap p-2 border-2">
                <!-- loop over files. MAX 5 FILES! -->
                <span class="absolute top-[-7px] left-[15px] text-[1.6rem] rotate-90">📎</span>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit.jpg</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit amet..png</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem, ipsum dolor.rar</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit.zip</p>
                </div>
                <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing.docx</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Transmision 3 -->
          <a href="/admin/notifications" class="text-white font-[600] p-2 border-2 border-white whitespace-nowrap rounded bg-[--c2] text-center">Check Full Activity</a>

        </div>
        <!-- Last 3 Transmisions - END -->
      </div>
      <!--  -->
    </div>
    <!-- Widget Start last 3 notifications  - END-->

    <!-- Widget Start last 3 files added to the server  - START-->
    <div class="widget grid col-span-2 border-2 border-[#e6e6e6] rounded-lg">
      <p class="text-center my-2 mx-auto col-span-2">Recently Added Files</p>
      <p class="text-center col-span-2 mx-auto font-bold">1500 Total Files</p>
      <p class="text-center my-2 col-span-2 border-b-2"></p>
      <!--  -->
      <div class="grid col-span-2 justify-center">
        <div class="relative flex flex-col flex-nowrap p-2">
          <!-- loop over files. MAX 5 FILES! -->
          <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M11 3.01254C10.9983 2.46026 11.4446 2.01114 11.9969 2.00941C12.5492 2.00768 12.9983 2.45399 13 3.00627L11 3.01254Z" fill="#FFC44D"></path>
                  <path d="M14.3158 10.2951L13.0269 11.592L13 3.00627L11 3.01254L11.0269 11.5983L9.73003 10.3095C9.33828 9.92018 8.7051 9.92214 8.3158 10.3139C7.9265 10.7056 7.92849 11.3388 8.32024 11.7281L8.32275 11.7306L8.32374 11.7316L12.039 15.4236L15.7206 11.7187L15.7262 11.7131L15.727 11.7123L15.7278 11.7115L15.7337 11.7056L15.7344 11.7049L14.3158 10.2951Z" fill="#FFC44D"></path>
                  <path d="M15.7344 11.7049C16.1237 11.3131 16.1217 10.6799 15.73 10.2906C15.3382 9.90134 14.705 9.90335 14.3158 10.2951L15.7344 11.7049Z" fill="#FFC44D"></path>
                  <path d="M4 12C4 10.8954 4.89543 10 6 10C6.55228 10 7 9.55228 7 9C7 8.44771 6.55228 8 6 8C3.79086 8 2 9.79086 2 12V18C2 20.2091 3.79086 22 6 22H17C19.7614 22 22 19.7614 22 17V12C22 9.79086 20.2091 8 18 8C17.4477 8 17 8.44771 17 9C17 9.55228 17.4477 10 18 10C19.1046 10 20 10.8954 20 12V17C20 18.6569 18.6569 20 17 20H6C4.89543 20 4 19.1046 4 18V12Z" fill="#FFC44D"></path>
                </g>
              </svg></span>
            <p>Lorem ipsum dolor sit.jpg</p>
          </div>
          <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M11 3.01254C10.9983 2.46026 11.4446 2.01114 11.9969 2.00941C12.5492 2.00768 12.9983 2.45399 13 3.00627L11 3.01254Z" fill="#FFC44D"></path>
                  <path d="M14.3158 10.2951L13.0269 11.592L13 3.00627L11 3.01254L11.0269 11.5983L9.73003 10.3095C9.33828 9.92018 8.7051 9.92214 8.3158 10.3139C7.9265 10.7056 7.92849 11.3388 8.32024 11.7281L8.32275 11.7306L8.32374 11.7316L12.039 15.4236L15.7206 11.7187L15.7262 11.7131L15.727 11.7123L15.7278 11.7115L15.7337 11.7056L15.7344 11.7049L14.3158 10.2951Z" fill="#FFC44D"></path>
                  <path d="M15.7344 11.7049C16.1237 11.3131 16.1217 10.6799 15.73 10.2906C15.3382 9.90134 14.705 9.90335 14.3158 10.2951L15.7344 11.7049Z" fill="#FFC44D"></path>
                  <path d="M4 12C4 10.8954 4.89543 10 6 10C6.55228 10 7 9.55228 7 9C7 8.44771 6.55228 8 6 8C3.79086 8 2 9.79086 2 12V18C2 20.2091 3.79086 22 6 22H17C19.7614 22 22 19.7614 22 17V12C22 9.79086 20.2091 8 18 8C17.4477 8 17 8.44771 17 9C17 9.55228 17.4477 10 18 10C19.1046 10 20 10.8954 20 12V17C20 18.6569 18.6569 20 17 20H6C4.89543 20 4 19.1046 4 18V12Z" fill="#FFC44D"></path>
                </g>
              </svg></span>
            <p>Lorem ipsum dolor sit amet..png</p>
          </div>
          <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M11 3.01254C10.9983 2.46026 11.4446 2.01114 11.9969 2.00941C12.5492 2.00768 12.9983 2.45399 13 3.00627L11 3.01254Z" fill="#FFC44D"></path>
                  <path d="M14.3158 10.2951L13.0269 11.592L13 3.00627L11 3.01254L11.0269 11.5983L9.73003 10.3095C9.33828 9.92018 8.7051 9.92214 8.3158 10.3139C7.9265 10.7056 7.92849 11.3388 8.32024 11.7281L8.32275 11.7306L8.32374 11.7316L12.039 15.4236L15.7206 11.7187L15.7262 11.7131L15.727 11.7123L15.7278 11.7115L15.7337 11.7056L15.7344 11.7049L14.3158 10.2951Z" fill="#FFC44D"></path>
                  <path d="M15.7344 11.7049C16.1237 11.3131 16.1217 10.6799 15.73 10.2906C15.3382 9.90134 14.705 9.90335 14.3158 10.2951L15.7344 11.7049Z" fill="#FFC44D"></path>
                  <path d="M4 12C4 10.8954 4.89543 10 6 10C6.55228 10 7 9.55228 7 9C7 8.44771 6.55228 8 6 8C3.79086 8 2 9.79086 2 12V18C2 20.2091 3.79086 22 6 22H17C19.7614 22 22 19.7614 22 17V12C22 9.79086 20.2091 8 18 8C17.4477 8 17 8.44771 17 9C17 9.55228 17.4477 10 18 10C19.1046 10 20 10.8954 20 12V17C20 18.6569 18.6569 20 17 20H6C4.89543 20 4 19.1046 4 18V12Z" fill="#FFC44D"></path>
                </g>
              </svg></span>
            <p>Lorem, ipsum dolor.rar</p>
          </div>
          <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M11 3.01254C10.9983 2.46026 11.4446 2.01114 11.9969 2.00941C12.5492 2.00768 12.9983 2.45399 13 3.00627L11 3.01254Z" fill="#FFC44D"></path>
                  <path d="M14.3158 10.2951L13.0269 11.592L13 3.00627L11 3.01254L11.0269 11.5983L9.73003 10.3095C9.33828 9.92018 8.7051 9.92214 8.3158 10.3139C7.9265 10.7056 7.92849 11.3388 8.32024 11.7281L8.32275 11.7306L8.32374 11.7316L12.039 15.4236L15.7206 11.7187L15.7262 11.7131L15.727 11.7123L15.7278 11.7115L15.7337 11.7056L15.7344 11.7049L14.3158 10.2951Z" fill="#FFC44D"></path>
                  <path d="M15.7344 11.7049C16.1237 11.3131 16.1217 10.6799 15.73 10.2906C15.3382 9.90134 14.705 9.90335 14.3158 10.2951L15.7344 11.7049Z" fill="#FFC44D"></path>
                  <path d="M4 12C4 10.8954 4.89543 10 6 10C6.55228 10 7 9.55228 7 9C7 8.44771 6.55228 8 6 8C3.79086 8 2 9.79086 2 12V18C2 20.2091 3.79086 22 6 22H17C19.7614 22 22 19.7614 22 17V12C22 9.79086 20.2091 8 18 8C17.4477 8 17 8.44771 17 9C17 9.55228 17.4477 10 18 10C19.1046 10 20 10.8954 20 12V17C20 18.6569 18.6569 20 17 20H6C4.89543 20 4 19.1046 4 18V12Z" fill="#FFC44D"></path>
                </g>
              </svg></span>
            <p>Lorem ipsum dolor sit.zip</p>
          </div>
          <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M11 3.01254C10.9983 2.46026 11.4446 2.01114 11.9969 2.00941C12.5492 2.00768 12.9983 2.45399 13 3.00627L11 3.01254Z" fill="#FFC44D"></path>
                  <path d="M14.3158 10.2951L13.0269 11.592L13 3.00627L11 3.01254L11.0269 11.5983L9.73003 10.3095C9.33828 9.92018 8.7051 9.92214 8.3158 10.3139C7.9265 10.7056 7.92849 11.3388 8.32024 11.7281L8.32275 11.7306L8.32374 11.7316L12.039 15.4236L15.7206 11.7187L15.7262 11.7131L15.727 11.7123L15.7278 11.7115L15.7337 11.7056L15.7344 11.7049L14.3158 10.2951Z" fill="#FFC44D"></path>
                  <path d="M15.7344 11.7049C16.1237 11.3131 16.1217 10.6799 15.73 10.2906C15.3382 9.90134 14.705 9.90335 14.3158 10.2951L15.7344 11.7049Z" fill="#FFC44D"></path>
                  <path d="M4 12C4 10.8954 4.89543 10 6 10C6.55228 10 7 9.55228 7 9C7 8.44771 6.55228 8 6 8C3.79086 8 2 9.79086 2 12V18C2 20.2091 3.79086 22 6 22H17C19.7614 22 22 19.7614 22 17V12C22 9.79086 20.2091 8 18 8C17.4477 8 17 8.44771 17 9C17 9.55228 17.4477 10 18 10C19.1046 10 20 10.8954 20 12V17C20 18.6569 18.6569 20 17 20H6C4.89543 20 4 19.1046 4 18V12Z" fill="#FFC44D"></path>
                </g>
              </svg></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.docx</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Widget Start last 3 files added to the server  - END-->

    <!-- Widget Start last 3 contact messages  - START-->
    <div class="widget grid col-span-2 border-2 border-[#e6e6e6] rounded-lg">
      <p class="text-center my-2 mx-auto col-span-2">Recent Messages</p>
      <p class="text-center col-span-2 mx-auto font-bold border-b-2"><span title="Unread" class="font-bold text-xl">5</span>/<span class="text-xs" title="Read">100</span> Messages</p>
      <!--  -->
      <div class="grid col-span-2 justify-center">
        <div class="relative flex flex-col flex-nowrap p-2 text-xs gap-4">
          <!-- loop over last 3 messages! -->
          <div class="grid grid-cols-[1fr_3fr] gap-2">
            <div class="flex flex-col border-r-2 pr-2">
              <p title="Email" class="line-clamp-1">someemail@email.some</p>
              <p title="Date" class="line-clamp-1">{{ date('Y-m-d H:i:s') }}</p>
            </div>
            <p title="Message" class="line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste ad harum culpa praesentium ab asperiores deleniti dignissimos ducimus ex ea?</p>
          </div>
          <div class="grid grid-cols-[1fr_3fr] gap-2">
            <div class="flex flex-col border-r-2 pr-2">
              <p title="Email" class="line-clamp-1">someemail@email.some</p>
              <p title="Date" class="line-clamp-1">{{ date('Y-m-d H:i:s') }}</p>
            </div>
            <p title="Message" class="line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste ad harum culpa praesentium ab asperiores deleniti dignissimos ducimus ex ea?</p>
          </div>
          <div class="grid grid-cols-[1fr_3fr] gap-2">
            <div class="flex flex-col border-r-2 pr-2">
              <p title="Email" class="line-clamp-1">someemail@email.some</p>
              <p title="Date" class="line-clamp-1">{{ date('Y-m-d H:i:s') }}</p>
            </div>
            <p title="Message" class="line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste ad harum culpa praesentium ab asperiores deleniti dignissimos ducimus ex ea?</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Widget Start last 3 contact messages  - END-->

  </div>
  <!-- Dashboard - END -->


  <div>
    @endsection