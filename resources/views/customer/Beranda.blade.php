<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="{{ asset('admin') }}/css/index.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/css/output.css" />
    {{-- @vite('resource/css/app.css') --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>
<style>
    /* Tampilan menu saat aktif */
    .active-menu {
        background-color: #184E77; 
        color: #FFFFFF;
    }

    /* Tampilan menu saat di-hover */
    .menu li:hover {
        background-color: #007497;
        color: #f6ff00;
        cursor: pointer;
    }

    /* Tampilan menu saat tidak aktif */
    .menu li {
        color: #FFFFFF;
        cursor: pointer;
    }
</style>



<nav class=" bg-[#184E77] fixed top-0 w-full z-50">
    <div class="navbar h-[60px] w-[70%]  m-auto items-center justify-center">
        <div class="flex-1">
            <a href="/customer" rel="noopener noreferrer">
                <img src="{{ asset('admin/img/img/logo.png') }}" alt="Hubungi Kami">
            </a>
        </div>
        <div class="flex-none">
            <div class="flex items-center justify-center hover:border-b-2">
                <img src="{{ asset('admin/img/img/hubungikami.png') }}" class=" h-[20px]">
                <a href="/customer" class="text-white text-[15px] py-4 pl-2 pr-4 font-bold">Hubungi Kami</a>
            </div>
            <div class="flex items-center justify-center hover:border-b-2">
                <img src="{{ asset('admin/img/img/cektransaksi.png') }}" class=" h-[20px]">
                <a href="/customer" class="text-white text-[15px] py-4 pl-2 pr-4 font-bold">Cek Transaksi</a>
            </div>
            <div class="flex items-center justify-center hover:border-b-2">
                <img src="{{ asset('admin/img/img/calculator.png') }}" class=" h-[20px]">
                <a href="/customer" class="text-white text-[15px] py-4 pl-2 pr-4 font-bold">Kalkulator</a>
            </div>
            <div class="flex items-center justify-center hover:border-b-2">
                <img src="{{ asset('admin/img/img/home.png') }}" class=" h-[20px]">
                <a href="/customer" class="text-white text-[15px] py-4 pl-2 pr-4 font-bold">Masuk</a>
            </div>
            <div
                class="menu ml-6 hover:bg-[#007497] bg-[#168AAD] h-[40px] items-center justify-center  rounded-l-xl border-r-[3px] border-white menu-horizontal p-0 ">
                <a href="/customer" class="text-white  text-[15px] py-[10px] px-4 font-bold">Masuk</a>
            </div>
            <div
                class="menu hover:bg-[#007497] bg-[#168AAD] h-[40px] items-center justify-center rounded-r-xl menu-horizontal p-0">
                <a href="/customer" class="text-white  text-[15px] py-[10px]  px-4 font-bold">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</nav>

<body class="  w-full h-auto">
    <div class="bg-gradient-to-br from-[#34A0A4] to-[#184E77] h-auto w-full ">



        <div class="w-full pt-[60px] h-auto p-[16px] m-[0px 0px 16px] justify-center items-center m-auto">
            <div class="w-[72%] p-4 m-auto h-auto justify-center items-center">
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

        <div class="w-full h-full p-[32px 0px]">
            <div class="h-auto w-[70%] m-auto">
                <h3 class="mb-3 text-2xl text-white  font-semibold uppercase leading-relaxed tracking-wider ">
                    ✨ POPULER
                </h3>
            </div>
            <div class="m-auto w-[70%]">
                <div href class="grid grid-cols-3 gap-4 ">
                    @foreach ($kategori as $item)
                    <div class="card bg-base-100 shadow-xl">
                        <a href="/customer">
                            <figure><img src="{{ asset('storage/' . $item->poster_game) }}" alt="Shoes" /></figure>
                            <div
                                class="card-body flex flex-col items-start justify-between rounded-b-xl
                                    bg-primary-500 bg- bg-contain bg-[120px] bg-[#184E77] py-2 px-4 sm:bg-right
                                    md:flex-row md:items-center md:py-4">
                                <h2 class="font-chakra text-xs font-semibold text-white sm:text-base">{{ $item->nama_game }}
                                </h2>
                                <h2 class="font-chakra text-xs font-semibold text-white sm:text-base">GamingStore</h2>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="h-auto w-[70%] m-auto flex my-4">
                <ul class="menu grid grid-cols-3 gap-4 rounded-box">
                    <li id="topUp"
                        class="bg-[#] text-white rounded-xl w-auto justify-center items-center w-auto topup1"
                        style="font-size: 16px; padding: 10px 20px; border: 2px solid white; border-radius: 10px;">Top
                        Up</li>
                    <li id="jasa_ml"
                        class="bg-[#] text-white rounded-xl w-auto justify-center items-center jasa_ml"
                        style="font-size: 16px; padding: 10px 20px; border: 2px solid white; border-radius: 10px;">Jasa
                        Mobile Legends</li>
                </ul>
            </div>

            <div id="topup1-content" style="display: none;">
                <div class="m-auto w-[70%] p-[112px 0px 0px]">
                    <div class="grid grid-cols-6 gap-4">
                        @foreach ($kategori as $item)
                        <div class="card  bg-[#184E77] shadow-xl">
                            <figure class="p-0">
                                <img src="{{ asset('storage/' . $item->poster_game) }}"
                                    alt="Shoes" class="rounded-xl" />
                            </figure>
                            <div class="card-body  items-center text-center p-2">
                                <h2 class="text-white">{{ $item->nama_game }}</h2>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div id="mobileLegends-content" style="display: none;">
                <div class="m-auto w-[70%] p-[112px 0px 0px]">
                    <div class="grid grid-cols-6 gap-4">
                        <div class="card  bg-[#184E77] shadow-xl">
                            <figure class="p-0">
                                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                    alt="Shoes" class="rounded-xl" />
                            </figure>
                            <div class="card-body  items-center text-center p-2">
                                <h2 class="text-white  ">Mobile Legends!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- GAMBAR FOOTER --}}
            <div class="m-auto w-auto pt-32  ">
                <div class="bg-cover bg-center">
                    <img src="{{ asset('admin/img/img/footer.png') }}" class="w-full" />
                </div>
            </div>
            <div class="m-auto w-auto bg-[#184E77] ">
                <div class="pt-10 pb-10 m-auto w-[70%]">
                    <p class="justify-center items-center text-center text-white">
                        GamingStore adalah Platform Top Up Game Termurah di Indonesia. Penuhi Kebutuhan Gaming Mu
                        Bersama GamingStore. Store Specialist Game Mobile Legends No.1 Murah , Aman , Terpercaya Dan
                        Legal 100% (Open 24 Jam) . GamingStore Sahabat Para Gamers Kami berdedikasi untuk menyediakan
                        layanan terbaik dan terus menerus inovatif untuk memenuhi kebutuhan gamers. Jangan lewatkan
                        kesempatan untuk mengikuti kami di sosial media dan tetap update dengan informasi terbaru, tips,
                        trik, dan promo-promo menarik lainnya. Jadilah bagian dari komunitas gamers terbesar dan
                        terpercaya dengan GamingStore! Jangan Lupa Follow Sosial Media Kita Dapatkan info dan promo
                        menarik yang akan terus mengalir untuk menambah kegembiraan dalam setiap game yang Anda mainkan.
                        GamingStore, solusi one-stop untuk semua kebutuhan gaming Anda!
                    </p>
                </div>
                <div class="m-auto w-[70%] pt-4 pb-12 ">
                    <footer class="footer pt-8 bg-[#184E77] text-neutral-content">
                        <nav>
                            <h6 class="footer-title opacity-100 text-white">Services</h6>
                            <a class="link link-hover">Tiktok </a>
                            <a class="link link-hover">Design</a>
                            <a class="link link-hover">Marketing</a>
                            <a class="link link-hover">Advertisement</a>
                        </nav>
                        <nav>
                            <h6 class="footer-title opacity-100 text-white">Company</h6>
                            <a class="link link-hover">About us</a>
                            <a class="link link-hover">Contact</a>
                            <a class="link link-hover">Jobs</a>
                            <a class="link link-hover">Press kit</a>
                        </nav>
                        <nav>
                            <h6 class="footer-title opacity-100 text-white">Legal</h6>
                            <a class="link link-hover">Terms of use</a>
                            <a class="link link-hover">Privacy policy</a>
                            <a class="link link-hover">Cookie policy</a>
                        </nav>
                        <nav>
                            <h6 class="footer-title opacity-100 text-white">Services</h6>
                            <a class="link link-hover">Branding</a>
                            <a class="link link-hover">Design</a>
                            <a class="link link-hover">Marketing</a>
                            <a class="link link-hover">Advertisement</a>
                        </nav>
                    </footer>
                </div>
                <div class="h-auto w-[70%] m-auto ">
                    <h3 class="pb-8 pt-8 text-xs leading-5  text-white border-t-2 border-white border-opacity-10 ">
                        @ 2023 GAMINGSTORE. All rights reserved.
                    </h3>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Sembunyikan semua konten saat halaman dimuat kecuali yang pertama
            $("#topup1-content").show();
            $("#mobileLegends-content").hide();
            $(".topup1").addClass("active-menu");

            $(".topup1").click(function () {
                $("#topup1-content").show();
                $("#mobileLegends-content").hide();
                $(".menu li").removeClass("active-menu");
                $(this).addClass("active-menu");
            });

            $(".jasa_ml").click(function () {
                $("#topup1-content").hide();
                $("#mobileLegends-content").show();
                $(".menu li").removeClass("active-menu");
                $(this).addClass("active-menu");
            });
        });
    </script>

</body>

</html>
