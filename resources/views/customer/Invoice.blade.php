<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>GAMINGSTORE</title>


    <link rel="stylesheet" href="../admin/css/output.css" />
    <link rel="stylesheet" href="../admin/css/index.css" />
    @vite('resources/css/app.css')
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

<body>
    <div class="bg-gradient-to-br from-[#34A0A4] to-[#184E77] m-auto">
        {{-- ISI --}}

        <div class="relative m-auto overflow-hidden bg-blue-950 bg-opacity-40">
            <div class="absolute z-20 h-full w-full">
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
            <form class="container w-[70%] text-white mt-16 m-auto relative z-20 py-12 text-left">
                <h2 class="max-w-2xl text-3xl font-bold tracking-tight text-text-color sm:text-4xl">Lacak pesanan kamu
                    dengan nomor invoice!</h2>
                <p class="mt-6 max-w-3xl text-text-color">Pesanan Kamu tidak terdaftar meskipun Kamu yakin telah
                    memesan? Harap tunggu 1-5 menit. Tetapi jika pesanan masih belum muncul, Kamu bisa <a
                        class="underline decoration-primary-500 underline-offset-2" href="/id/contact-us"
                        style="outline: none;">Hubungi Kami</a>.</p>
                <div class="mt-6 max-w-xl"><label for="invoice"
                        class="block text-xs font-medium text-text-color mb-2 text-left">Nomor Invoice Kamu</label>
                    <div class="flex flex-col items-start">
                        <input
                            class="relative block w-full appearance-none rounded-none border border-primary-500 bg-secondary-700
                            px-3 py-2 text-xs bg-[#57CC99] text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none
                            focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black
                            !placeholder-black accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800
                            dark:!placeholder-secondary-800 !rounded-md"
                            type="text" id="invoice" placeholder="LDxxxxxxxxxxxx" name="invoice">
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-start gap-x-6"><button
                        class="inline-flex bg-[#57CC99] text-blue-950 items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-text-color-foreground transition-colors duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75 space-x-2 !pl-3 !pr-4"
                        type="submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                clip-rule="evenodd"></path>
                        </svg><span>Find Transactions</span></button></div>
            </form>
        </div>

        {{-- TABEL --}}

        <div class="container text-white w-[70%] m-auto justify-center items-center">
            <div class=" h-auto mt-12 ">
                <div class="w-full ">
                    <h1 class="text-xl font-semibold text-text-color">Transaksi Real-time</h1>
                    <p class="mt-2 max-w-2xl text-sm text-text-color">Ini adalah transaksi real-time dari semua
                        pengguna. Informasi yang tersedia mencakup tanggal transaksi, kode invoice, nomor ponsel, harga,
                        dan status.</p>
                </div>
            </div>
        </div>
        <div class="container w-[70%] m-auto mt-4 text-white">
            <div class="space-y-4">
                <div class="-mx-4 overflow-x-auto ring-1 ring-blue-950 sm:mx-0 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-secondary-700">
                        <thead>
                            <tr>
                                <th scope="col" colspan="1"
                                    class="table-cell px-3 py-3.5 text-left text-xs font-semibold text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                    <div class="">Tanggal</div>
                                </th>
                                <th scope="col" colspan="1"
                                    class="table-cell px-3 py-3.5 text-left text-xs font-semibold text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                    <div class="">Nomor Invoice</div>
                                </th>
                                <th scope="col" colspan="1"
                                    class="table-cell px-3 py-3.5 text-left text-xs font-semibold text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                    <div class="">No. Handphone</div>
                                </th>
                                <th scope="col" colspan="1"
                                    class="table-cell px-3 py-3.5 text-left text-xs font-semibold text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                    <div class="">Harga</div>
                                </th>
                                <th scope="col" colspan="1"
                                    class="table-cell px-3 py-3.5 text-left text-xs font-semibold text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                    <div class="">Status</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td
                                    class="table-cell px-3 py-3.5 text-left text-xs font-medium text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                    <div class="whitespace-nowrap">19-05-2024 02:04:21</div>
                                </td>
                                <td
                                    class="table-cell px-3 py-3.5 text-left text-xs font-medium text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                    <div class="whitespace-nowrap">LD*********199</div>
                                </td>
                                <td
                                    class="table-cell px-3 py-3.5 text-left text-xs font-medium text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                    <div class="whitespace-nowrap">082******755</div>
                                </td>
                                <td
                                    class="table-cell px-3 py-3.5 text-left text-xs font-medium text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                    <div class="whitespace-nowrap"><span>Rp&nbsp;1.243.622</span></div>
                                </td>
                                <td
                                    class="table-cell px-3 py-3.5 text-left text-xs font-medium text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                    <div class="whitespace-nowrap"><span
                                            class="inline-flex rounded-sm px-2 text-xs font-semibold leading-5 print:p-0 bg-yellow-300 text-yellow-800">Pending</span>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- FOOTER --}}
        <div class="m-auto w-auto  ">
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
</body>

</html>
