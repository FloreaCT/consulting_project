 <!-- Navbar START -->
 
 <button class="max-sm:flex bg-[#ffffffc4] p-2 h-[40px] w-[40px] fixed top-[10%] z-50" @click="isActive = !isActive" :class="{ 'active': isActive }">
     <svg width="30px" height="30px" viewBox="-3.2 -3.2 38.40 38.40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
       <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
       <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
       <g id="SVGRepo_iconCarrier">
         <defs>
           <linearGradient x1="50%" y1="0%" x2="50%" y2="99.0447173%" id="linearGradient-1">
             <stop stop-color="#ff7300" offset="0%"> </stop>
             <stop stop-color="#e64100" offset="100%"> </stop>
           </linearGradient>
         </defs>
         <g id="icons" stroke-width="0.00032" fill="none" fill-rule="evenodd">
           <g id="ui-gambling-website-lined-icnos-casinoshunter" transform="translate(-994.000000, -1911.000000)" fill="url(#linearGradient-1)" fill-rule="nonzero">
             <g id="4" transform="translate(50.000000, 1871.000000)">
               <path d="M974,58 C975.104569,58 976,58.8954305 976,60 C976,61.1045695 975.104569,62 974,62 L946,62 C944.895431,62 944,61.1045695 944,60 C944,58.8954305 944.895431,58 946,58 L974,58 Z M974,49 C975.104569,49 976,49.8954305 976,51 C976,52.1045695 975.104569,53 974,53 L946,53 C944.895431,53 944,52.1045695 944,51 C944,49.8954305 944.895431,49 946,49 L974,49 Z M974,40 C975.104569,40 976,40.8954305 976,42 C976,43.1045695 975.104569,44 974,44 L946,44 C944.895431,44 944,43.1045695 944,42 C944,40.8954305 944.895431,40 946,40 L974,40 Z" id="menu"> </path>
             </g>
           </g>
         </g>
       </g>
     </svg>
   </button>
 <div class="flex bg-[#ffffffc4] h-[100svh] fixed top-[10%] z-50">


   <ul class="z-20 flex flex-col pb-2 mt-[3.5rem] min-h-[86vh] fixed w-[100px]" x-show="isActive" :class="{ 'hidden': !isActive }">
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/dashboard">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Dashboard</span>
     </a>
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/files">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Files</span>
     </a>

     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/plans">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Plans</span>
     </a>
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/contact">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Contacts</span>
     </a>
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/topup">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Top-Up</span>
     </a>
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/notifications">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Notifications</span>
     </a>

     
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/profile">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Profile</span>
     </a>
     <form action="{{ route('logout') }}" method="POST" class="p-2 relative navButton font-[600] border-b-2">
        @csrf
        <span class="absolute bg-white inset-0 z-10 rounded"></span>
        <button type="submit" class="z-20 relative">Logout</button>
      </form>
      
      <div class="flex flex-col col-span-2 mt-2">
        <a class="relative flex justify-center items-center" href="/portal/files">
          <svg height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.00512">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path style="fill:#FFAA00;" d="M256,100.174c-27.619,0-50.087-22.468-50.087-50.087S228.381,0,256,0s50.087,22.468,50.087,50.087 S283.619,100.174,256,100.174z M256,33.391c-9.196,0-16.696,7.5-16.696,16.696s7.5,16.696,16.696,16.696 c9.196,0,16.696-7.5,16.696-16.696S265.196,33.391,256,33.391z"></path>
              <path style="fill:#FF7705;" d="M256.006,0v33.394c9.194,0.003,16.69,7.5,16.69,16.693s-7.496,16.69-16.69,16.693v33.394 c27.618-0.004,50.081-22.469,50.081-50.087S283.624,0.004,256.006,0z"></path>
              <path style="fill:#FFAA00;" d="M256,512c-46.043,0-83.478-37.435-83.478-83.478c0-9.228,7.467-16.696,16.696-16.696h133.565 c9.228,0,16.696,7.467,16.696,16.696C339.478,474.565,302.043,512,256,512z"></path>
              <path style="fill:#FF7705;" d="M322.783,411.826h-66.777V512c46.042-0.004,83.473-37.437,83.473-83.478 C339.478,419.293,332.011,411.826,322.783,411.826z"></path>
              <path style="fill:#FFC44D;" d="M439.652,348.113v-97.678C439.642,149,357.435,66.793,256,66.783 C154.565,66.793,72.358,149,72.348,250.435v97.678c-19.41,6.901-33.384,25.233-33.391,47.017 c0.01,27.668,22.419,50.075,50.087,50.085h333.913c27.668-0.01,50.077-22.417,50.087-50.085 C473.036,373.346,459.063,355.014,439.652,348.113z"></path>
              <path style="fill:#FFAA00;" d="M439.652,348.113v-97.678C439.642,149,357.435,66.793,256,66.783v378.432h166.957 c27.668-0.01,50.077-22.417,50.087-50.085C473.036,373.346,459.063,355.014,439.652,348.113z"></path>
              <path style="fill:#FFF3DB;" d="M155.826,267.13c-9.228,0-16.696-7.467-16.696-16.696c0-47.022,28.011-89.283,71.381-107.641 c8.446-3.587,18.294,0.326,21.88,8.836c3.62,8.51-0.358,18.294-8.836,21.88c-31.012,13.142-51.033,43.337-51.033,76.925 C172.522,259.663,165.054,267.13,155.826,267.13z"></path>
            </g>
          </svg>
          <span class="px-1 py-1 rounded-xl text-black text-sm">0</span>
        </a>
        <p class="text-xs text-center text-ellipsis overflow-hidden">
          {{ Auth::user()->name }}
        </p>
        <p class="text-xs text-center text-ellipsis overflow-hidden">
          {{ Auth::user()->email }}
        </p>
      </div>

   </ul>
 </div>
 <!-- Navbar END -->