<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>GAMINGSTORE</title>
    <link rel="stylesheet" href="{{ asset('admin') }}/css/index.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/css/output.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

</head>



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
                <a href="/customer" class="text-white text-[15px] py-4 pl-2 pr-4 font-bold">Beranda</a>
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

        <div class="w-full pt-[60px] h-auto m-[0px 0px 16px] justify-center items-center m-auto bg-cover bg-center">
            <img src="{{ asset('admin/img/img/bgjasajoki.png') }}" class="rounded-xl" />
        </div>

        <div class="w-full p-10 ">
            <div class="w-[70%] m-auto rounded-xl flex justify-center items-start bg-[#184E77] rounded-md">

                <div class="flex justify-center items-center gap-2 py-2 m-auto">
                    <img src="{{ asset('admin/img/img/icon-defense.png') }}" class="w-5 h-5">
                    <h1 class="justify-center items-center">
                        Jaminan Layanan
                    </h1>
                </div>
                <div class="flex justify-center items-center gap-2 py-2 m-auto">
                    <img src="{{ asset('admin/img/img/icon-telepon.png') }}" class="w-5 h-5">
                    <h1 class="justify-center items-center">
                        Jaminan Layanan 24 Jam
                    </h1>
                </div>
                <div class="flex justify-center items-center gap-2 py-2 m-auto">
                    <img src="{{ asset('admin/img/img/icon-wallet.png') }}" class="w-5 h-5">
                    <h1 class="justify-center items-center">
                        Pembayaran Aman & Terpercaya
                    </h1>
                </div>
                <div class="flex justify-center items-center gap-2 py-2 m-auto">
                    <img src="{{ asset('admin/img/img/icon-lightning.png') }}" class="w-5 h-5">
                    <h1 class="justify-center items-center">
                        Proses Cepat & Otomatis
                    </h1>
                </div>

            </div>


            <div class="h-auto w-[70%] m-auto">
                <div class=" container grid grid-cols-3 gap-8 pb-8 pt-8">
                    <div class="col-span-3 md:col-span-1 hidden md:block">
                        <div class="sticky top-24 flex flex-col space-y-8">
                            <div class="rounded-xl bg-[#184E77] shadow-2xl dark:bg-secondary-700 pt-6">
                                <div
                                    class="prose prose-sm appearance-none px-4 py-2 pb-8 text-xs text-text-color sm:px-6">
                                    <p dir="ltr"><strong>Joki Rank</strong> Mobile Legends dari Takapedia: Solusi
                                        Cepat
                                        Naik Rank !</p>
                                    <p dir="ltr">Kami mempersembahkan layanan joki Mobile Legends yang cepat,
                                        murah,
                                        serta aman dan terpercaya! Tingkatkan permainan dan rank Anda dengan bantuan
                                        dari
                                        profesional kami. Kami mengutamakan kepuasan dan keamanan akun Anda dalam setiap
                                        jasa yang kami berikan.<br><br>Berikut adalah langkah-langkah sederhana untuk
                                        Order
                                        Jasa Joki :</p>
                                    <p dir="ltr">1. Lengkapi Data Akun Joki Dengan Teliti (Pastikan data yang Anda
                                        masukkan sudah benar dan lengkap)<br>2. Pilih Jenis Variant Joki&nbsp;
                                        (Sesuaikan
                                        dengan kebutuhan Anda)<br>3. Masukkan Jumlah Order Sesuai Tujuan Rank (Pastikan
                                        jumlah order sesuai dengan rank yang Anda inginkan dan sesuai dengan S&amp;K
                                        Takapedia)<br>4. Pilih Metode Pembayaran (Kenyamanan Anda adalah prioritas kami.
                                        Kami menyediakan berbagai metode pembayaran yang mudah dan aman)<br>5. Masukkan
                                        Kode
                                        Promo Jika Ada (Gunakan kode promo untuk mendapatkan penawaran spesial dan
                                        diskon
                                        menarik)<br>6. Masukkan Nomor WhatsApp dan Email yang Valid (Dapatkan konfirmasi
                                        dan
                                        notifikasi langsung ke kontak Anda)<br>7. Klik Order Now &amp; Lakukan
                                        Pembayaran
                                        (Tunggu konfirmasi dari kami dan orderan Anda akan segera diproses)</p>
                                    <p dir="ltr">Estimasi Waktu Proses :<br>Kami berkomitmen untuk menyelesaikan
                                        jasa
                                        joki Anda dalam waktu 12-48 jam. Waktu penyelesaian dapat bervariasi tergantung
                                        pada
                                        jumlah dan kompleksitas pesanan. Kami berupaya untuk memberikan layanan secepat
                                        mungkin</p>
                                    <p dir="ltr">Takapedia Sahabat Para Gamers!</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                            <div class="mt-4 hidden rounded-xl bg-[#184E77] shadow-2xl dark:bg-secondary-700 md:block">
                                <div class="flex border-b border-secondary-600">
                                    <div
                                        class="flex items-center justify-center rounded-tl-xl bg-gradient-to-t from-primary-500 to-primary-200 px-4 py-2 text-xl font-semibold text-text-color-foreground">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" class="h-4 w-4">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <h3
                                        class="flex w-full items-center justify-between rounded-tr-xl bg-secondary-500 px-2 py-2 text-base font-semibold leading-6 text-text-color dark:bg-secondary-700 sm:px-4">
                                        Testimoni</h3>
                                </div>
                                <div class="px-6 pt-6">
                                    <div>
                                        <h2 class="sr-only">Testimoni Pembeli</h2>
                                        <div class="flex flex-col items-center justify-center">
                                            <div class="mt-1 flex items-center gap-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true"
                                                    class="h-10 w-10 flex-shrink-0 text-yellow-400">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <div><span
                                                        class="text-5xl font-semibold text-text-color">5.0</span><sub
                                                        class="text-lg font-semibold text-text-color">/5.0</sub></div>
                                            </div>
                                            <p class="pt-2 text-center text-sm">Pelanggan merasa puas dengan produk
                                                ini. <br> Dari <span class="font-semibold">1241</span> ulasan.</p>
                                        </div>
                                        <div class="mt-6">
                                            <h3 class="sr-only">Review data</h3>
                                            <dl class="space-y-3">
                                                <div class="flex items-center text-sm">
                                                    <dt class="flex flex-1 items-center">
                                                        <p class="w-3 font-medium text-text-color">5<span
                                                                class="sr-only"> star reviews</span></p>
                                                        <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-5 w-5 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <div class="relative ml-3 flex-1">
                                                                <div
                                                                    class="h-3 rounded-[4px] border border-gray-200 bg-gray-100">
                                                                </div>
                                                                <div class="absolute inset-y-0 rounded-[4px] border border-yellow-400 bg-yellow-400"
                                                                    style="width: 96%;"></div>
                                                            </div>
                                                        </div>
                                                    </dt>
                                                    <dd
                                                        class="ml-3 w-10 text-right text-sm tabular-nums text-text-color">
                                                        1194<span class="sr-only"> reviews</span></dd>
                                                </div>
                                                <div class="flex items-center text-sm">
                                                    <dt class="flex flex-1 items-center">
                                                        <p class="w-3 font-medium text-text-color">4<span
                                                                class="sr-only"> star reviews</span></p>
                                                        <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-5 w-5 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <div class="relative ml-3 flex-1">
                                                                <div
                                                                    class="h-3 rounded-[4px] border border-gray-200 bg-gray-100">
                                                                </div>
                                                                <div class="absolute inset-y-0 rounded-[4px] border border-yellow-400 bg-yellow-400"
                                                                    style="width: 3%;"></div>
                                                            </div>
                                                        </div>
                                                    </dt>
                                                    <dd
                                                        class="ml-3 w-10 text-right text-sm tabular-nums text-text-color">
                                                        42<span class="sr-only"> reviews</span></dd>
                                                </div>
                                                <div class="flex items-center text-sm">
                                                    <dt class="flex flex-1 items-center">
                                                        <p class="w-3 font-medium text-text-color">3<span
                                                                class="sr-only"> star reviews</span></p>
                                                        <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-5 w-5 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <div class="relative ml-3 flex-1">
                                                                <div
                                                                    class="h-3 rounded-[4px] border border-gray-200 bg-gray-100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </dt>
                                                    <dd
                                                        class="ml-3 w-10 text-right text-sm tabular-nums text-text-color">
                                                        3<span class="sr-only"> reviews</span></dd>
                                                </div>
                                                <div class="flex items-center text-sm">
                                                    <dt class="flex flex-1 items-center">
                                                        <p class="w-3 font-medium text-text-color">2<span
                                                                class="sr-only"> star reviews</span></p>
                                                        <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-gray-300 h-5 w-5 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <div class="relative ml-3 flex-1">
                                                                <div
                                                                    class="h-3 rounded-[4px] border border-gray-200 bg-gray-100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </dt>
                                                    <dd
                                                        class="ml-3 w-10 text-right text-sm tabular-nums text-text-color">
                                                        0<span class="sr-only"> reviews</span></dd>
                                                </div>
                                                <div class="flex items-center text-sm">
                                                    <dt class="flex flex-1 items-center">
                                                        <p class="w-3 font-medium text-text-color">1<span
                                                                class="sr-only"> star reviews</span></p>
                                                        <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-5 w-5 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <div class="relative ml-3 flex-1">
                                                                <div
                                                                    class="h-3 rounded-[4px] border border-gray-200 bg-gray-100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </dt>
                                                    <dd
                                                        class="ml-3 w-10 text-right text-sm tabular-nums text-text-color">
                                                        2<span class="sr-only"> reviews</span></dd>
                                                </div>
                                            </dl>
                                        </div>
                                        <div class="mt-6">
                                            <h3 class="text-lg font-medium text-text-color">Bagikan pengalamanmu!</h3>
                                            <p class="mt-1 text-sm text-text-color/75">Apakah kamu menyukai produk ini?
                                                Beri tahu kami dan calon pembeli lainnya tentang pengalamanmu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flow-root p-6">
                                    <div class="-my-6 divide-y divide-secondary-500">
                                        <div class="py-6">
                                            <div class="flex items-center">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between">
                                                        <div>
                                                            <h4 class="mt-0.5 text-xs font-bold text-text-color">
                                                                081******666</h4>
                                                        </div>
                                                        <div class="flex items-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg></div>
                                                    </div>
                                                    <p class="sr-only text-text-color">5 dari 5 bintang</p>
                                                </div>
                                            </div>
                                            <div class="flex w-full justify-between pt-1 text-xxs text-text-color">
                                                <span>Epic V - Legend V</span><span>08-05-2024 07:53:44</span>
                                            </div>
                                            <div
                                                class="text-secondary-20 mt-1 space-y-6 break-words text-xs italic text-text-color line-clamp-2">
                                                “Proses cepat banget”</div>
                                        </div>
                                        <div class="py-6">
                                            <div class="flex items-center">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between">
                                                        <div>
                                                            <h4 class="mt-0.5 text-xs font-bold text-text-color">
                                                                Tar******l11</h4>
                                                        </div>
                                                        <div class="flex items-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg></div>
                                                    </div>
                                                    <p class="sr-only text-text-color">5 dari 5 bintang</p>
                                                </div>
                                            </div>
                                            <div class="flex w-full justify-between pt-1 text-xxs text-text-color">
                                                <span>5 Star Mythic Honor</span><span>08-05-2024 07:02:01</span>
                                            </div>
                                            <div
                                                class="text-secondary-20 mt-1 space-y-6 break-words text-xs italic text-text-color line-clamp-2">
                                                “Proses cepat banget”</div>
                                        </div>
                                        <div class="py-6">
                                            <div class="flex items-center">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between">
                                                        <div>
                                                            <h4 class="mt-0.5 text-xs font-bold text-text-color">
                                                                082******839</h4>
                                                        </div>
                                                        <div class="flex items-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg></div>
                                                    </div>
                                                    <p class="sr-only text-text-color">5 dari 5 bintang</p>
                                                </div>
                                            </div>
                                            <div class="flex w-full justify-between pt-1 text-xxs text-text-color">
                                                <span>Mythic Honor / Star</span><span>07-05-2024 19:42:19</span>
                                            </div>
                                            <div
                                                class="text-secondary-20 mt-1 space-y-6 break-words text-xs italic text-text-color line-clamp-2">
                                                “Proses cepat banget”</div>
                                        </div>
                                        <div class="py-6">
                                            <div class="flex items-center">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between">
                                                        <div>
                                                            <h4 class="mt-0.5 text-xs font-bold text-text-color">
                                                                081******552</h4>
                                                        </div>
                                                        <div class="flex items-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg></div>
                                                    </div>
                                                    <p class="sr-only text-text-color">5 dari 5 bintang</p>
                                                </div>
                                            </div>
                                            <div class="flex w-full justify-between pt-1 text-xxs text-text-color">
                                                <span>10 Star Legend</span><span>07-05-2024 17:32:43</span>
                                            </div>
                                            <div
                                                class="text-secondary-20 mt-1 space-y-6 break-words text-xs italic text-text-color line-clamp-2">
                                                “Proses cepat banget”</div>
                                        </div>
                                        <div class="py-6">
                                            <div class="flex items-center">
                                                <div class="w-full">
                                                    <div class="flex items-start justify-between">
                                                        <div>
                                                            <h4 class="mt-0.5 text-xs font-bold text-text-color">
                                                                089******752</h4>
                                                        </div>
                                                        <div class="flex items-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true"
                                                                class="text-yellow-400 h-4 w-4 flex-shrink-0">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg></div>
                                                    </div>
                                                    <p class="sr-only text-text-color">5 dari 5 bintang</p>
                                                </div>
                                            </div>
                                            <div class="flex w-full justify-between pt-1 text-xxs text-text-color">
                                                <span>5 Star Mythic Honor</span><span>07-05-2024 15:20:49</span>
                                            </div>
                                            <div
                                                class="text-secondary-20 mt-1 space-y-6 break-words text-xs italic text-text-color line-clamp-2">
                                                “Pelayanan ramah”</div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                    <div class="row-span-2 col-span-2 ...">

                        <div class="grid grid-rows-4 grid-flow-col gap-4">

                            <div class="1">
                                <div class="flex w-full h-auto ">
                                    <div
                                        class="flex items-center justify-center rounded-tl-xl bg-gradient-to-t from-[#34A0A4] to-[#57CC99] px-4 py-2 font-bold text-[#ffffff] text-2xl  ">
                                        1</div>
                                    <h3
                                        class="flex bg-[#184E77] w-full items-center justify-between rounded-tr-xl bg-secondary-500 px-2 py-2 text-base font-semibold leading-6 text-text-color dark:bg-secondary-700 sm:px-4">
                                        Masukkan Data Akun Kamu</h3>
                                </div>
                                <div class="bg-[#184E77] grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 sm:px-6 sm:pb-4">
                                    <div><label for="login"
                                            class="block text-xs font-medium text-text-color pb-2">Login
                                            Via</label><select id="login" name="login"
                                            class="w-full bg-white !rounded-md !border-0 !bg-secondary-200 !text-xs !text-secondary-800 !placeholder-secondary-800 accent-secondary-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-white focus:!ring-transparent">
                                            <option value="">Pilih Login Via</option>
                                            <option value="Moonton (Rekomendasi)">Moonton (Rekomendasi)</option>
                                            <option value="VK (Rekomendasi)">VK (Rekomendasi)</option>
                                            <option value="Tiktok">Tiktok</option>
                                            <option value="Facebook">Facebook</option>
                                        </select></div>
                                    <div><label for="idnick"
                                            class="block text-xs font-medium text-text-color pb-2">User
                                            ID
                                            &amp; Nick Name</label>
                                        <div class="flex flex-col items-start"><input
                                                class="relative block w-full appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                type="text" id="idnick" name="idnick"
                                                placeholder="Ketikan User ID &amp; Nick Name ..." value="">
                                        </div>
                                    </div>
                                    <div><label for="emailhpmoonton"
                                            class="block text-xs font-medium text-text-color pb-2">Email/No. Hp/Moonton
                                            ID</label>
                                        <div class="flex flex-col items-start"><input
                                                class="relative block w-full appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                type="text" id="emailhpmoonton" name="emailhpmoonton"
                                                placeholder="Ketikan Email/No. Hp/Moonton ID ..." value="">
                                        </div>
                                    </div>
                                    <div><label for="password"
                                            class="block text-xs font-medium text-text-color pb-2">Password</label>
                                        <div class="flex flex-col items-start"><input
                                                class="relative block w-full appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                type="text" id="password" name="password"
                                                placeholder="Ketikan Password ..." value=""></div>
                                    </div>
                                    <div><label for="hero"
                                            class="block text-xs font-medium text-text-color pb-2">Request
                                            Hero</label>
                                        <div class="flex flex-col items-start"><input
                                                class="relative block w-full appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                type="text" id="hero" name="hero"
                                                placeholder="Ketikan Request Hero ..." value=""></div>
                                    </div>
                                    <div><label for="catatan"
                                            class="block text-xs font-medium text-text-color pb-2">Catatan
                                            Untuk Penjoki</label>
                                        <div class="flex flex-col items-start"><input
                                                class="relative block w-full appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                type="text" id="catatan" name="catatan"
                                                placeholder="Ketikan Catatan Untuk Penjoki ..." value=""></div>
                                    </div>
                                </div>
                                <div
                                    class="bg-[#184E77] px-4 pb-4 text-[10px] text-text-color rounded-b-xl sm:px-6 sm:pb-6">
                                    <div>
                                        <p>Pastikan untuk membaca semua informasi , syarat &amp; ketentuan sebelum
                                            melakukan
                                            pemesanan untuk memastikan bahwa Anda mendapatkan layanan terbaik dan sesuai
                                            ekspektasi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="2">
                                <div class="flex w-full h-auto ">
                                    <div
                                        class="flex items-center justify-center rounded-tl-xl bg-gradient-to-t from-[#34A0A4] to-[#57CC99] px-4 py-2 font-bold text-[#ffffff] text-2xl  ">
                                        2</div>
                                    <h3
                                        class="flex bg-[#184E77] w-full items-center justify-between rounded-tr-xl bg-secondary-500 px-2 py-2 text-base font-semibold leading-6 text-text-color dark:bg-secondary-700 sm:px-4">
                                        Masukkan Data Akun Kamu</h3>
                                </div>
                            </div>







                        </div>
                    </div>


                </div>
            </div>


        </div>



    </div>





</body>

</html>
