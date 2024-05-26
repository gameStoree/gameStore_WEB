<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>GAMINGSTORE</title>
    <link rel="stylesheet" href="{{ asset('admin') }}/css/index.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/css/output.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                    <h1 class="justify-center items-center text-white">
                        Jaminan Layanan
                    </h1>
                </div>
                <div class="flex justify-center items-center gap-2 py-2 m-auto">
                    <img src="{{ asset('admin/img/img/icon-telepon.png') }}" class="w-5 h-5">
                    <h1 class="justify-center items-center text-white">
                        Jaminan Layanan 24 Jam
                    </h1>
                </div>
                <div class="flex justify-center items-center gap-2 py-2 m-auto">
                    <img src="{{ asset('admin/img/img/icon-wallet.png') }}" class="w-5 h-5">
                    <h1 class="justify-center items-center text-white">
                        Pembayaran Aman & Terpercaya
                    </h1>
                </div>
                <div class="flex justify-center items-center gap-2 py-2 m-auto">
                    <img src="{{ asset('admin/img/img/icon-lightning.png') }}" class="w-5 h-5">
                    <h1 class="justify-center items-center text-white">
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
                                    class="prose prose-sm text-white appearance-none px-4 py-2 pb-8 text-xs text-text-color sm:px-6">
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
                                        class="flex w-full text-white items-center justify-between rounded-tr-xl bg-secondary-500 px-2 py-2 text-base font-semibold leading-6 text-text-color dark:bg-secondary-700 sm:px-4">
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
                                                        class="text-5xl text-white font-semibold text-text-color">5.0</span><sub
                                                        class="text-lg text-white font-semibold text-text-color">/5.0</sub>
                                                </div>
                                            </div>
                                            <p class="pt-2 text-white text-center text-sm">Pelanggan merasa puas dengan
                                                produk
                                                ini. <br> Dari <span class=" text-white font-semibold">1241</span>
                                                ulasan.</p>
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

                        <div class="grid ">

                            <div class="1 h-auto">
                                <form action="{{ route('jokiRankCustomer.addPemesanan') }}" method="POST" id="order-form">
                                    @csrf
                                    <div class="flex w-full h-auto ">
                                        <div
                                            class="flex items-center justify-center rounded-tl-xl bg-gradient-to-t from-[#34A0A4] to-[#57CC99] px-4 py-2 font-bold text-[#ffffff] text-2xl  ">
                                            1</div>
                                        <h3
                                            class="flex bg-[#184E77] text-white w-full items-center justify-between rounded-tr-xl bg-secondary-500 px-2 py-2 text-base font-semibold leading-6 text-text-color dark:bg-secondary-700 sm:px-4">
                                            Masukkan Data Akun Kamu</h3>
                                    </div>
                                    <div
                                        class="bg-[#184E77] grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 sm:px-6 sm:pb-4">
                                        <div><label for="login"
                                                class="block text-xs  font-medium text-white pb-2">Login
                                                Via</label>
                                            <select id="login" name="login_via"
                                                class="w-full pb-[8px] pt-[6px] pl-[12px] text-black bg-[#57CC99] rounded-lg pr-[12px] bg[#808080]!rounded-md !border-0 !bg-secondary-200 !text-xs !text-secondary-800
                                                !placeholder-secondary-800 accent-secondary-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-[#57CC99] focus:!ring-transparent">
                                                <option value="">Pilih Login Via</option>
                                                <option value="Moonton">Moonton (Rekomendasi)</option>
                                                <option value="VK">VK (Rekomendasi)</option>
                                                <option value="Tiktok">Tiktok</option>
                                                <option value="Facebook">Facebook</option>
                                            </select>
                                        </div>
                                        <div><label for="idnick"
                                                class="block text-xs font-medium \ text-text-color pb-2">User ID &
                                                Server</label>
                                            <div class="flex flex-col items-start">
                                                <input
                                                    class="relative block w-full bg-[#57CC99]  appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                    type="text" id="idnick" name="Id_Server"
                                                    placeholder="Ketikan User ID &amp; Nick Name ..." value="">
                                            </div>
                                        </div>
                                        <div><label for="emailhpmoonton"
                                                class="block text-xs font-medium text-text-color pb-2">Email/No.
                                                Hp/Moonton ID</label>
                                            <div class="flex flex-col items-start">
                                                <input
                                                    class="relative block w-full bg-[#57CC99] appearance-none  rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                    type="text" id="emailhpmoonton" name="email_no_hp_montonID"
                                                    placeholder="Ketikan Email/No. Hp/Moonton ID ..." value="">
                                            </div>
                                        </div>
                                        <div><label for="password"
                                                class="block text-xs font-medium text-text-color pb-2">Password</label>
                                            <div class="flex flex-col items-start ">
                                                <input
                                                    class="relative block w-full bg-[#57CC99] appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                    type="text" id="password" name="password"
                                                    placeholder="Ketikan Password ..." value="">
                                            </div>
                                        </div>
                                        <div><label for="hero"
                                                class="block text-xs font-medium text-text-color pb-2">Request
                                                Hero</label>
                                            <div class="flex flex-col items-start">
                                                <input
                                                    class="relative block w-full bg-[#57CC99] appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                    type="text" id="hero" name="request_hero"
                                                    placeholder="Ketikan Request Hero ..." value="">
                                            </div>
                                        </div>
                                        <div><label for="catatan"
                                                class="block text-xs font-medium text-text-color pb-2">Catatan Untuk
                                                Penjoki</label>
                                            <div class="flex flex-col items-start">
                                                <input
                                                    class="relative block w-full bg-[#57CC99] appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                    type="text" id="catatan" name="catatan_penjoki"
                                                    placeholder="Ketikan Catatan Untuk Penjoki ..." value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-[#184E77] px-4 pb-4 text-[10px] text-white rounded-b-xl sm:px-6 sm:pb-6">
                                        <div>
                                            <p>Pastikan untuk membaca semua informasi , syarat &amp; ketentuan sebelum
                                                melakukan
                                                pemesanan untuk memastikan bahwa Anda mendapatkan layanan terbaik dan
                                                sesuai
                                                ekspektasi.</p>
                                        </div>
                                    </div>
                                    <div class="2 h-auto mt-8">
                                        <div class="flex w-full h-auto ">
                                            <div
                                                class="flex items-center justify-center rounded-tl-xl bg-gradient-to-t from-[#34A0A4] to-[#57CC99] px-4 py-2 font-bold text-[#ffffff] text-2xl ">
                                                2</div>
                                            <h3
                                                class="flex bg-[#184E77] text-white w-full items-center justify-between rounded-tr-xl bg-secondary-500 px-2 py-2 text-base font-semibold leading-6 text-text-color dark:bg-secondary-700 sm:px-4">
                                                Masukkan Data Akun Kamu</h3>
                                        </div>
                                        <div class="h-auto w-full p-[24px] bg-[#184E77] rounded-b-xl">
                                            <div id="jokiSatuan">
                                                <h3 class="font-semibold text-text-color pb-2 text-white">Joki Satuan</h3>
                                                <div class="grid grid-cols-3 gap-4">
                                                    @foreach ($jokiSatuan as $jokiItem)
                                                        <input type="radio" name="id_paket"
                                                            value="{{ $jokiItem->id }}"
                                                            data-harga="{{ $jokiItem->harga_joki }}"
                                                            id="jokiSatuan-radio-{{ $loop->index }}" class="hidden">
                                                        <div class="bg-[#34A0A4] bg-secondary-600 dark:bg-secondary-600 relative flex cursor-pointer rounded-xl border border-transparent p-2.5 shadow-sm outline-none duration-300 ease-in-out hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-secondary-600 md:p-4"
                                                            role="radio" aria-checked="false" tabindex="-1"
                                                            onclick="selectRadio('jokiSatuan-radio-{{ $loop->index }}')"
                                                            data-radio="jokiSatuan-radio-{{ $loop->index }}">
                                                            <span class="flex flex-1">
                                                                <span class="flex flex-col justify-between">
                                                                    <span class="trunc block text-xs font-semibold text-white dark:text-white">{{ $jokiItem->joki_rank }}</span>
                                                                    <div>
                                                                        <span class="mt-1 flex items-center text-xxs font-medium text-white dark:text-white/75">Rp.&nbsp;{{ $jokiItem->harga_joki }}</span>
                                                                    </div>
                                                                </span>
                                                            </span>
                                                            <div class="flex aspect-square w-8 items-center">
                                                                <img src="{{ asset('admin/img/img/logogamingstore.png') }}"
                                                                    alt="Joki Rank - Legend / Star"
                                                                    fetchpriority="high" width="300"
                                                                    height="300" decoding="async" data-nimg="1"
                                                                    class="object-contain object-right" sizes="80vh"
                                                                    style="color: transparent;">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div class="jokiPaketan">
                                                <h3 class="font-semibold text-text-color pb-2 pt-2 p text-white">Joki
                                                    Paketan</h3>
                                                <div class="grid grid-cols-3 gap-4">
                                                    @foreach ($jokiPaketan as $jokiItem)
                                                        <input type="radio" name="id_paket"
                                                            value="{{ $jokiItem->joki_rank }}"
                                                            id="jokiPaketan-radio-{{ $loop->index }}">
                                                        class="hidden">
                                                        <div class="bg-[#34A0A4] bg-secondary-600 dark:bg-secondary-600 relative flex cursor-pointer rounded-xl border border-transparent p-2.5 shadow-sm outline-none duration-300 ease-in-out hover:ring-2 hover:ring-primary-500 hover:ring-offset-2 hover:ring-offset-secondary-600 md:p-4"
                                                            role="radio" aria-checked="false" tabindex="-1"
                                                            onclick="selectRadio('jokiPaketan-radio-{{ $loop->index }}')"
                                                            data-radio="jokiPaketan-radio-{{ $loop->index }}">
                                                            <span class="flex flex-1">
                                                                <span class="flex flex-col justify-between">
                                                                    <span
                                                                        class="trunc block text-xs font-semibold text-white dark:text-white">{{ $jokiItem->joki_rank }}</span>
                                                                    <div>
                                                                        <span
                                                                            class="mt-1 flex items-center text-xxs font-medium text-white dark:text-white/75">Rp.&nbsp;{{ $jokiItem->harga_joki }}</span>
                                                                    </div>
                                                                </span>
                                                            </span>
                                                            <div class="flex aspect-square w-8 items-center">
                                                                <img src="{{ asset('admin/img/img/logogamingstore.png') }}"
                                                                    alt="Joki Rank - Legend / Star"
                                                                    fetchpriority="high" width="300"
                                                                    height="300" decoding="async" data-nimg="1"
                                                                    class="object-contain object-right" sizes="80vh"
                                                                    style="color: transparent;">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex w-full h-auto mt-8">
                                            <div
                                                class="flex items-center justify-center rounded-tl-xl bg-gradient-to-t from-[#34A0A4] to-[#57CC99] px-4 py-2 font-bold text-[#ffffff] text-2xl  ">
                                                3</div>
                                            <h3
                                                class="flex bg-[#184E77] text-white w-full items-center justify-between rounded-tr-xl bg-secondary-500 px-2 py-2 text-base font-semibold leading-6 text-text-color dark:bg-secondary-700 sm:px-4">
                                                Masukkan Jumlah Bintang</h3>
                                        </div>
                                        <div class="bg-[#184E77] rounded-b-xl p-4 ">
                                            <div class="flex items-center space-x-2">
                                                <!-- Input jumlah bintang -->
                                                <div class="grow">
                                                    <div class="flex flex-col items-start">
                                                        <input
                                                            class="bg-[#57CC99]  relative block w-full appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                            type="text" id="jumlah-bintang" name="jumlah_bintang"
                                                            placeholder="Isi jumlah bintang yang kamu inginkan"
                                                            value="">
                                                        <input
                                                            class="bg-[#57CC99]  relative block w-full appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                            type="hidden" id="harga-keseluruhan"
                                                            name="harga_keseluruhan"
                                                            placeholder="Isi jumlah bintang yang kamu inginkan"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-between mt-4">
                                                <!-- Harga joki -->
                                                <span id="harga-joki">: -</span>
                                                <!-- Total harga -->
                                                <span id="total-harga">: -</span>
                                            </div>
                                        </div>
                                        <div class="flex w-full h-auto mt-8">
                                            <div
                                                class="flex items-center justify-center rounded-tl-xl bg-gradient-to-t from-[#34A0A4] to-[#57CC99] px-4 py-2 font-bold text-[#ffffff] text-2xl  ">
                                                4</div>
                                            <h3
                                                class="flex bg-[#184E77] text-white w-full items-center justify-between rounded-tr-xl bg-secondary-500 px-2 py-2 text-base font-semibold leading-6 text-text-color dark:bg-secondary-700 sm:px-4">
                                                Detail Kontak Anda</h3>
                                        </div>
                                        <div class="bg-[#184E77] rounded-b-xl p-4 ">
                                            <div class="flex items-center space-x-2">
                                                <div class="grow">
                                                    <div class=" flex flex-col items-start"><input
                                                            class="bg-[#57CC99]  relative block w-full appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800"
                                                            type="text" id="promo-code" name="no_hp"
                                                            placeholder="Masukkan nomor whatsApp anda" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- The button to open modal -->
                                        <div class="w-full h-auto mt-8">
                                            <label for="my_modal_6"
                                                class="btn bg-[#57CC99] hover:bg-[#57CC99] text-white w-full"
                                                onclick="tampilkanPesanan()">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    aria-hidden="true" class="h-5 w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                                    </path>
                                                </svg>
                                                Pesan
                                            </label>

                                            <!-- Put this part before </body> tag -->
                                            <input type="checkbox" id="my_modal_6" class="modal-toggle" />
                                            <div class="modal " role="dialog">
                                                <div
                                                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                                    <div class="bg-[#184E77] text-white relative transform overflow-hidden rounded-lg bg-secondary-700 px-4 pt-5 pb-4 text-left text-text-color shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6 opacity-100 translate-y-0 sm:scale-100"
                                                        id="headlessui-dialog-panel-:r5p:"
                                                        data-headlessui-state="open">
                                                        <div>
                                                            <div
                                                                class="mx-auto flex h-10 w-10 items-center justify-center rounded-full bg-emerald-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" aria-hidden="true"
                                                                    class="h-6 w-6 text-emerald-800">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M4.5 12.75l6 6 9-13.5"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="mt-3 text-center sm:mt-5">
                                                                <h3 class="text-lg font-semibold leading-6"
                                                                    id="headlessui-dialog-title-:r5q:"
                                                                    data-headlessui-state="open">Buat Pesanan</h3>
                                                                <p class="pt-2 text-sm md:text-base"
                                                                    id="headlessui-description-:r5r:"
                                                                    data-headlessui-state="open">Pastikan data akun
                                                                    Kamu
                                                                    dan produk yang Kamu pilih valid dan sesuai.</p>
                                                                <div class="mt-2">
                                                                    <div
                                                                        class="my-4 grid grid-cols-3 gap-2 rounded-md bg-secondary-600 p-4 text-left text-sm text-text-color md:text-base">
                                                                        <div>Login</div>
                                                                        <div id="modal-login-value"
                                                                            class="col-span-2">:
                                                                        </div>
                                                                        <div>IdNick</div>
                                                                        <div id="modal-idnick-value"
                                                                            class="col-span-2">:
                                                                        </div>
                                                                        <div>Email/Hp/Moonton</div>
                                                                        <div id="modal-emailhpmoonton-value"
                                                                            class="col-span-2">:</div>
                                                                        <div>Password</div>
                                                                        <div id="modal-password-value"
                                                                            class="col-span-2">
                                                                            :</div>
                                                                        <div>Hero</div>
                                                                        <div id="modal-hero-value" class="col-span-2">
                                                                            :
                                                                        </div>
                                                                        <div>Catatan</div>
                                                                        <div id="modal-catatan-value"
                                                                            class="col-span-2">:
                                                                        </div>
                                                                        <div>Item</div>
                                                                        <div id="modal-item-value" class="col-span-2">
                                                                            :
                                                                        </div>
                                                                        <div>Product</div>
                                                                        <div id="modal-product-value"
                                                                            class="col-span-2">:
                                                                        </div>
                                                                        <div>Payment</div>
                                                                        <div id="modal-payment-value"
                                                                            class="col-span-2">:
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-action mt-5 grid grid-cols-2 gap-3">
                                                            <div>
                                                                <button for="my_modal_6" type="sumbit" id="pay-button"
                                                                    class=" bg-emerald-500 text-white btn mt-3 inline-flex w-full justify-center rounded-md border
                                                                border-secondary-700 bg-secondary-600 px-4 py-2 text-base font-medium
                                                                text-text-color shadow-sm hover:bg-emerald-600 focus:outline-none
                                                                focus:ring-2 focus:ring-primary-500 focus:ring-offset-2
                                                                focus:ring-offset-secondary-900 sm:col-start-1 sm:mt-0
                                                                sm:text-sm">Pesan
                                                                    Sekarang </button>
                                                            </div>
                                                            <div>
                                                                <label for="my_modal_6"
                                                                    class=" bg-emerald-500 text-white btn mt-3 inline-flex w-full justify-center rounded-md border
                                                                border-secondary-700 bg-secondary-600 px-4 py-2 text-base font-medium
                                                                text-text-color shadow-sm hover:bg-emerald-600 focus:outline-none
                                                                focus:ring-2 focus:ring-primary-500 focus:ring-offset-2
                                                                focus:ring-offset-secondary-900 sm:col-start-1 sm:mt-0
                                                                sm:text-sm">Batalkan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    Legal 100% (Open 24 Jam) . GamingStore Sahabat Para Gamers Kami berdedikasi untuk
                    menyediakan
                    layanan terbaik dan terus menerus inovatif untuk memenuhi kebutuhan gamers. Jangan lewatkan
                    kesempatan untuk mengikuti kami di sosial media dan tetap update dengan informasi terbaru,
                    tips,
                    trik, dan promo-promo menarik lainnya. Jadilah bagian dari komunitas gamers terbesar dan
                    terpercaya dengan GamingStore! Jangan Lupa Follow Sosial Media Kita Dapatkan info dan promo
                    menarik yang akan terus mengalir untuk menambah kegembiraan dalam setiap game yang Anda
                    mainkan.
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const jokiPaketanLink = document.querySelector(".jokiPaketan a");
            const jokiSatuanLink = document.querySelector("#jokiSatuan a");
            const jumlahBintang = document.getElementById("jumlah-bintang");

            jokiPaketanLink.addEventListener("click", function(event) {
                event.preventDefault(); // Menghentikan tindakan default dari link
                jumlahBintang.disabled = true; // Mengatur input menjadi disable
            });

            jokiSatuanLink.addEventListener("click", function(event) {
                event.preventDefault();
                jumlahBintang.disabled = false;
            });
        });
    </script>
    <script>
        function selectRadio(radioId) {
            const radio = document.getElementById(radioId);
            radio.checked = true;
        }

        function tampilkanPesanan(jokiRank) {
            // Ambil nilai dari inputan lainnya
            var loginValue = document.getElementById('login').value;
            var idnickValue = document.getElementById('idnick').value;
            var emailhpmoontonValue = document.getElementById('emailhpmoonton').value;
            var passwordValue = document.getElementById('password').value;
            var heroValue = document.getElementById('hero').value;
            var catatanValue = document.getElementById('catatan').value;
            var itemValue = document.querySelector('input[name="id_paket"]:checked').value;

            // Update nilai-nilai di dalam modal
            document.getElementById('modal-login-value').innerText = ': ' + loginValue;
            document.getElementById('modal-idnick-value').innerText = ': ' + idnickValue;
            document.getElementById('modal-emailhpmoonton-value').innerText = ': ' + emailhpmoontonValue;
            document.getElementById('modal-password-value').innerText = ': ' + passwordValue;
            document.getElementById('modal-hero-value').innerText = ': ' + heroValue;
            document.getElementById('modal-catatan-value').innerText = ': ' + catatanValue;
            document.getElementById('modal-item-value').innerText = ': ' + itemValue;
            document.getElementById('modal-product-value').innerText = ': ' + 'Joki Rank';
            document.getElementById('modal-payment-value').innerText = ': ' + 'QRIS (All Payment)';
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const jumlahBintang = document.getElementById("jumlah-bintang");
        const hargaJokiElement = document.getElementById("harga-joki");
        const totalHargaElement = document.getElementById("total-harga");
        const hargaKeseluruhanElement = document.getElementById("harga-keseluruhan");

        jumlahBintang.addEventListener("input", function () {
            const jumlahBintangValue = parseInt(jumlahBintang.value); // Pastikan nilai berupa angka
            const radioChecked = document.querySelector('input[name="id_paket"]:checked');
            if (radioChecked && !isNaN(jumlahBintangValue)) { // Periksa bahwa nilai bintang adalah angka dan ada radio yang dipilih
                const hargaJoki = parseInt(radioChecked.dataset.harga);
                const totalHarga = hargaJoki * jumlahBintangValue;
                hargaJokiElement.innerText = ": Rp. " + formatNumber(hargaJoki);
                totalHargaElement.innerText = ": Rp. " + formatNumber(totalHarga);
                hargaKeseluruhanElement.value = totalHarga;
            } else {
                // Handle jika nilai bintang tidak valid
                hargaJokiElement.innerText = ": -";
                totalHargaElement.innerText = ": -";
                hargaKeseluruhanElement.value = "";
            }
        });

        function formatNumber(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            var formData = $('#order-form').serialize(); // Serialize the form data

            $.ajax({
                url: '{{ route("jokiRankCustomer.addPemesanan") }}', // Your route to the controller method
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token
                },
                success: function(response) {
                    // Trigger snap popup with the snap token from the response
                        window.snap.pay('{{ session('snapToken') }}', {
                            onSuccess: function(result){
                                alert("Payment success!");
                                console.log(result);
                            },
                            onPending: function(result){
                                alert("Waiting for your payment!");
                                console.log(result);
                            },
                            onError: function(result){
                                alert("Payment failed!");
                                console.log(result);
                            },
                            onClose: function(){
                                alert('You closed the popup without finishing the payment');
                            }
                        });
                },
                error: function(xhr, status, error) {
                alert("Something went wrong!");
                console.error(xhr.responseText);
                }
            });
        });
    </script>
</body>

</html>
