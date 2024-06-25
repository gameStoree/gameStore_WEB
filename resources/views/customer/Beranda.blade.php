{{-- NAVBARNYA --}}
@include('partials.navbar')
<script src="https://cdn.tailwindcss.com"></script>

<body class=" w-full h-auto">
    <div class="bg-gradient-to-br from-[#34A0A4] to-[#184E77] h-auto w-full ">

        <div class="relative m-auto mt-[64px] w-full h-auto overflow-hidden ">
            <div class="absolute z-10 h-full w-full bg-blue-950 bg-opacity-40">
                <div class="area">
                    <ul class="circles">
                        <li class="animation1"></li>
                        <li class="animation2"></li>
                        <li class="animation3"></li>
                        <li class="animation4"></li>
                        <li class="animation5"></li>
                        <li class="animation6"></li>
                        <li class="animation7"></li>
                        <li class="animation8"></li>
                        <li class="animation9"></li>
                        <li class="animation10"></li>
                    </ul>
                </div>
            </div>
            <div class="w-[72%] p-8  m-auto h-auto justify-center items-center relative z-20">
                <div class="carousel w-full ">
                    <div id="slide1" class="carousel-item relative w-full">
                        <img src="{{ asset('admin/img/img/image1.png') }}" class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide4" class="btn btn-circle">❮</a>
                            <a href="#slide2" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide2" class="carousel-item relative w-full">
                        <img src="{{ asset('admin/img/img/image2.png') }}" class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide1" class="btn btn-circle">❮</a>
                            <a href="#slide3" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide3" class="carousel-item relative w-full">
                        <img src="{{ asset('admin/img/img/image3.png') }}" class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide2" class="btn btn-circle">❮</a>
                            <a href="#slide4" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide4" class="carousel-item relative w-full ">
                        <img src="{{ asset('admin/img/img/image4.png') }}" class="w-full " />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide3" class="btn btn-circle">❮</a>
                            <a href="#slide1" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="w-full h-full p-[0px 0px]">
            <div class="h-auto w-[70%]  m-auto ">
                <h3 class="mb-3 mt-3 text-2xl text-white  font-semibold uppercase leading-relaxed tracking-wider ">
                    ✨ POPULER
                </h3>
            </div>
            {{-- {{ asset('storage/' . $item->poster_game) }} --}}
            {{-- {{ $item->nama_game }} --}}
            <div class="m-auto w-[70%]">
                <div href class="grid grid-cols-3 gap-4 ">
                    @foreach ($kategori as $item)
                        <a href="/customer" class="card rounded-xl shadow-xl h-">
                            <div class="w-auto h-32">
                                <img src="{{ asset('storage/' . $item->poster_game) }}"
                                    class="rounded-t-xl object-cover w-full h-full" alt="Shoes" />
                            </div>
                            <div
                                class="h-auto w-full py-4 bg-[#184E77] rounded-b-xl flex justify-center items-center text-center ">
                                <h2 class="text-white text-center ">{{ $item->nama_game }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="h-auto w-[70%] m-auto flex my-4">
                <ul class="menu grid grid-cols-3 gap-4 rounded-box">
                    <li id="topUp"
                        class="bg-transparent text-white rounded-xl  justify-center items-center w-auto topup1"
                        style="font-size: 16px; padding: 10px 20px; border: 2px solid white; border-radius: 10px;">Top
                        Up</li>
                    <li id="jasa_ml"
                        class="bg-transparent text-white rounded-xl w-auto justify-center items-center jasa_ml"
                        style="font-size: 16px; padding: 10px 20px; border: 2px solid white; border-radius: 10px;">Jasa
                        Mobile Legends</li>
                </ul>
            </div>
            {{-- TOPUP  --}}

            <div id="topup1-content" style="display: none;">
                <div class="m-auto w-[70%] p-[112px 0px 0px]">
                    <div class="grid grid-cols-4 gap-4">
                        @foreach ($kategori as $item)
                            <a href="/customer" class="card rounded-xl shadow-xl h-">
                                <div class="w-auto h-28">
                                    <img src="{{ asset('storage/' . $item->poster_game) }}"
                                        class="rounded-t-xl object-cover w-full h-full" alt="Shoes" />
                                </div>
                                <div
                                    class="h-auto w-full py-3 bg-[#184E77] rounded-b-xl flex justify-center items-center text-center ">
                                    <h2 class="text-white text-center text-sm">{{ $item->nama_game }}</h2>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- <a tabindex="0" href="/id/mobile-legends" style="outline: none; opacity: 1; transform: none;">
                <div
                    class="group relative transform overflow-hidden rounded-2xl bg-muted duration-300 ease-in-out hover:shadow-2xl hover:ring-2 hover:ring-primary hover:ring-offset-2 hover:ring-offset-background">
                    <img alt="Mobile Legends" fetchpriority="high" width="192" height="288" decoding="async"
                        data-nimg="1" class="aspect-[4/6] object-cover object-center" sizes="100vw"
                        srcset="/_next/image?url=https%3A%2F%2Fcdn.takapedia.com%2F1e1016e8-4847-49c8-8141-51ac4a9e03e0.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fcdn.takapedia.com%2F1e1016e8-4847-49c8-8141-51ac4a9e03e0.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fcdn.takapedia.com%2F1e1016e8-4847-49c8-8141-51ac4a9e03e0.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fcdn.takapedia.com%2F1e1016e8-4847-49c8-8141-51ac4a9e03e0.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fcdn.takapedia.com%2F1e1016e8-4847-49c8-8141-51ac4a9e03e0.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fcdn.takapedia.com%2F1e1016e8-4847-49c8-8141-51ac4a9e03e0.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fcdn.takapedia.com%2F1e1016e8-4847-49c8-8141-51ac4a9e03e0.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fcdn.takapedia.com%2F1e1016e8-4847-49c8-8141-51ac4a9e03e0.webp&amp;w=3840&amp;q=75 3840w"
                        src="https://www.takapedia.com/_next/image?url=https%3A%2F%2Fcdn.takapedia.com%2F1e1016e8-4847-49c8-8141-51ac4a9e03e0.webp&amp;w=3840&amp;q=75"
                        style="color: transparent;">
                    <article
                        class="absolute inset-x-0 -bottom-10 z-10 flex transform flex-col px-3 transition-all duration-300 ease-in-out group-hover:bottom-3 sm:px-4 group-hover:sm:bottom-4">
                        <h2 class="truncate text-sm font-semibold text-foreground sm:text-base">Mobile Legends</h2>
                        <p class="truncate text-xxs text-foreground sm:text-xs">Moonton</p>
                    </article>
                    <div
                        class="absolute inset-0 transform bg-gradient-to-t from-transparent transition-all duration-300 group-hover:from-background">
                    </div>
                </div>
            </a> --}}
            {{-- JASA MLBB --}}
            <div id="mobileLegends-content" style="display: none;">
                <div class="m-auto w-[70%] p-[112px 0px 0px]">
                        <div class="grid grid-cols-4 gap-4">
                            <div>

                                <a href="{{ route('jokiRankCustomer.index') }}" class="card rounded-xl shadow-xl h-">
                                    <div class="w-auto h-28">
                                        <img src="{{ asset('admin/img/img/jokirank.png') }}"
                                            class="rounded-t-xl object-cover object-top w-full h-full" alt="Shoes" />
                                    </div>
                                    <div
                                        class="h-auto w-full py-3 bg-[#184E77] rounded-b-xl flex justify-center items-center text-center ">
                                        <h2 class="text-white text-center text-sm">Joki Rank</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div>
            </div>


        </div>
        @include('partials.footer')
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Sembunyikan semua konten saat halaman dimuat kecuali yang pertama
            $("#topup1-content").show();
            $("#mobileLegends-content").hide();

            // Tambahkan kelas active-menu ke menu pertama
            $(".topup1").addClass("active-menu");

            // Ketika menu topUp di-klik
            $("#topUp").click(function() {
                // Sembunyikan konten jasa_ml
                $("#jasa_ml").removeClass("active-menu");
                // Tambahkan kelas active-menu ke menu yang dipilih
                $(this).addClass("active-menu");

                // Tampilkan konten topUp dan sembunyikan konten jasa_ml
                $("#topup1-content").show();
                $("#mobileLegends-content").hide();
            });

            // Ketika menu jasa_ml di-klik
            $("#jasa_ml").click(function() {
                // Sembunyikan konten topUp
                $("#topUp").removeClass("active-menu");
                // Tambahkan kelas active-menu ke menu yang dipilih
                $(this).addClass("active-menu");

                // Tampilkan konten jasa_ml dan sembunyikan konten topUp
                $("#topup1-content").hide();
                $("#mobileLegends-content").show();
            });
        });
    </script>

    <style>
        /* Tampilan menu saat aktif */
        .active-menu {
            background-color: #184E77;
            /* Warna latar belakang saat aktif */
            color: #FFFFFF;
            /* Warna teks putih */
        }

        /* Tampilan menu saat di-hover */
        .menu li:hover {
            background-color: #184E77;
            /* Warna latar belakang saat di-hover */
            cursor: pointer;
        }

        /* Tampilan menu saat tidak aktif */
        .menu li {
            color: #FFFFFF;
            /* Warna teks putih */
            cursor: pointer;
        }
    </style>

</body>

</html>
