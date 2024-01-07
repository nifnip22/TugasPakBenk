@include('auth.partials._header')
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Username')" />
        <x-text-input 
        id="email" 
        class="relative mt-1 w-full shadow-inner bg-slate-50/30 shadow-slate-500/50 border-slate-300/10 border-b-2 
        focus:ring-0 focus:outline-none focus:border-b-4 focus:border-lime-500 focus:z-10 
        valid:border-green-500/30 valid:border-b-4 valid:bg-transparent valid:text-black
        outline-none border-t-0 border-l-0 border-r-0 transition-all duration-300 ease-in-out" 
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
        class="relative mt-1 w-full shadow-inner bg-slate-50/30 shadow-slate-500/50 border-slate-300/10 border-b-2 
        focus:ring-0 focus:outline-none focus:border-b-4 focus:border-lime-500 focus:z-10 
        valid:border-green-500/30 valid:border-b-4 valid:bg-transparent valid:text-black
        outline-none border-t-0 border-l-0 border-r-0 transition-all duration-300 ease-in-out" 
        style="outline: none ;"
        type="password" 
        name="password" 
        required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        Apakah anda 
        @if (Route::has('register'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('belum register?') }}
            </a>
        @endif 
        atau 
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('lupa sandi anda?') }}
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
@include('auth.partials._footer')

{{-- <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label> --}}