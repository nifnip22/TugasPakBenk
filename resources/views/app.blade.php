<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite(['resources/css/app.css', 'resources/scss/app.scss'])
    </head>
    <body class="">
        <header class="">
            <div id="navbar" class="w-[100vw] h-[3.4rem] fixed top-0 z-[99] block md:hidden">
                <ul class="flex flex-row justify-between">
                    <li>
                        <a href="?notice=about"><img class="h-[2.3rem] mt-2 ml-4" src="{{ asset('assets/images/icon/logo-light.png') }}" alt=""></a>
                    </li>
                    <li>
                        <button id="navToggle">burger</button>
                    </li>
                </ul>
            </div>
            <div class="sidebar block fixed md:top-0 top-[3.4rem] left-0 transition-all duration-300 ease-out" >
                <nav id="sidebar" class="relative -left-[18rem] md:left-0 transition-all duration-200 ease-out">
                    <script>
                        const navToggle = document.getElementById('navToggle');
                        let navBool = false;

                        navToggle.addEventListener('click', function() {
                            navBool = !navBool;
                            console.log(navBool);
                            toggleSidebar();
                        });

                        var sideBar = document.getElementById('sidebar');
                        function toggleSidebar() {
                            if (navBool) {
                                // Add the class when navBool is true
                                sideBar.classList.remove('-left-[18rem]');
                                sideBar.classList.add('-left-[0rem]');
                            } else {
                                // Add the class when navBool is false
                                sideBar.classList.remove('-left-[0rem]');
                                sideBar.classList.add('-left-[18rem]');
                            }
                            // console.log(sideBar);
                        }
                    </script>
                    <div id="shapes">
                        <div id="line"></div>
                        <div id="circle" class="flex flex-col items-center justify-around pr-[0.4rem]">
                            <div class="w-5 h-5 bg-black rounded-full"></div>
                            <div class="w-5 h-5 bg-black rounded-full"></div>
                            <div class="w-5 h-5 bg-black rounded-full"></div>
                        </div>
                    </div>
                    <ul id="navigation">
                        <li class="hidden md:block">
                            <a href="?notice=about"><img class="w-[10rem]" src="{{ asset('assets/images/icon/logo-dark.png') }}" alt=""></a>
                        </li>
                        <hr>
                        
                        <li id="nav-btn">
                            <ul>
                                <li>
                                    <div id="nav-anchor" class="">
                                        <a href="?notice=rombel">Rombel</a>
                                        <div id="nav-pin" class="{{ $notice == 'rombel' ? '' : 'hidden' }}">
                                            <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="2.8rem" height="2.8rem" viewBox="0 0 32 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .isometric_acht{fill:#18f014;} .isometric_negen{fill:#24b521;} .isometric_elf{fill:#041c43;} .isometric_twaalf{fill:#000305;} .st0{fill:#225B49;} .st1{fill:#F28103;} .st2{fill:#7BD6C4;} .st3{fill:#F29227;} .st4{fill:#FF7344;} .st5{fill:#F8F7C5;} .st6{fill:#F5DF89;} .st7{fill:#AD9A74;} .st8{fill:none;} .st9{fill:#24b521;} .st10{fill:#F2D76C;} .st11{fill:#041c43;} .st12{fill:#000305;} </style> <g> <path class="isometric_acht" d="M20.995,15.479c0.024-0.712-0.452-1.438-1.488-1.978v-1.321c1.201-0.619,1.548-1.395,1.488-2.054 V8.606c-0.004-0.668-0.442-1.337-1.315-1.839c-1.767-1.018-4.623-1.023-6.379-0.012c-1.426,0.821-1.295,1.835-1.295,1.835v1.535 c-0.045,0.645,0.3,1.414,1.488,2.033c0,0,0,1.431,0,1.321c-1.038,0.535-1.513,1.259-1.488,1.971v1.489 c-0.049,0.702,0.381,1.414,1.315,1.952c1.767,1.018,4.623,1.023,6.379,0.012c0.935-0.539,1.36-1.256,1.295-1.964V15.479z"></path> <path class="isometric_negen" d="M20.995,15.421v1.519c0.065,0.707-0.36,1.425-1.295,1.964c-1.756,1.011-4.612,1.006-6.379-0.012 c-0.934-0.538-1.364-1.25-1.315-1.952v-1.535c0.004,0.665,0.432,1.331,1.315,1.839c1.767,1.018,4.623,1.023,6.379,0.012 C20.578,16.75,20.998,16.086,20.995,15.421z M20.995,8.606c0.013,2.387-5.004,3.362-7.675,1.823 c-0.883-0.509-1.311-1.175-1.315-1.839v1.535l0,0c-0.045,0.645,0.3,1.414,1.488,2.033v1.782h0.006 c-0.015,0.456,0.275,0.916,0.881,1.265c1.178,0.679,3.082,0.682,4.253,0.008c0.607-0.35,0.891-0.813,0.866-1.273h0.009v-1.761 c1.201-0.619,1.548-1.395,1.488-2.054l0,0V8.606z"></path> <path class="isometric_elf" d="M15.5,19.583v5.537h0.002c0,0,0.997,1.878,0.998,1.88c0.001-0.001,0.999-1.88,1-1.88v-2.828 c-0.389-1.005-0.881-1.905-1.463-2.661C15.857,19.62,15.678,19.607,15.5,19.583z"></path> <path class="isometric_twaalf" d="M16.037,19.631c0.582,0.755,1.074,1.656,1.463,2.661v-2.701 C17.019,19.652,16.527,19.662,16.037,19.631z"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="?notice=anggota">Anggota Rombel</a>
                                        <div id="nav-pin" class="{{ $notice == 'anggota' ? '' : 'hidden' }}">
                                            <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="2.8rem" height="2.8rem" viewBox="0 0 32 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .isometric_acht{fill:#18f014;} .isometric_negen{fill:#24b521;} .isometric_elf{fill:#041c43;} .isometric_twaalf{fill:#000305;} .st0{fill:#225B49;} .st1{fill:#F28103;} .st2{fill:#7BD6C4;} .st3{fill:#F29227;} .st4{fill:#FF7344;} .st5{fill:#F8F7C5;} .st6{fill:#F5DF89;} .st7{fill:#AD9A74;} .st8{fill:none;} .st9{fill:#24b521;} .st10{fill:#F2D76C;} .st11{fill:#041c43;} .st12{fill:#000305;} </style> <g> <path class="isometric_acht" d="M20.995,15.479c0.024-0.712-0.452-1.438-1.488-1.978v-1.321c1.201-0.619,1.548-1.395,1.488-2.054 V8.606c-0.004-0.668-0.442-1.337-1.315-1.839c-1.767-1.018-4.623-1.023-6.379-0.012c-1.426,0.821-1.295,1.835-1.295,1.835v1.535 c-0.045,0.645,0.3,1.414,1.488,2.033c0,0,0,1.431,0,1.321c-1.038,0.535-1.513,1.259-1.488,1.971v1.489 c-0.049,0.702,0.381,1.414,1.315,1.952c1.767,1.018,4.623,1.023,6.379,0.012c0.935-0.539,1.36-1.256,1.295-1.964V15.479z"></path> <path class="isometric_negen" d="M20.995,15.421v1.519c0.065,0.707-0.36,1.425-1.295,1.964c-1.756,1.011-4.612,1.006-6.379-0.012 c-0.934-0.538-1.364-1.25-1.315-1.952v-1.535c0.004,0.665,0.432,1.331,1.315,1.839c1.767,1.018,4.623,1.023,6.379,0.012 C20.578,16.75,20.998,16.086,20.995,15.421z M20.995,8.606c0.013,2.387-5.004,3.362-7.675,1.823 c-0.883-0.509-1.311-1.175-1.315-1.839v1.535l0,0c-0.045,0.645,0.3,1.414,1.488,2.033v1.782h0.006 c-0.015,0.456,0.275,0.916,0.881,1.265c1.178,0.679,3.082,0.682,4.253,0.008c0.607-0.35,0.891-0.813,0.866-1.273h0.009v-1.761 c1.201-0.619,1.548-1.395,1.488-2.054l0,0V8.606z"></path> <path class="isometric_elf" d="M15.5,19.583v5.537h0.002c0,0,0.997,1.878,0.998,1.88c0.001-0.001,0.999-1.88,1-1.88v-2.828 c-0.389-1.005-0.881-1.905-1.463-2.661C15.857,19.62,15.678,19.607,15.5,19.583z"></path> <path class="isometric_twaalf" d="M16.037,19.631c0.582,0.755,1.074,1.656,1.463,2.661v-2.701 C17.019,19.652,16.527,19.662,16.037,19.631z"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="?notice=siswa">Siswa</a>
                                        <div id="nav-pin" class="{{ $notice == 'siswa' ? '' : 'hidden' }}">
                                            <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="2.8rem" height="2.8rem" viewBox="0 0 32 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .isometric_acht{fill:#18f014;} .isometric_negen{fill:#24b521;} .isometric_elf{fill:#041c43;} .isometric_twaalf{fill:#000305;} .st0{fill:#225B49;} .st1{fill:#F28103;} .st2{fill:#7BD6C4;} .st3{fill:#F29227;} .st4{fill:#FF7344;} .st5{fill:#F8F7C5;} .st6{fill:#F5DF89;} .st7{fill:#AD9A74;} .st8{fill:none;} .st9{fill:#24b521;} .st10{fill:#F2D76C;} .st11{fill:#041c43;} .st12{fill:#000305;} </style> <g> <path class="isometric_acht" d="M20.995,15.479c0.024-0.712-0.452-1.438-1.488-1.978v-1.321c1.201-0.619,1.548-1.395,1.488-2.054 V8.606c-0.004-0.668-0.442-1.337-1.315-1.839c-1.767-1.018-4.623-1.023-6.379-0.012c-1.426,0.821-1.295,1.835-1.295,1.835v1.535 c-0.045,0.645,0.3,1.414,1.488,2.033c0,0,0,1.431,0,1.321c-1.038,0.535-1.513,1.259-1.488,1.971v1.489 c-0.049,0.702,0.381,1.414,1.315,1.952c1.767,1.018,4.623,1.023,6.379,0.012c0.935-0.539,1.36-1.256,1.295-1.964V15.479z"></path> <path class="isometric_negen" d="M20.995,15.421v1.519c0.065,0.707-0.36,1.425-1.295,1.964c-1.756,1.011-4.612,1.006-6.379-0.012 c-0.934-0.538-1.364-1.25-1.315-1.952v-1.535c0.004,0.665,0.432,1.331,1.315,1.839c1.767,1.018,4.623,1.023,6.379,0.012 C20.578,16.75,20.998,16.086,20.995,15.421z M20.995,8.606c0.013,2.387-5.004,3.362-7.675,1.823 c-0.883-0.509-1.311-1.175-1.315-1.839v1.535l0,0c-0.045,0.645,0.3,1.414,1.488,2.033v1.782h0.006 c-0.015,0.456,0.275,0.916,0.881,1.265c1.178,0.679,3.082,0.682,4.253,0.008c0.607-0.35,0.891-0.813,0.866-1.273h0.009v-1.761 c1.201-0.619,1.548-1.395,1.488-2.054l0,0V8.606z"></path> <path class="isometric_elf" d="M15.5,19.583v5.537h0.002c0,0,0.997,1.878,0.998,1.88c0.001-0.001,0.999-1.88,1-1.88v-2.828 c-0.389-1.005-0.881-1.905-1.463-2.661C15.857,19.62,15.678,19.607,15.5,19.583z"></path> <path class="isometric_twaalf" d="M16.037,19.631c0.582,0.755,1.074,1.656,1.463,2.661v-2.701 C17.019,19.652,16.527,19.662,16.037,19.631z"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="?notice=guru">guru</a>
                                        <div id="nav-pin" class="{{ $notice == 'guru' ? '' : 'hidden' }}">
                                            <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="2.8rem" height="2.8rem" viewBox="0 0 32 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .isometric_acht{fill:#18f014;} .isometric_negen{fill:#24b521;} .isometric_elf{fill:#041c43;} .isometric_twaalf{fill:#000305;} .st0{fill:#225B49;} .st1{fill:#F28103;} .st2{fill:#7BD6C4;} .st3{fill:#F29227;} .st4{fill:#FF7344;} .st5{fill:#F8F7C5;} .st6{fill:#F5DF89;} .st7{fill:#AD9A74;} .st8{fill:none;} .st9{fill:#24b521;} .st10{fill:#F2D76C;} .st11{fill:#041c43;} .st12{fill:#000305;} </style> <g> <path class="isometric_acht" d="M20.995,15.479c0.024-0.712-0.452-1.438-1.488-1.978v-1.321c1.201-0.619,1.548-1.395,1.488-2.054 V8.606c-0.004-0.668-0.442-1.337-1.315-1.839c-1.767-1.018-4.623-1.023-6.379-0.012c-1.426,0.821-1.295,1.835-1.295,1.835v1.535 c-0.045,0.645,0.3,1.414,1.488,2.033c0,0,0,1.431,0,1.321c-1.038,0.535-1.513,1.259-1.488,1.971v1.489 c-0.049,0.702,0.381,1.414,1.315,1.952c1.767,1.018,4.623,1.023,6.379,0.012c0.935-0.539,1.36-1.256,1.295-1.964V15.479z"></path> <path class="isometric_negen" d="M20.995,15.421v1.519c0.065,0.707-0.36,1.425-1.295,1.964c-1.756,1.011-4.612,1.006-6.379-0.012 c-0.934-0.538-1.364-1.25-1.315-1.952v-1.535c0.004,0.665,0.432,1.331,1.315,1.839c1.767,1.018,4.623,1.023,6.379,0.012 C20.578,16.75,20.998,16.086,20.995,15.421z M20.995,8.606c0.013,2.387-5.004,3.362-7.675,1.823 c-0.883-0.509-1.311-1.175-1.315-1.839v1.535l0,0c-0.045,0.645,0.3,1.414,1.488,2.033v1.782h0.006 c-0.015,0.456,0.275,0.916,0.881,1.265c1.178,0.679,3.082,0.682,4.253,0.008c0.607-0.35,0.891-0.813,0.866-1.273h0.009v-1.761 c1.201-0.619,1.548-1.395,1.488-2.054l0,0V8.606z"></path> <path class="isometric_elf" d="M15.5,19.583v5.537h0.002c0,0,0.997,1.878,0.998,1.88c0.001-0.001,0.999-1.88,1-1.88v-2.828 c-0.389-1.005-0.881-1.905-1.463-2.661C15.857,19.62,15.678,19.607,15.5,19.583z"></path> <path class="isometric_twaalf" d="M16.037,19.631c0.582,0.755,1.074,1.656,1.463,2.661v-2.701 C17.019,19.652,16.527,19.662,16.037,19.631z"></path> </g> </g></svg>
                                        </div>
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
        <section class="content mt-[3.4rem] md:mt-0">
            <div class="wrapper flex flex-col items-center justify-start h-full w-full">
                <div class="container px-4 py-12">
                    <div class="grid grid-cols-1 w-full my-4">
                        <div class="w-full h-auto rounded-xl drop-shadow-sm flex py-4 justify-around flex-wrap gap-4">
                            {{-- <div class="sticker-hanger drop-shadow-md -top-0 w-12 h-full md:w-full md:h-8 rounded-lg absolute"></div> --}}
                            <div class="md:w-[15rem] w-[10rem] md:h-[13rem] h-[10rem] bg-yellow-300 shadow-md drop-shadow-xl shadow-slate-500/10 rotate-2 hover:rotate-0 hover:scale-105 transition-all duration-500 ease-in-out p-2">
                                <div id="guru-terajin" class="px-0 md:px-2">
                                    <h1 class="">Guru Terajin</h1>
                                    <hr class="rotate-1">
                                </div>
                                <div id="sticker-content" class="text-sm md:text-lg">
                                    Bammbang Wicaksono
                                </div>
                            </div>
                            <div class="md:w-[15rem] w-[10rem] md:h-[13rem] h-[10rem] bg-blue-300 shadow-md drop-shadow-xl shadow-slate-500/10 -rotate-2 hover:rotate-0 hover:scale-105 transition-all duration-500 ease-in-out p-2">
                                <div id="guru-terajin" class="px-0 md:px-2">
                                    <h1 class="leading-5">Ketaatan Tahun ini</h1>
                                    <hr class="rotate-1 mt-3">
                                </div>
                                <div id="sticker-content" class="text-sm md:text-lg px-2">
                                    <div class="flex justify-between -mt-1">
                                        <span class="text-base font-medium text-blue-900">XII RPL</span>
                                        <span class="text-sm font-medium text-blue-900">84%</span>
                                    </div>
                                        <div class="w-full bg-gray-200 rounded-full h-1 md:h-2.5 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-1 md:h-2.5 rounded-full" style="width: 84%"></div>
                                    </div>
                                    <div class="flex justify-between mt-1">
                                        <span class="text-base font-medium text-blue-900">XII TKJ</span>
                                        <span class="text-sm font-medium text-blue-900">82%</span>
                                    </div>
                                        <div class="w-full bg-gray-200 rounded-full h-1 md:h-2.5 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-1 md:h-2.5 rounded-full" style="width: 82%"></div>
                                    </div>
                                    <div class="flex justify-between mt-1">
                                        <span class="text-base font-medium text-blue-900">XII MM</span>
                                        <span class="text-sm font-medium text-blue-900">20%</span>
                                    </div>
                                        <div class="w-full bg-gray-200 rounded-full h-1 md:h-2.5 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-1 md:h-2.5 rounded-full" style="width: 20%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="md:w-[15rem] w-[10rem] md:h-[13rem] h-[10rem] bg-green-300 shadow-md drop-shadow-xl shadow-slate-500/10 rotate-2 hover:rotate-0 hover:scale-105 transition-all duration-500 ease-in-out p-2">
                                <div id="guru-terajin" class="px-0 md:px-2">
                                    <h1 class="">Kelas Tertaat</h1>
                                    <hr class="rotate-1">
                                </div>
                                <div id="sticker-content" class="text-sm md:text-lg">
                                    XII RPL
                                </div>
                            </div>
                            <div class="md:w-[15rem] w-[10rem] md:h-[13rem] h-[10rem] bg-cyan-300 shadow-md drop-shadow-xl shadow-slate-500/10 -rotate-2 hover:rotate-0 hover:scale-105 transition-all duration-500 ease-in-out p-2">
                                <div id="guru-terajin" class="px-0 md:px-2">
                                    <h1 class="">Murid Terajin</h1>
                                    <hr class="rotate-1">
                                </div>
                                <div id="sticker-content" class="text-sm md:text-lg">
                                    M Radyt Ikhsan Pratama
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="table" class="w-full h-[90vh] rounded-lg border-y-[1.7rem] border-green-700 my-4 grid grid-cols-3 grid-rows-2 gap-4 px-4">
                        <div class="bg-white h-full w-full col-span-2 row-span-2"></div>
                        <div class="bg-white h-full w-full col-span-1 row-span-1"></div>
                        <div class="bg-white h-full w-full col-span-1 row-span-1"></div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
