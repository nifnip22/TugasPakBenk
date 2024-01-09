<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite(['resources/css/app.css', 'resources/scss/app.scss'])
    </head>
    <body>
        <header class="hidden md:block">
            <div class="sidebar">
                <nav>
                    <div id="shapes">
                        <div id="line"></div>
                        <div id="circle" class="flex flex-col items-center justify-around pr-[0.4rem]">
                            <div class="w-5 h-5 bg-black rounded-full"></div>
                            <div class="w-5 h-5 bg-black rounded-full"></div>
                            <div class="w-5 h-5 bg-black rounded-full"></div>
                        </div>
                    </div>
                    <ul id="navigation">
                        <li>
                            <a href="?notice=about"><img class="w-[10rem]" src="{{ asset('assets/images/icon/logo-dark.png') }}" alt=""></a>
                        </li>
                        <hr>
                        <li id="nav-btn">
                            <ul>
                                <li>
                                    <div>
                                        <a href="?notice=rombel">Rombel</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="?notice=anggota">Anggota Rombel</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="?notice=siswa">Siswa</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="?notice=guru">guru</a>
                                    </div>
                                </li>
                                {{-- for the blue strips --}}
                                @php
                                    $lineLoop = 15;
                                @endphp
                                @for ($i = 0; $i < $lineLoop; $i++)
                                    <li><div></div></li>
                                @endfor
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="content">
            <div class="wrapper h-full w-full">
                <div class="container px-4 py-12">
                    <div class="grid grid-cols-1 w-full">
                        <div class="w-full h-auto rounded-xl drop-shadow-sm flex py-4 justify-around flex-wrap gap-4">
                            <div class="sticker-hanger drop-shadow-md -top-0 w-12 h-full md:w-full md:h-10 rounded-lg absolute"></div>
                            <div class="w-[15rem] h-[13rem] bg-yellow-400 shadow-md drop-shadow-xl shadow-slate-500/10 rotate-2 hover:rotate-0 hover:scale-105 transition-all duration-500 ease-in-out p-2">
                                <div id="guru-terajin" class="px-2">
                                    <h1>Guru Terajin</h1>
                                    <hr class="rotate-1">
                                </div>
                                <div id="sticker-content">
                                    Bammbang Wicaksono
                                </div>
                            </div>
                            <div class="w-[15rem] h-[13rem] bg-yellow-400 shadow-md drop-shadow-xl shadow-slate-500/10 rotate-2 hover:rotate-0 hover:scale-105 transition-all duration-500 ease-in-out p-2">
                                <div id="guru-terajin" class="px-2">
                                    <h1>Guru Terajin</h1>
                                    <hr class="rotate-1">
                                </div>
                                <div id="sticker-content">
                                    Bammbang Wicaksono
                                </div>
                            </div>
                            <div class="w-[15rem] h-[13rem] bg-yellow-400 shadow-md drop-shadow-xl shadow-slate-500/10 rotate-2 hover:rotate-0 hover:scale-105 transition-all duration-500 ease-in-out p-2">
                                <div id="guru-terajin" class="px-2">
                                    <h1>Guru Terajin</h1>
                                    <hr class="rotate-1">
                                </div>
                                <div id="sticker-content">
                                    Bammbang Wicaksono
                                </div>
                            </div>
                            <div class="w-[15rem] h-[13rem] bg-yellow-400 shadow-md drop-shadow-xl shadow-slate-500/10 rotate-2 hover:rotate-0 hover:scale-105 transition-all duration-500 ease-in-out p-2">
                                <div id="guru-terajin" class="px-2">
                                    <h1>Guru Terajin</h1>
                                    <hr class="rotate-1">
                                </div>
                                <div id="sticker-content">
                                    Bammbang Wicaksono
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
