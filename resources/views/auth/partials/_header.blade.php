<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/scss/auth.scss', 'resources/css/app.css'])
</head>
<body class="bg-blue-50 h-[100svh] overflow-clip">
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
