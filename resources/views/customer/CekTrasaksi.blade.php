<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Transaksi</title>
    <link rel="stylesheet" href="{{ asset('admin') }}/css/customer.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="backround">
        <nav class="navbar" id="navbar">
            <header class="container1">
                <div class="container1-1">
                    <div class="navbar-left">
                        <a href="('halaman_hubungi_kami') }}" class="navbarleft">
                            <img src="{{ asset('admin/img/img/LOGO.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="container1-2">
                    <div class="navbar-right">
                        <a href="#" class="navbar-right-text">
                            <img src="{{ asset('admin/img/img/icon_hubungikami.png') }}" alt="Hubungi Kami"> <span>Hubungi Kami</span>
                        </a>
                        <a href="" class="navbarberanda" style="text-decoration: none;">
                            <img src="{{ asset('admin/img/img/icon_calculator.png') }}" alt="Kalkulator"> <span>Kalkulator</span>
                        </a>
                        <a href="" class="navbar-right-text">
                            <div class="beranda-link">
                                <img src="{{ asset('admin/img/img/icon_search.png') }}" alt="Cek Transaksi"> <span>Cek Transaksi</span>
                            </div>
                        </a>
                        <a href="{{ route('public') }}" class="navbar-right-text">
                            <img src="{{ asset('admin/img/img/icon_home.png') }}" alt="Cek Transaksi"> <span>Beranda</span>
                        </a>
                    </div>
                    <div class="login-daftar">
                        <a href="" class="navbar-right-masuk">Masuk</a>
                        <a href="" class="navbar-right-daftar">Daftar Sekarang</a>
                    </div>
                </div>
            </header>
        </nav>
        <div class="containergambar">
            <img src="{{ asset('admin/img/img/wwwwwwww.jpg') }}" alt="Deskripsi Gambar" class="background-image">
        </div>
    </div>
   <div class="containerPatokan">
    <div class="containerPatokan1">
        <h1 class="fontLacak">Lacak pesanan kamu dengan nomor <span class="invoice">invoice</span>!</h1>
    </div>
   </div>







    <!-- Footer Section -->
    {{-- <footer class="footer">
        <div class="gambarfooter">
            <div class="container-footer">
                <div class="deskripsi">
                    GamingStore adalah Platform Top Up Game Termurah di Indonesia.
                    Penuhi Kebutuhan Gaming Mu Bersama GamingStore.
                    Store Specialist Game Mobile Legends No.1 Murah , Aman , Terpercaya Dan Legal 100% (Open 24 Jam) .
                    GamingStore Sahabat Para Gamers Kami berdedikasi untuk menyediakan layanan terbaik dan terus menerus
                    inovatif untuk memenuhi kebutuhan gamers.
                    Jangan lewatkan kesempatan untuk mengikuti kami di sosial media dan
                    tetap update dengan informasi terbaru, tips, trik, dan promo-promo menarik lainnya.
                    Jadilah bagian dari komunitas gamers terbesar dan terpercaya dengan GamingStore!
                    Jangan Lupa Follow Sosial Media Kita Dapatkan info dan promo menarik yang akan terus mengalir
                    untuk menambah kegembiraan dalam setiap game yang Anda mainkan. GamingStore, solusi one-stop untuk semua kebutuhan gaming Anda!
                </div>
                <div class="clear1"></div>
                <div class="container-footer2">
                    <div class="container-sosial">
                        <ul class="container-dukungan">
                            <li class="dukungan-link">Social Media</li>
                            <li><img src="{{ asset('/admin/img/img/tt.png') }}" class="dukungan">Tiktok GamingStore</li>
                            <li><img src="{{ asset('/admin/img/img/tt.png') }}" class="dukungan">Tiktok HanzShadows</li>
                            <li><img src="{{ asset('/admin/img/img/ig.png') }}" class="dukungan">Instagram</li>
                            <li><img src="{{ asset('/admin/img/img/yt.png') }}" class="dukungan">Youtube</li>
                        </ul>
                        <ul class="container-dukungan">
                            <li class="dukungan-link">Peta Situs</li>
                            <li class="dukungan">WhatsApp</li>
                            <li class="dukungan">Email</li>
                            <li class="dukungan">Instagram</li>
                        </ul>
                        <ul class="container-dukungan">
                            <li class="dukungan-link">Dukungan</li>
                            <li class="dukungan">Beranda</li>
                            <li class="dukungan">Cek Transaksi</li>
                            <li class="dukungan">Kalkulator</li>
                            <li class="dukungan">Hubungi Kami</li>
                        </ul>
                        <ul class="container-dukungan">
                            <li class="dukungan-link">Legalitas</li>
                            <li class="dukungan">Kebijakan Pribadi</li>
                            <li class="dukungan">Syarat & Ketentuan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- End Footer Section -->
</body>
</html>
