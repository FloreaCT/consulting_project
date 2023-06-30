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
        <h1 class="font-bold text-3xl">Top-Up</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  @if(isset($status))
    @if($status === "success")
    <div class="flex justify-between p-4 my-2 bg-[#51ee5170] animate-fadeIN">
      <p>{{$message}}</p>
      <button onclick="this.parentElement.remove()">@include('components.closebutton')</button>
    </div>
    @elseif($status === "fail")
    <div class="flex justify-between p-4 my-2 bg-[#ee565170] animate-fadeIN">
      <p>{{$message}}</p>
      <button onclick="this.parentElement.remove()">@include('components.closebutton')</button>
    </div>
    @endif
  @endif

  @if(substr(Auth::user()->controlstring, 2, 1) !== '0')
  <!-- Top-Up IF USER HAS A PLAN - START -->
  <div class="flex flex-wrap py-6 justify-center items-center">
    <!-- User Card -->
    <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded transition-all duration-500">
      <span class="mx-auto relative">
        @include('components.usersvg')
        <span class="absolute top-0 right-0 h-[20px] w-[20px]"  title="Business Premium">@include('components.rank')</span>
      </span>
      <p class="text-xs text-center line-clamp-1 font-bold" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
      <p class="text-xs text-center line-clamp-1" title="{{ Auth::user()->email }}">{{ Auth::user()->email }}</p>
    </div>
    <!-- User Card -->
    <div class="flex flex-col gap-2">
      <p>Your current plan does <u>not</u> need to be topped up. Enjoy using our unlimited services!</p>
      <div class="flex flex-wrap items-baseline">
        <p>In need of assisstance?</p>
        <a href="/contact" class="text-white font-[600] p-2 mx-1 sborder-2 border-white whitespace-nowrap rounded bg-[--c2]">Contact Us</a>
      </div>
    </div>
  </div>
  <!-- Top-Up - END -->
  @else

  <!-- Top-Up IF USER HAS **NOT** A PLAN - START -->
  <div class="flex flex-wrap py-6 justify-evenly items-center gap-4 shadow-xl m-2">
    <form method="POST" class="flex flex-col items-start justify-start gap-2"  x-data="{ amount: '' }">
      @csrf
      <p class="text-xl mx-auto">Insert amount</p>
      <input type="number" step="0.01" name="amount" class="rounded p-2 w-[100%] text-black text-center" placeholder="Amount" required x-model="amount">
      <button type="submit" class="bg-[#f08409] rounded-r w-[100%] inline-flex justify-center items-center rounded" >
         <span class="text-white">Submit</span><svg class="h-[20px] w-100" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#f08409da" stroke-width="1.248"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L9.70711 19.7071C9.31658 20.0976 8.68342 20.0976 8.29289 19.7071C7.90237 19.3166 7.90237 18.6834 8.29289 18.2929L14.5858 12L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289Z" fill="#ffffff"></path> </g></svg>
      </button>
    </form>
    <div class="flex flex-col items-center justify-center">
          @include('components.token')
          <p class="text-center font-bold">Top-Up</p>
          <div class="flex justify-evenly flex-col w-[100%] items-center">
          <p class="text-center">Balance: £<span>{{$balance}}</span></p> 
          </div>
      </div>
  <!-- Top-Up - END -->
  @endif
  
</div>
@endsection