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
    <div class="my-8 text-center text-white overflow-auto">
        <div class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] flex flex-col justify-center items-center">
            <p class="text-3xl font-bold">Under Maintenance</p>
            <p class="text-sm">EZEPOST is under maintenance and will be back soon. Subscribe to get notified.</p>
            <div class="grid grid-cols-4 max-[900px]:grid-cols-1 gap-2 m-4">
                <div title="Days" class="p-4 max-[900px]:p-1 text-xl font-bold border-2 flex flex-col">
                    <span id="days">0</span>
                    <span>Days</span>
                </div>
                <div title="Hours" class="p-4 max-[900px]:p-1 text-xl font-bold border-2 flex flex-col">
                    <span id="hours">0</span>
                    <span>Hours</span>
                </div>
                <div title="Minutes" class="p-4 max-[900px]:p-1 text-xl font-bold border-2 flex flex-col">
                    <span id="minutes">0</span>
                    <span>Minutes</span>
                </div>
                <div title="Seconds" class="p-4 max-[900px]:p-1 text-xl font-bold border-2 flex flex-col">
                    <span id="seconds">0</span>
                    <span>Seconds</span>
                </div>
            </div>
            <form onsubmit="" action="" id="maintenanceForm" name="maintenanceForm" method="POST" class="relative flex justify-between navButton font-[600] mb-2" x-data="{ email: '' }">
                @csrf
                <input type="email" name="email" class="rounded-l p-2 w-[100%] text-black" placeholder="Your Email" required x-model="email">
                <button type="submit" class="bg-white rounded-r h-100 w-10" x-show="email.trim() !== ''">
                    <svg class="h-100 w-100" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#f08409da" stroke-width="1.248">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L9.70711 19.7071C9.31658 20.0976 8.68342 20.0976 8.29289 19.7071C7.90237 19.3166 7.90237 18.6834 8.29289 18.2929L14.5858 12L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289Z" fill="#ffffff"></path>
                    </g>
                    </svg>
                </button>
            </form>

        </div>
    </div>
  </div>
</div>

<script>
    // Set the end of maintenance datetime

    //model
    var startDatetime = new Date("2023-06-26T18:37:30Z");
    var endDatetime = new Date("2023-06-28T18:37:00Z");

    var countdownInterval;
    
    if (new Date() >= startDatetime) {
        // Update the countdown every second
        countdownInterval = setInterval(updateCountdown, 1000);
    } else {
        window.location.href = '/';
    }

    function updateCountdown() {
        // Get the current datetime
        var currentDatetime = new Date();

        // Calculate the remaining time in seconds
        var remainingTime = Math.floor((endDatetime - currentDatetime) / 1000);

        // Exit the countdown if the endDatetime has passed
        if (remainingTime < 0) {
            clearInterval(countdownInterval);
            window.location.href = '/';
            return;
        } 

        // Calculate the remaining days, hours, minutes, and seconds
        var days = Math.floor(remainingTime / (60 * 60 * 24));
        var hours = Math.floor((remainingTime % (60 * 60 * 24)) / (60 * 60));
        var minutes = Math.floor((remainingTime % (60 * 60)) / 60);
        var seconds = Math.floor(remainingTime % 60);

        // Update the countdown elements with the remaining time
        document.getElementById("days").textContent = days;
        document.getElementById("hours").textContent = hours;
        document.getElementById("minutes").textContent = minutes;
        document.getElementById("seconds").textContent = seconds;
    }
</script>

</body>
</html>