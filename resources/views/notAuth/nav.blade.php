 <!-- Mobile Navbar START -->
 <div x-data="{ isActive: false }" class="sm:hidden flex justify-end fixed right-0 top-10 z-30" >
      <button class="sm:hidden max-sm:flex relative justify-end mt-6 bg-[#ffffffc4] p-4" 
      @click="isActive = !isActive" :class="{ 'active': isActive }">
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
      <div class="grid grid-cols-2 justify-items-center gap-4 absolute top-[100%] p-4 right-0 bg-[#ffebde] w-[100vw]" x-show="isActive">
                <a  @click="isActive = !isActive" href="/" class="col-span-2 h-16 w-[87vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >Home</a>
                <a  @click="isActive = !isActive" href="/services" class="h-16 w-[40vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >Services</a>
                <a  @click="isActive = !isActive" href="/plans" class="h-16 w-[40vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >Plans</a>
                <a  @click="isActive = !isActive" href="/contact" class="h-16 w-[40vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >Contact</a>
                <a  @click="isActive = !isActive" href="/about" class="h-16 w-[40vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >About</a>
                <a  @click="isActive = !isActive" href="/download" class="{{ Route::currentRouteName() === 'download' ? 'isActive' : '' }} h-16 w-[40vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >Download</a>
            </div>

        </div>
        <!-- Mobile Navbar END -->
        
        <!-- Navbar START -->
        <div class="max-sm:hidden flex relative justify-end bg-[#ffffffc4]">
            <ul class="z-20 flex gap-4 pr-4 py-2">
                <a class="p-2 relative navButton font-[600]" href="/">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded"
                    ></span>
                    <span class="z-20 relative">Home</span>
                </a>
                <a class="p-2 relative navButton font-[600]" href="/services">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded"
                    ></span>
                    <span class="z-20 relative">Services</span>
                </a>

                <a class="p-2 relative navButton font-[600]" href="/plans">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded"
                    ></span>
                    <span class="z-20 relative">Pricing</span>
                </a>
                <a class="p-2 relative navButton font-[600]" href="/contact">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded"
                    ></span>
                    <span class="z-20 relative">Contact</span>
                </a>
                <a class="p-2 relative navButton font-[600]" href="/about">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded"
                    ></span>
                    <span class="z-20 relative">About</span>
                </a>
                <a class="p-2 relative navButton font-[600]" href="/download">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded"
                    ></span>
                    <span class="z-20 relative">Download</span>
                </a>
            </ul>
        </div>
        <!-- Navbar END -->