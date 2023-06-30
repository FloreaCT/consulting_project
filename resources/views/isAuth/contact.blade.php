@extends ('layout')


@section('content')
<span :class="{ 'hidden': !isActive }"></span>
<div  :class="{ 'col-span-2': !isActive }">
  
  <!-- Hero START -->
<div class="relative flex flex-col h-100 overflow-hidden">
  <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
  <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Contacts</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Contact - START -->
  <!-- Contact Search - START -->
  <div class="grid grid-cols-2 max-sm:grid-cols-1 gap-4 p-2">
    <div class="relative flex flex-col justify-between navButton font-[600] mb-2"  x-data="{ email: '' }">
      <p>Search Contact</p>
      <div class="flex flex-nowrap overflow-hidden">
        <input type="email" name="email" class="rounded-l p-2 w-[100%] text-black" placeholder="Email" required x-model="email">
        <button type="submit" class="bg-[#f08409] rounded-r h-100 w-10" x-show="email.trim() !== ''">
              <svg class="h-100 w-100" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#f08409da" stroke-width="1.248"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L9.70711 19.7071C9.31658 20.0976 8.68342 20.0976 8.29289 19.7071C7.90237 19.3166 7.90237 18.6834 8.29289 18.2929L14.5858 12L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289Z" fill="#ffffff"></path> </g></svg>
          </button>
      </div>
    </div>
    <!-- Contact Search - END -->
    <!-- Add New Contact - Start -->
    <div class="relative flex flex-col justify-between navButton font-[600] mb-2"  x-data="{ email: '' }">
      <p>Add New Contact</p>
      <div class="flex flex-nowrap overflow-hidden">
        <input type="email" name="email" class="rounded-l p-2 w-[100%] text-black" placeholder="Email" required x-model="email">
        <button type="submit" class="bg-[#f08409] rounded-r h-100 w-10" x-show="email.trim() !== ''">
              <svg class="h-100 w-100" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#f08409da" stroke-width="1.248"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L9.70711 19.7071C9.31658 20.0976 8.68342 20.0976 8.29289 19.7071C7.90237 19.3166 7.90237 18.6834 8.29289 18.2929L14.5858 12L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289Z" fill="#ffffff"></path> </g></svg>
          </button>
        </div>
      </div>
    </div>
      <!-- Add New Contact - END -->

  
  <!-- List Of Contacts - START -->
  <div class="flex flex-wrap justify-center py-2 px-2 transition-all">
    <!-- Contact Card - START -->
    <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded hover:scale-[1.1] transition-all duration-500">
      <span class="mx-auto relative">
        <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
        <span class="absolute top-0 right-0"  title="Business Premium">@include('components.rank',['cs' => '01'])</span>
      </span>
      
      <p class="text-xs text-center line-clamp-1 font-bold" title="User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa">Some User Name</p>
      <p class="text-xs text-center line-clamp-1" title="User Email">UserEmail@email.user</p>
    
      <div class="flex flex-nowrap items-center justify-center gap-4">
        <button title="Send File">@include('components.sendfilesvg')</button>
        <a title="Send Email" href="mailto:UserEmail@email.user?subject=Query&amp;body=Your message...">@include('components.emailsvg')</a>
        <button title="Delete Contact">@include('components.deleteusersvg')</button>
      </div>
    </div>
    <!-- Contact Card - END -->
    <!-- Contact Card - START -->
    <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded hover:scale-[1.1] transition-all duration-500">
      <span class="mx-auto relative">
        <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
        <span class="absolute top-0 right-0"  title="Business Premium">@include('components.rank',['cs' => '01'])</span>
      </span>
      
      <p class="text-xs text-center line-clamp-1 font-bold" title="User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa">Some User Name</p>
      <p class="text-xs text-center line-clamp-1" title="User Email">UserEmail@email.user</p>
    
      <div class="flex flex-nowrap items-center justify-center gap-4">
        <button title="Send File">@include('components.sendfilesvg')</button>
        <a title="Send Email" href="mailto:UserEmail@email.user?subject=Query&amp;body=Your message...">@include('components.emailsvg')</a>
        <button title="Delete Contact">@include('components.deleteusersvg')</button>
      </div>
    </div>
    <!-- Contact Card - END -->
    <!-- Contact Card - START -->
    <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded hover:scale-[1.1] transition-all duration-500">
      <span class="mx-auto relative">
        <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
        <span class="absolute top-0 right-0"  title="Business Premium">@include('components.rank',['cs' => '01'])</span>
      </span>
      
      <p class="text-xs text-center line-clamp-1 font-bold" title="User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa">Some User Name</p>
      <p class="text-xs text-center line-clamp-1" title="User Email">UserEmail@email.user</p>
    
      <div class="flex flex-nowrap items-center justify-center gap-4">
        <button title="Send File">@include('components.sendfilesvg')</button>
        <a title="Send Email" href="mailto:UserEmail@email.user?subject=Query&amp;body=Your message...">@include('components.emailsvg')</a>
        <button title="Delete Contact">@include('components.deleteusersvg')</button>
      </div>
    </div>
    <!-- Contact Card - END -->
    <!-- Contact Card - START -->
    <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded hover:scale-[1.1] transition-all duration-500">
      <span class="mx-auto relative">
        <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
        <span class="absolute top-0 right-0"  title="Business Premium">@include('components.rank',['cs' => '01'])</span>
      </span>
      
      <p class="text-xs text-center line-clamp-1 font-bold" title="User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa">Some User Name</p>
      <p class="text-xs text-center line-clamp-1" title="User Email">UserEmail@email.user</p>
    
      <div class="flex flex-nowrap items-center justify-center gap-4">
        <button title="Send File">@include('components.sendfilesvg')</button>
        <a title="Send Email" href="mailto:UserEmail@email.user?subject=Query&amp;body=Your message...">@include('components.emailsvg')</a>
        <button title="Delete Contact">@include('components.deleteusersvg')</button>
      </div>
    </div>
    <!-- Contact Card - END -->
    <!-- Contact Card - START -->
    <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded hover:scale-[1.1] transition-all duration-500">
      <span class="mx-auto relative">
        <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
        <span class="absolute top-0 right-0"  title="Business Premium">@include('components.rank',['cs' => '01'])</span>
      </span>
      
      <p class="text-xs text-center line-clamp-1 font-bold" title="User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa">Some User Name</p>
      <p class="text-xs text-center line-clamp-1" title="User Email">UserEmail@email.user</p>
    
      <div class="flex flex-nowrap items-center justify-center gap-4">
        <button title="Send File">@include('components.sendfilesvg')</button>
        <a title="Send Email" href="mailto:UserEmail@email.user?subject=Query&amp;body=Your message...">@include('components.emailsvg')</a>
        <button title="Delete Contact">@include('components.deleteusersvg')</button>
      </div>
    </div>
    <!-- Contact Card - END -->
    <!-- Contact Card - START -->
    <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded hover:scale-[1.1] transition-all duration-500">
      <span class="mx-auto relative">
        <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
        <span class="absolute top-0 right-0"  title="Business Premium">@include('components.rank',['cs' => '01'])</span>
      </span>
      
      <p class="text-xs text-center line-clamp-1 font-bold" title="User Name aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa">Some User Name</p>
      <p class="text-xs text-center line-clamp-1" title="User Email">UserEmail@email.user</p>
    
      <div class="flex flex-nowrap items-center justify-center gap-4">
        <button title="Send File">@include('components.sendfilesvg')</button>
        <a title="Send Email" href="mailto:UserEmail@email.user?subject=Query&amp;body=Your message...">@include('components.emailsvg')</a>
        <button title="Delete Contact">@include('components.deleteusersvg')</button>
      </div>
    </div>
    <!-- Contact Card - END -->
  </div>
  <!-- List Of Contacts - END -->
  <!-- Contact - END -->

</div>
@endsection