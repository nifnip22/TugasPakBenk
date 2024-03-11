@include('partials._header')
    <section class="content mt-[3.4rem] md:mt-0">
        <div class="wrapper flex flex-col items-center justify-start h-full w-full">
            <div class="container px-4 py-12">
                <div class="grid grid-cols-1 w-full my-4">
                    <div class="w-full h-auto rounded-xl drop-shadow-sm flex py-4 justify-around flex-wrap gap-4">
                        {{-- <div class="sticker-hanger drop-shadow-md -top-0 w-12 h-full md:w-full md:h-8 rounded-lg absolute"></div> --}}
                        <div id="sticker-stat" class="bg-yellow-300 -rotate-2 ">
                            <div id="sticker-header" class="px-0 md:px-2">
                                <h1 class="">Guru Terajin</h1>
                                <hr class="rotate-1">
                            </div>
                            <div id="sticker-content" class="text-sm md:text-lg">
                                Arya Satria Mulyono
                            </div>
                        </div>
                        <div id="sticker-stat" class="bg-blue-300 rotate-2 ">
                            <div id="sticker-header" class="px-0 md:px-2 mt-1">
                                <h1 class="leading-5">Ketaatan Tahun ini</h1>
                                <hr class="rotate-1 mt-2">
                            </div>
                            <div id="sticker-content" class="text-sm md:text-lg px-2">
                                <div class="flex justify-between -mt-1">
                                    <span class="md:text-base text-sm font-medium text-blue-900">XII RPL</span>
                                    <span class="md:text-sm text-xs font-medium text-blue-900">100%</span>
                                </div>
                                <div class="w-full border-[2px] border-black h-2 md:h-6 overflow-clip md:p-[1px]" style="">
                                    <div class="h-full bg-gray-950 md:bg-transparent" style="width: 100%; background-image: url('{{ asset('assets/images/others/scribble.png') }}'); background-size: 100% 100%; filter: brightness(0.2) saturate(150%);"></div>
                                </div>
                                <div class="flex justify-between mt-1">
                                    <span class="md:text-base text-sm font-medium text-blue-900">XII TKJ</span>
                                    <span class="md:text-sm text-xs font-medium text-blue-900">82%</span>
                                </div>
                                <div class="w-full border-[2px] border-black h-2 md:h-6 overflow-clip md:p-[1px]" style="">
                                    <div class="h-full bg-gray-950 md:bg-transparent" style="width: 82%; background-image: url('{{ asset('assets/images/others/scribble.png') }}'); background-size: 100% 100%; filter: brightness(0.2) saturate(150%);"></div>
                                </div>
                                <div class="flex justify-between mt-1">
                                    <span class="md:text-base text-sm font-medium text-blue-900">XII MM</span>
                                    <span class="md:text-sm text-xs font-medium text-blue-900">20%</span>
                                </div>
                                <div class="w-full border-[2px] border-black h-2 md:h-6 overflow-clip md:p-[1px]" style="">
                                    <div class="h-full bg-gray-950 md:bg-transparent" style="width: 20%; background-image: url('{{ asset('assets/images/others/scribble.png') }}'); background-size: 100% 100%; filter: brightness(0.2) saturate(150%);"></div>
                                </div>
                            </div>
                        </div>
                        <div id="sticker-stat" class="bg-green-300 -rotate-2 ">
                            <div id="sticker-header" class="px-0 md:px-2">
                                <h1 class="">Kelas Tertaat</h1>
                                <hr class="rotate-1">
                            </div>
                            <div id="sticker-content" class="text-sm md:text-lg">
                                XII RPL
                            </div>
                        </div>
                        <div id="sticker-stat" class="bg-cyan-300 rotate-2 ">
                            <div id="sticker-header" class="px-0 md:px-2">
                                <h1 class="">Murid Terajin</h1>
                                <hr class="rotate-1">
                            </div>
                            <div id="sticker-content" class="text-sm md:text-lg">
                                M Radyt Ikhsan Pratama
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-0  md:px-10 w-full ">
                    <div id="table">
                        <div id="info-papan" class="">Papan Info</div>
                        <div class="grid grid-cols-1 md:grid-cols-3 grid-rows-1 md:grid-rows-2 gap-4">
                            <div class="w-full h-full row-span-2 col-span-2 bg-red-500"></div>
                            <div class="w-full h-10 bg-red-500"></div>
                            <div class="w-full h-10 bg-red-500"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('partials._footer')
