
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>GAMINGSTORE</title>
    <link rel="stylesheet" href="{{ asset('admin') }}/css/index.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/css/output.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite('resources/css/app.css')
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

<div class="bg-gradient-to-br from-[#34A0A4] to-[#184E77] h-auto w-full ">

    <div class="w-[70%] m-auto">

        <main class="text-white relative ">
            <div class="container pt-12 pb-8  md:pt-24 justify-center items-center m-auto">
                <div class="mx-auto max-w-3xl text-center">
                    <h1 class="text-base font-semibold text-text-color print:text-black">Terima Kasih!</h1>
                    <p class="mt-2 text-2xl font-bold tracking-tight text-text-color print:text-black md:text-4xl">Transaksi
                        sudah selesai.</p>
                        <p class="mt-3.5 text-base text-text-color print:text-black">Pesanan kamu <button type="button"
                            class="mx-1 rounded-md border border-secondary-700/25 bg-secondary-800/25 px-1 font-bold text-text-color print:text-black">TPOC8F8C94A2B842670741507</button>
                            telah dikirim dan akan segera tiba.</p>
                        </div>
                    </div>
                    <div class="container flex m-auto w-full justify-end pb-4 print:hidden"><button
                        class="inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-text-color-foreground transition-colors duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75"
                        type="button">Download Invoice</button></div>
                        <div class="container grid m-auto grid-cols-3 gap-4">
                            <div class="col-span-3 rounded-xl border border-secondary-700/25 bg-secondary-800/25 p-4 md:col-span-2">
                                <div>
                                    <div>
                                        <h3 class="text-base font-semibold leading-7 text-text-color print:text-black">Detail Pembelian</h3>
                                        <p class="text- mt-1 max-w-2xl text-sm leading-6">Pembelian produk Mobile Legends 18 (17+1) Diamonds
                                        </p>
                                    </div>
                                    <div class="mt-4 border-t border-secondary-700/25">
                                        <dl class="divide-y divide-secondary-700/25">
                                            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                                <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Nomor Invoice
                                                </dt>
                                                <dd class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">
                                                    TPOC8F8C94A2B842670741507</dd>
                                                </div>
                                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Status Transaksi
                                                    </dt>
                                                    <dd class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">
                                                        <span
                                                        class="inline-flex rounded-sm px-2 text-xs font-semibold leading-5 print:p-0 bg-emerald-200 text-emerald-900">Success</span>
                                                    </dd>
                                                </div>
                                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Status Pembayaran
                                                    </dt>
                                                    <dd class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">
                                                        <span id="badge-paid"
                                                        class="inline-flex rounded-sm px-2 text-xs font-semibold leading-5 print:p-0 bg-emerald-200 text-emerald-900">Paid</span>
                                                    </dd>
                                                </div>
                                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Pesan</dt>
                                                    <dd class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">
                                                        Transaksi berhasil pada 2024/05/21 03:28:47 WIB</dd>
                                                    </div>
                                                    <div class="pt-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                                        <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Rincian
                                                            Pembayaran</dt>
                                                            <div class="space-y-4 sm:col-span-2"><button
                                                                class="mt-1 flex w-full items-center justify-between rounded-md bg-secondary-800/25 py-2 pr-2 pl-4 text-sm"
                                                                id="headlessui-disclosure-button-:rko:" type="button" aria-expanded="false"
                                                                data-headlessui-state=""><span>Lihat Rincian Pembayaran</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                                class="h-5 w-5 text-text-color print:text-black">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                            </svg></button>
                                                            <div
                                                            class="mt-1 flex items-center justify-between rounded-md bg-secondary-800/25 p-4 text-sm leading-6 text-text-color print:py-0 print:text-black sm:mt-0">
                                                            <div>Total Pembayaran</div>
                                                            <div>Rp&nbsp;4.762</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </dl>
                </div>
            </div>
        </div>
        <div class="hidden h-0 print:block print:h-56"></div>
        <div
        class="col-span-3 flex flex-col gap-4 rounded-xl border border-secondary-700/25 bg-secondary-800/25 p-4 md:col-span-1">
        <div class="w-full text-center text-sm font-medium">
            <dt class="text-text-color print:text-black">Transaksi ini dibuat pada</dt>
            <dd class="mt-2 rounded-md bg-green-500 py-2 text-text-color print:text-black">21/05/2024 03:28:45</dd>
        </div>
        <div class="rounded-md bg-secondary-800/50 p-4">
            <h2 class="text-sm font-semibold leading-6">Metode Pembayaran</h2>
            <h3 class="text-sm font-semibold leading-6">Saldo</h3>
        </div>
        <div class="flex flex-col"></div>
    </div>
    <div class="col-span-3 rounded-xl border border-secondary-700/25 bg-secondary-800/25 p-4 md:col-span-3">
        <div class="flex flex-col gap-4 md:flex-row">
            <div class="grid w-full grid-cols-1 gap-4 rounded-md bg-secondary-800/25 p-4 md:grid-cols-2">
                <div>
                    <h3 class="text-sm font-semibold leading-6">Informasi akun</h3>
                    <div
                    class="mt-4 divide-y divide-secondary-700/50 border-t border-secondary-700/50 text-sm font-medium text-text-color print:text-black">
                    <div class="grid grid-cols-3 gap-x-4 py-2">
                        <dt
                        class="col-span-3 text-sm font-medium leading-6 text-text-color print:text-black md:col-span-1">
                        Nickname</dt>
                        <dd
                        class="col-span-3 text-xs leading-6 text-text-color print:text-black sm:col-span-2 md:text-sm">
                        <p>gadisss.</p>
                    </dd>
                </div>
                <div class="grid grid-cols-3 gap-x-4 py-2">
                    <dt
                    class="col-span-3 text-sm font-medium leading-6 text-text-color print:text-black md:col-span-1">
                    ID</dt>
                    <dd
                    class="col-span-3 text-xs leading-6 text-text-color print:text-black sm:col-span-2 md:text-sm">
                    <p>534510040</p>
                </dd>
            </div>
            <div class="grid grid-cols-3 gap-x-4 py-2">
                <dt
                class="col-span-3 text-sm font-medium leading-6 text-text-color print:text-black md:col-span-1">
                Server</dt>
                <dd
                class="col-span-3 text-xs leading-6 text-text-color print:text-black sm:col-span-2 md:text-sm">
                <p>8151</p>
            </dd>
        </div>
    </div>
</div>
<div>
    <div><a class="print:text-black-foreground flex w-full items-center justify-center rounded-lg bg-primary-500 py-2 text-sm font-semibold leading-6 text-text-color duration-200 ease-in-out hover:bg-primary-400"
        href="/id/mobile-legends" style="outline: none;">Beli Lagi</a></div>
        <div class="pt-4 print:hidden">
            <form
            class="flex flex-col gap-y-3 rounded-lg border border-secondary-700/25 bg-secondary-800/50 p-4">
            <div class="font-semibold">Tinggalkan ulasan untuk transaksi ini.</div>
            <div class="flex items-center"><button type="button" class=""><svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true" class="h-5 w-5 flex-shrink-0">
                <path fill-rule="evenodd"
                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                clip-rule="evenodd"></path>
            </svg></button><button type="button" class=""><svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true" class="h-5 w-5 flex-shrink-0">
                <path fill-rule="evenodd"
                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                clip-rule="evenodd"></path>
            </svg></button><button type="button" class=""><svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true" class="h-5 w-5 flex-shrink-0">
                <path fill-rule="evenodd"
                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                clip-rule="evenodd"></path>
            </svg></button><button type="button" class=""><svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true" class="h-5 w-5 flex-shrink-0">
                <path fill-rule="evenodd"
                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                clip-rule="evenodd"></path>
            </svg></button><button type="button" class=""><svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true" class="h-5 w-5 flex-shrink-0">
                <path fill-rule="evenodd"
                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                clip-rule="evenodd"></path>
            </svg></button></div>
            <div><label for="review"
                class="flex items-center justify-between text-sm font-medium leading-6 text-white">
                <div>Tambahkan ulasan Kamu</div>
                                    </label>
                                    <div class="my-2 flex flex-wrap gap-1"><button type="button"
                                        class="inline-flex items-center gap-x-1.5 rounded-full px-3 py-2 text-xs font-medium text-secondary-200 outline-none ring-1 ring-inset ring-secondary-700 bg-secondary-600 hover:bg-secondary-700">Pelayanan
                                        ramah</button><button type="button"
                                        class="inline-flex items-center gap-x-1.5 rounded-full px-3 py-2 text-xs font-medium text-secondary-200 outline-none ring-1 ring-inset ring-secondary-700 bg-secondary-600 hover:bg-secondary-700">Proses
                                        cepat banget</button><button type="button"
                                        class="inline-flex items-center gap-x-1.5 rounded-full px-3 py-2 text-xs font-medium text-secondary-200 outline-none ring-1 ring-inset ring-secondary-700 bg-secondary-600 hover:bg-secondary-700">Harganya
                                        murah</button><button type="button"
                                        class="inline-flex items-center gap-x-1.5 rounded-full px-3 py-2 text-xs font-medium text-secondary-200 outline-none ring-1 ring-inset ring-secondary-700 bg-secondary-600 hover:bg-secondary-700">Puas
                                        banget topup disini</button><button type="button"
                                        class="inline-flex items-center gap-x-1.5 rounded-full px-3 py-2 text-xs font-medium text-secondary-200 outline-none ring-1 ring-inset ring-secondary-700 bg-secondary-600 hover:bg-secondary-700">Penyelesaian
                                        masalah cepat</button><button type="button"
                                        class="inline-flex items-center gap-x-1.5 rounded-full px-3 py-2 text-xs font-medium text-secondary-200 outline-none ring-1 ring-inset ring-secondary-700 bg-secondary-600 hover:bg-secondary-700">Custom</button>
                                    </div>
                                </div>
                                <div class="flex-shrink-0"><button
                                    class="inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-text-color-foreground transition-colors duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75"
                                    type="submit">Kirim</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
                    <a class="link link-hover ">Branding</a>
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
