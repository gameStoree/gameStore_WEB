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
                        <a href="/customer"
                            class="card rounded-xl shadow-xl transform transition duration-300 ease-in-out hover:scale-105 hover:-translate-y-1 hover:shadow-2xl hover:ring-2 hover:ring-white">
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
                            <a href="/customer"
                                class="card rounded-xl shadow-xl transform transition duration-300 ease-in-out hover:scale-105 hover:-translate-y-1 hover:shadow-2xl hover:ring-2 hover:ring-white">
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
            {{-- JASA MLBB --}}
            <div id="mobileLegends-content" style="display: none;">
                <div class="m-auto w-[70%] p-[112px 0px 0px]">
                    <div class="grid grid-cols-4 gap-4">
                        <div>

                            <a href="{{ route('jokiRankCustomer.index') }}"
                                class="card rounded-xl shadow-xl transform transition duration-300 ease-in-out hover:scale-105 hover:-translate-y-1 hover:shadow-2xl hover:ring-2 hover:ring-white">
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



<a href="ke halo"></a>
<a href="ke EZET"></a>

<div>
    <h2>HALO</h2>
</div>
<div>
    <h1>EZET</h1>
</div>
