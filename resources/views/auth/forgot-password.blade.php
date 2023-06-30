@extends ('layout')


@section('content')
  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
  <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
  <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Forgot Password</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->
  
  
  <!-- Forgot PW - START -->
  <div class="flex flex-col py-6">
    

    <!-- Session Status -->
    <div class="flex justify-center">
    <x-auth-session-status class="mb-4 text-2xl" :status="session('status')" />
    </div>
    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col sm:w-4/5 max-sm:w-[100%] max-w-[998px] mx-auto p-4">
        @csrf
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-2xl" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>

  <!-- Forgot PW - END -->

@endsection