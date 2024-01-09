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
        <header>
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
            <div class="wrapper bg-red-500 h-full w-full">
                <div class="contaienr px-4 py-12">
                    <div class="grid grid-cols-1">
                        <div class="bg-white w-full h-40"></div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
