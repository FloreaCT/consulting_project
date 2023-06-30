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
        <h1 class="font-bold text-3xl">Files</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Files - START -->
  <div class="flex flex-col py-6 border-2 border-[#e6e6e6] rounded-lg" x-data="{ isActive: 2 }">

    <div class="widget col-span-2 flex flex-col ">
      <!--  -->
      <div class="flex flex-nowrap justify-evenly text-xs">
        <div class="w-[100%] px-2 flex justify-evenly">

          <!-- Tab 1 -->
          <div class="accordion-item flex w-[60%] max-w-[800px] min-w-[100px] transition justify-center mx-auto my-1 py-2" :class="{ 'border-b-2 grayscale': isActive !== 1 }">
            <div class="accordion-header w-[60%] cursor-pointer flex justify-center items-center transition text-start" @click="isActive === 1 ? '' : isActive = 1">
              <div class="flex flex-nowrap justify-evenly w-[60%] flex-col">
                <span class="mx-auto w-[100%] max-w-[125px] max-h-[125px]">@include('components.receivedfile')</span>
                <p class="text-sm text-center line-clamp-1 font-bold">Received</p>
              </div>
            </div>
          </div>
          <!-- Tab 1 -->

          
          <!-- Tab 2 -->
          <div class="accordion-item flex w-[60%] max-w-[800px] min-w-[100px] transition justify-center mx-auto my-1 py-2 border-l-2 border-r-2" :class="{ 'border-b-2 grayscale': isActive !== 2 }">
            <div class="accordion-header w-[60%] cursor-pointer flex justify-center items-center transition text-start" @click="isActive === 2 ? '' : isActive = 2">
              <div class="flex flex-nowrap justify-evenly w-[60%] flex-col">
                <span class="mx-auto w-[100%] max-w-[125px] max-h-[125px]">@include('components.sendfile')</span>
                <p class="text-sm text-center line-clamp-1 font-bold">Send New</p>
              </div>
            </div>
          </div>
          <!-- Tab 2 -->


          <!-- Tab 3 -->
          <div class="accordion-item flex w-[60%] max-w-[800px] min-w-[100px] transition justify-center mx-auto my-1 py-2 border-l-2 border-r-2" :class="{ 'border-b-2 grayscale': isActive !== 3 }">
            <div class="accordion-header w-[60%] cursor-pointer flex justify-center items-center transition text-start" @click="isActive === 3 ? '' : isActive = 3">
              <div class="flex flex-nowrap justify-evenly w-[60%] flex-col">
                <span class="mx-auto w-[100%] max-w-[125px] max-h-[125px]">@include('components.sentfile')</span>
                <p class="text-sm text-center line-clamp-1 font-bold">Sent</p>
              </div>
            </div>
          </div>
          <!-- Tab 3 -->

        </div>
      </div>
    </div>


    <div class="tabContainer">
      <!-- Received Tab Content - START -->
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


          <!-- Transmisions Loop 5/page - START -->

          <!-- Start of first data transmision -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">From: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span>Success!</span></p>
                </div>
              </div>
            </div>

            <div class="relative flex flex-wrap p-2 text-xs">
              <!-- loop over files. MAX 5 FILES! -->
              <span class="absolute top-[-10px] left-[15px] text-[1.6rem] rotate-90">📎</span>
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
          <!-- end of first data transmision -->
          
          <!-- Start of second data transmision// example of failed transfer -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">From: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span class="text-[#fc1010]">Fail!</span></p>
                </div>
              </div>
            </div>

            <!-- do not loop over files -->
          </div>
          <!-- end of second data transmision -->

          <!-- Start of thrid data transmision -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">From: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span>Success!</span></p>
                </div>
              </div>
            </div>

            <div class="relative flex flex-wrap p-2 text-xs">
              <!-- loop over files. MAX 5 FILES! -->
              <span class="absolute top-[-10px] left-[15px] text-[1.6rem] rotate-90">📎</span>
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
          <!-- end of thrid data transmision -->

          <!-- 3 more loops to put.. -->


          <!-- Transmisions Loop 5/page - END -->

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
      <!-- Received Tab Content - END -->


       <!-- Send New Tab Content - START -->
      <div class="accordion-content transition grid grid-cols-1 justify-items-center" x-show="isActive === 2">
        <script>
          fetch("https://api.ipify.org?format=json").then(async(r)=>{document.getElementById("userip").value = (await r.json()).ip })
        </script>
        <form action="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-4 p-2 max-w-[500px] w-[100%]" >
          <!-- User Details -->
          <div class="grid grid-cols-1 gap-1 w-[100%]">
            <p class="border-b-2">Sender</p>
            <input class="rounded text-sm" type="text" value="Loading..." id="userip" readonly placeholder="Ip Address">
            <input class="rounded text-sm" type="text" value="{{ Auth::user()->name }}" id="useremail" placeholder="User Email">
            <input class="rounded text-sm" type="text" value="{{ Auth::user()->email }}" id="userdisplayname" placeholder="User Name">
          </div>

          <!-- Receiver Details -->
          <div class="grid grid-cols-1 gap-1 w-[100%]">
            <p class="border-b-2">Receiver</p>
            <input class="rounded text-sm" type="text" value="" id="useremail" placeholder="Receiver Email*">
            <input class="rounded text-sm" type="text" value="" id="userdisplayname" placeholder="Receiver Name (optional)">
          </div>

          <div class="flex flex-nowrap border-b-2">
            <p class="mr-[5px]">Files</p><span>0</span><span>/</span><span>5</span>
          </div>

          <div class="flex flex-wrap gap-4 p-2 max-w-[500px] w-[100%]">
            <input type="file" name="file" id="file1" class="m-2 p-2 shadow-xl" />
            <input type="file" name="file" id="file2" class="m-2 p-2 shadow-xl" />
            <input type="file" name="file" id="file3" class="m-2 p-2 shadow-xl" />
            <input type="file" name="file" id="file4" class="m-2 p-2 shadow-xl" />
            <input type="file" name="file" id="file5" class="m-2 p-2 shadow-xl" />
          </div>

          <button class="text-white font-[600] p-2 border-2 border-white whitespace-nowrap rounded bg-[--c2]">Send</button>
        </form>
        

      </div>
       <!-- Send New Tab Content - END -->


      <!-- Sent Tab Content - START -->
      <div class="accordion-content transition" x-show="isActive === 3">
        <div class="relative flex flex-col flex-nowrap p-2">

          <!-- Paginate top half - START -->
          <div class="paginate flex justify-center items-center gap-4 mt-2">
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">1</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">2</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">3</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">4</a>
          </div>
          <!-- Paginate top half - END -->


          <!-- Transmisions Loop 5/page - START -->

          <!-- Start of first data transmision -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">To: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span class="text-[#fc1010]">Fail!</span></p>
                </div>
              </div>
            </div>

            <!-- do not loop over files -->
          </div>
          <!-- end of first data transmision -->
          
          <!-- Start of second data transmision -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">To: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span>Success!</span></p>
                </div>
              </div>
            </div>

            <div class="relative flex flex-wrap p-2 text-xs">
              <!-- loop over files. MAX 5 FILES! -->
              <span class="absolute top-[-10px] left-[15px] text-[1.6rem] rotate-90">📎</span>
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
          <!-- end of second data transmision -->

          <!-- Start of thrid data transmision -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">To: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span>Success!</span></p>
                </div>
              </div>
            </div>

            <div class="relative flex flex-wrap p-2 text-xs">
              <!-- loop over files. MAX 5 FILES! -->
              <span class="absolute top-[-10px] left-[15px] text-[1.6rem] rotate-90">📎</span>
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
          <!-- end of thrid data transmision -->

          <!-- 3 more loops to put.. -->


          <!-- Transmisions Loop 5/page - END -->

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
      <!-- Sent Tab Content - END -->
    </div>


  </div>
  <!-- Files - END -->

</div>
@endsection