
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/scss/auth.scss') }}">
</head>
<body class="bg-blue-50">
    <section class="shape-container w-full h-full absolute top-0 left-0 1z-1">
        <div class="rotated-rect"></div>
        <div class="circle-container">
            <div id="circle1"></div>
            <div id="circle2"></div>
            <div id="circle3"></div>
        </div>
    </section>
    {{-- <x-guest-layout> --}}
    <div class="auth-layout relative z-1 w-full h-full flex flex-col justify-center items-center backdrop-blur-3xl">
        <section class="absolute z-2 top-0 left-0 flex justify-center items-start w-full h-full"  id="image-container">
            <img class="absolute z-1 -top-[0.5rem] ml-[4rem] w-[15rem] __floatAnimation" style="transform: rotate(15deg)" src="{{ asset('assets/images/auth/note3.png') }}" alt="">
        </section>
        <div class="relative z-1 bg-white/80 shadow-slate-500/10 shadow-xl rounded-2xl w-full md:w-[40%] px-8 py-12 mx-4 backdrop-blur-sm">
            <img class="absolute z-3 -bottom-[9rem] -left-12 z-3 w-60 md:scale-100 __floatAnimation" src="{{ asset('assets/images/auth/book3.png') }}" alt="">

            <x-auth-session-status class="mb-4" :status="session('status')" />
        
            <form class="relative z-2" method="POST" action="{{ route('login') }}">
                @csrf
        
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Username')" />
                    <x-text-input 
                    id="email" 
                    class="relative mt-1 w-full shadow-inner bg-slate-50/90 border-slate-300/10 border-b-2 
                    focus:ring-0 focus:outline-none focus:border-b-4 focus:border-lime-500 focus:z-10 
                    valid:border-green-500/30 valid:border-b-4 valid:bg-transparent valid:text-black
                    shadow-slate-500/20 outline-none border-t-0 border-l-0 border-r-0 transition-all duration-300 ease-in-out" 
                    type="text" 
                    name="email" 
                    :value="old('email')" 
                    required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input 
                    id="password" 
                    class="relative mt-1 w-full shadow-inner bg-slate-50/30 border-slate-300/10 border-b-2 
                    focus:ring-0 focus:outline-none focus:border-b-4 focus:border-lime-500 focus:z-10 
                    valid:border-green-500/30 valid:border-b-4 valid:bg-transparent valid:text-black
                    shadow-slate-500/20 outline-none border-t-0 border-l-0 border-r-0 transition-all duration-300 ease-in-out" 
                    style="outline: none ;"
                    type="password" 
                    name="password" 
                    required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Remember Me -->
                <div class="block mt-4">
                    {{-- <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label> --}}
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Lupa sandi anda?') }}
                        </a>
                    @endif
                </div>
        
                <div class="flex items-center justify-end mt-8">
                    
        
                    <x-primary-button 
                    class="ml-4 btn btn-sm h-0 w-26 px-8  bg-green-500 shadow-inner shadow-emerald-300 hover:scale-105 
                    hover:bg-green-600 hover:shadow-md hover:shadow-slate-300/10 hover:ring-0 hover:outline-none hover:border-none
                    focus:outline-none focus:ring-0 
                    transition-all duration-300 ease-in-out ">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    {{-- </x-guest-layout> --}}
</body>
