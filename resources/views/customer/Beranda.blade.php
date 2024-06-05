
<style>
    /* Tampilan menu saat aktif */
    .active-menu {
        background-color: #184E77;
        /* Atur latar belakang transparan */
        color: #FFFFFF;
        /* Warna teks putih */
    }

    /* Tampilan menu saat di-hover */
    .menu li:hover {
        background-color: #007497;
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






{{-- NAVBARNYA --}}
@include('partials.navbar')

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
            <div class="m-auto w-[70%]">
                <div href class="grid grid-cols-3 gap-4 ">
                    @foreach ($kategori as $item)
                        <div class="card rounded-xl bg-base-50 shadow-xl">
                            <a href="/customer">
                                <figure><img src="{{ asset('storage/' . $item->poster_game) }}" alt="Shoes" />
                                </figure>
                                <div
                                    class="card-body flex flex-col items-start justify-between rounded-b-xl
                                    bg-primary-500 bg- bg-contain bg-[120px] bg-[#184E77] py-2 px-4 sm:bg-right
                                    md:flex-row md:items-center md:py-4">
                                    <h2 class="font-chakra text-xs font-semibold text-white sm:text-base">
                                        {{ $item->nama_game }}</h2>
                                    <h2 class="font-chakra text-xs font-semibold text-white sm:text-base">GamingStore
                                    </h2>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="h-auto w-[70%] m-auto flex my-4">
                <ul class="menu grid grid-cols-3 gap-4 rounded-box">
                    <li id="topUp"
                        class="bg-[#] text-white rounded-xl  justify-center items-center w-auto topup1"
                        style="font-size: 16px; padding: 10px 20px; border: 2px solid white; border-radius: 10px;">Top
                        Up</li>
                    <li id="jasa_ml" class="bg-[#] text-white rounded-xl w-auto justify-center items-center jasa_ml"
                        style="font-size: 16px; padding: 10px 20px; border: 2px solid white; border-radius: 10px;">Jasa
                        Mobile Legends</li>
                </ul>
            </div>

            <div id="topup1-content" style="display: none;">
                <div class="m-auto w-[70%] p-[112px 0px 0px]">
                    <div class="grid grid-cols-6 gap-4">
                        @foreach ($kategori as $item)
                            <a href="{{ route('pesanDiamond.show', $item->id) }}">
                                <div class="card bg-[#184E77] shadow-xl">
                                    <figure class="p-0">
                                        <img src="{{ asset('storage/' . $item->poster_game) }}" alt="Shoes"
                                            class="rounded-xl" />
                                    </figure>
                                    <div class="card-body items-center text-center p-2">
                                        <h2 class="text-white">{{ $item->nama_game }}</h2>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div id="mobileLegends-content" style="display: none;">
                <div class="m-auto w-[70%] p-[112px 0px 0px]">
                    <a href="{{ route('jokiRankCustomer.index') }}">
                        <div class="grid grid-cols-6 gap-4">
                            <div class="card  bg-[#184E77] shadow-xl">
                                <figure class="p-0">
                                    <img src="{{ asset('admin/img/img/jokirank.png') }}" alt="Shoes"
                                        class="rounded-xl" />
                                </figure>
                                <div class="card-body  items-center text-center p-2">
                                    <h2 class="text-white">Joki Rank</h2>
                                </div>
                            </div>
                        </div>
                    </a>
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
            $(".topup1").addClass("active-menu");

            $(".topup1").click(function() {
                $("#topup1-content").show();
                $("#mobileLegends-content").hide();
                $(".menu li").removeClass("active-menu");
                $(this).addClass("active-menu");
            });

            $(".jasa_ml").click(function() {
                $("#topup1-content").hide();
                $("#mobileLegends-content").show();
                $(".menu li").removeClass("active-menu");
                $(this).addClass("active-menu");
            });
        });
    </script>

</body>

</html>
