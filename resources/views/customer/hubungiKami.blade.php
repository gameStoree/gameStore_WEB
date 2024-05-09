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

<body>
    <div class="bg-gradient-to-br from-[#34A0A4] to-[#184E77] m-auto">
        <div class="w-full pt-[65px] h-auto p-[16px] px-0 m-[0px 0px 16px] justify-center items-center m-auto bg-cover bg-center bg-opacity- bg-cover bg-center "
            style="background-image: url({{ asset('admin/img/img/bgHub.png') }})">
            <div class=" relative flex items-center bg-header-color/50 py-8 md:py-12 w-[70%] m-auto">
                <div class="absolute h-full w-full">
                    <div class="area">
                        <ul class="circles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="container relative z-20">
                    <h2 class="max-w-2xl text-3xl text-white font-bold tracking-tight text-text-color sm:text-4xl">
                        Hubungi Kami!
                    </h2>
                    <p class="mt-6 text-white max-w-3xl text-text-color">Mengalami masalah dengan waktu transaksi?
                        Silakan hubungi
                        kami di bawah ini sesuai dengan kebutuhan Kamu!</p>
                    <p class="mt-3 max-w-3xl text-white text-text-color">Customer Service <span
                            class="text-white font-semibold">GAMINGSTORE</span> Online 24/7</p>
                </div>
            </div>
        </div>
        <div class="w-[70%] m-auto">

            <div class="container grid grid-cols-1 gap-8 md:grid-cols-2 ">
                <div class="text-white">
                    <div class="mt-8 text-white">
                        <h2 class="text-2xl font-bold tracking-tight text-text-color">GAMINGSTORE</h2>
                        <p class="text-sm text-whiter">Based in Indonesia</p>
                    </div>
                    <div
                        class="mt-8 flex items-center justify-start rounded-lg bg-secondary-600/75 px-4 text-sm md:items-start md:justify-start md:bg-transparent md:px-0">
                        <ul class="flex flex-wrap items-center justify-center gap-4 py-3 md:flex-col md:items-start">
                            <li><a href="mailto:shundallbolong@gmail.com" class="flex items-center gap-x-2" target="_blank"
                                    rel="noopener noreferrer" style="outline: none;"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        class="h-5 w-5 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                                        </path>
                                    </svg><span class="text-xs text-text-color">cs@gamingstore.com</span></a></li>
                            <li><a href="https://www.instagram.com/hanzsyah.q" class="flex items-center gap-x-2"
                                    target="_blank" rel="noopener noreferrer" style="outline: none;"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="h-5 w-5 text-white">
                                        <path
                                            d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"
                                            fill="currentColor"></path>
                                    </svg><span class="text-xs text-text-color">Instagram</span></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=6285259990293"
                                    class="flex items-center gap-x-2" target="_blank" rel="noopener noreferrer"
                                    style="outline: none;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="h-5 w-5 text-white">
                                        <path
                                            d="M7.25361 18.4944L7.97834 18.917C9.18909 19.623 10.5651 20 12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 13.4363 4.37821 14.8128 5.08466 16.0238L5.50704 16.7478L4.85355 19.1494L7.25361 18.4944ZM2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22ZM8.39232 7.30833C8.5262 7.29892 8.66053 7.29748 8.79459 7.30402C8.84875 7.30758 8.90265 7.31384 8.95659 7.32007C9.11585 7.33846 9.29098 7.43545 9.34986 7.56894C9.64818 8.24536 9.93764 8.92565 10.2182 9.60963C10.2801 9.76062 10.2428 9.95633 10.125 10.1457C10.0652 10.2428 9.97128 10.379 9.86248 10.5183C9.74939 10.663 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.40738 11.0473 9.44455 11.1944C9.45903 11.25 9.50521 11.331 9.54708 11.3991C9.57027 11.4368 9.5918 11.4705 9.60577 11.4938C9.86169 11.9211 10.2057 12.3543 10.6259 12.7616C10.7463 12.8783 10.8631 12.9974 10.9887 13.108C11.457 13.5209 11.9868 13.8583 12.559 14.1082L12.5641 14.1105C12.6486 14.1469 12.692 14.1668 12.8157 14.2193C12.8781 14.2457 12.9419 14.2685 13.0074 14.2858C13.0311 14.292 13.0554 14.2955 13.0798 14.2972C13.2415 14.3069 13.335 14.2032 13.3749 14.1555C14.0984 13.279 14.1646 13.2218 14.1696 13.2222V13.2238C14.2647 13.1236 14.4142 13.0888 14.5476 13.097C14.6085 13.1007 14.6691 13.1124 14.7245 13.1377C15.2563 13.3803 16.1258 13.7587 16.1258 13.7587L16.7073 14.0201C16.8047 14.0671 16.8936 14.1778 16.8979 14.2854C16.9005 14.3523 16.9077 14.4603 16.8838 14.6579C16.8525 14.9166 16.7738 15.2281 16.6956 15.3913C16.6406 15.5058 16.5694 15.6074 16.4866 15.6934C16.3743 15.81 16.2909 15.8808 16.1559 15.9814C16.0737 16.0426 16.0311 16.0714 16.0311 16.0714C15.8922 16.159 15.8139 16.2028 15.6484 16.2909C15.391 16.428 15.1066 16.5068 14.8153 16.5218C14.6296 16.5313 14.4444 16.5447 14.2589 16.5347C14.2507 16.5342 13.6907 16.4482 13.6907 16.4482C12.2688 16.0742 10.9538 15.3736 9.85034 14.402C9.62473 14.2034 9.4155 13.9885 9.20194 13.7759C8.31288 12.8908 7.63982 11.9364 7.23169 11.0336C7.03043 10.5884 6.90299 10.1116 6.90098 9.62098C6.89729 9.01405 7.09599 8.4232 7.46569 7.94186C7.53857 7.84697 7.60774 7.74855 7.72709 7.63586C7.85348 7.51651 7.93392 7.45244 8.02057 7.40811C8.13607 7.34902 8.26293 7.31742 8.39232 7.30833Z"
                                            fill="currentColor"></path>
                                    </svg><span class="text-xs text-text-color">WhatsApp</span></a></li>
                            <li><a href="https://discord.gg/fzgvXT4d" class="flex items-center gap-x-2"
                                    target="_blank" rel="noopener noreferrer" style="outline: none;"><svg
                                        xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 365.467"
                                        class="h-5 w-5 text-white">
                                        <path fill="currentColor"
                                            d="M378.186 365.028s-15.794-18.865-28.956-35.099c57.473-16.232 79.41-51.77 79.41-51.77-17.989 11.846-35.099 20.182-50.454 25.885-21.938 9.213-42.997 14.917-63.617 18.866-42.118 7.898-80.726 5.703-113.631-.438-25.008-4.827-46.506-11.407-64.494-18.867-10.091-3.947-21.059-8.774-32.027-14.917-1.316-.877-2.633-1.316-3.948-2.193-.877-.438-1.316-.878-1.755-.878-7.898-4.388-12.285-7.458-12.285-7.458s21.06 34.659 76.779 51.331c-13.163 16.673-29.395 35.977-29.395 35.977C36.854 362.395 0 299.218 0 299.218 0 159.263 63.177 45.633 63.177 45.633 126.354-1.311 186.022.005 186.022.005l4.388 5.264C111.439 27.645 75.461 62.305 75.461 62.305s9.653-5.265 25.886-12.285c46.945-20.621 84.236-25.885 99.592-27.64 2.633-.439 4.827-.878 7.458-.878 26.763-3.51 57.036-4.387 88.624-.878 41.68 4.826 86.43 17.111 132.058 41.68 0 0-34.66-32.906-109.244-55.281l6.143-7.019s60.105-1.317 122.844 45.628c0 0 63.178 113.631 63.178 253.585 0-.438-36.854 62.739-133.813 65.81l-.001.001zm-43.874-203.133c-25.006 0-44.75 21.498-44.75 48.262 0 26.763 20.182 48.26 44.75 48.26 25.008 0 44.752-21.497 44.752-48.26 0-26.764-20.182-48.262-44.752-48.262zm-160.135 0c-25.008 0-44.751 21.498-44.751 48.262 0 26.763 20.182 48.26 44.751 48.26 25.007 0 44.75-21.497 44.75-48.26.439-26.763-19.742-48.262-44.75-48.262z">
                                        </path>
                                    </svg><span class="text-xs text-text-color">Discord</span></a></li>
                        </ul>
                    </div>
                    <div
                        class="mt-4 flex items-center justify-center rounded-lg bg-secondary-600/75 px-4 text-sm md:items-start md:justify-start md:bg-transparent md:px-0">

                    </div>
                </div>
                <div class="mx-auto w-full max-w-xl space-y-8 pb-8 md:pt-8 md:pb-0">
                    <div>
                        <h2 class="mt-2 text-3xl font-bold text-white tracking-tight text-text-color">Formulir Laporan</h2>
                    </div>
                    <form class="mt-8 space-y-6">
                        <div class="space-y-3 rounded-md shadow-sm">
                            <div class="flex flex-col gap-y-2"><select id="type-form"
                                    class="!rounded-md bg-[#B0AABB] text-black !border-0 !bg-secondary-200 !text-xs !text-secondary-800 !placeholder-secondary-800 accent-secondary-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-white focus:!ring-transparent"
                                    name="type-form">
                                    <option value="Individual">Individu</option>
                                    <option value="Company">Perusahaan</option>
                                </select></div>
                            <div class="flex flex-col gap-y-2"><label for="type"
                                    class="block text-xs text-white font-medium text-text-color">Tipe</label><select
                                    id="type"
                                    class="!rounded-md !border-0 bg-[#B0AABB] text-black !bg-secondary-200 !text-xs !text-secondary-800 !placeholder-secondary-800 accent-secondary-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-white focus:!ring-transparent"
                                    name="type">
                                    <option value="">Pilih Tipe</option>
                                    <option value="Masalah Transaksi">Masalah Transaksi</option>
                                    <option value="Kiritik dan Saran">Kiritik dan Saran</option>
                                    <option value="Salah Tulis Nominal">Salah Tulis Nominal</option>
                                    <option value="Sarankan Produk/Game/Jasa Baru">Sarankan Produk/Game/Jasa Baru
                                    </option>
                                    <option value="Pertanyaan">Pertanyaan</option>
                                    <option value="Laporkan Admin Slow Response">Laporkan Admin Slow Response</option>
                                    <option value="Order Joki Top Global / 500 Star+">Order Joki Top Global / 500 Star+
                                    </option>
                                </select></div>
                            <div class="flex flex-col gap-y-2"><label for="name"
                                    class="block text-xs font-medium text-white text-text-color">Nama Kamu</label>
                                <div class="flex flex-col items-start"><input
                                        class="relative block w-full bg-[#B0AABB] text-black appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800 !rounded-md !border-0 !bg-secondary-200 !text-xs !text-secondary-800 !placeholder-secondary-800 accent-secondary-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-white focus:!ring-transparent"
                                        type="text" id="name" placeholder="Nama Kamu" name="name"></div>
                            </div>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div class="flex flex-col gap-y-2"><label for="phone-number"
                                        class="block text-xs font-medium text-white text-text-color">Nomor WhatsApp</label>
                                    <div class="flex flex-col items-start"><input
                                            class="relative block w-full bg-[#B0AABB] text-black appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800 !rounded-md !border-0 !bg-secondary-200 !text-xs !text-secondary-800 !placeholder-secondary-800 accent-secondary-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-white focus:!ring-transparent"
                                            type="text" id="phone-number" placeholder="08xxxxxxxxx"
                                            name="phone-number"></div>
                                </div>
                                <div class="flex flex-col gap-y-2"><label for="email"
                                        class="block text-xs font-medium text-white text-text-color">Email (Optional)</label>
                                    <div class="flex flex-col items-start"><input
                                            class="relative block w-full bg-[#B0AABB] text-black appearance-none rounded-none border border-primary-500 bg-secondary-700 px-3 py-2 text-xs text-white placeholder-secondary-200 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-bg-color !bg-secondary-200 !text-black !placeholder-black/60 accent-secondary-800 !ring-0 placeholder:text-xs focus:!bg-white focus:!ring-transparent dark:!text-secondary-800 dark:!placeholder-secondary-800 !rounded-md !border-0 !bg-secondary-200 !text-xs !text-secondary-800 !placeholder-secondary-800 accent-secondary-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-white focus:!ring-transparent"
                                            type="text" id="email" placeholder="john@gmail.com"
                                            name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-y-2"><label for="description"
                                    class="block text-xs font-medium text-white text-text-color">Deskripsi</label>
                                <textarea id="description" rows="4" placeholder="Tulis Pesan Kamu..."
                                    class="!rounded-md !border-0 bg-[#B0AABB]  !bg-secondary-200 !text-sm !text-secondary-800 !placeholder-secondary-800 accent-secondary-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:!bg-white focus:!ring-transparent"
                                    name="description"></textarea>
                            </div>
                        </div>
                        <div>
                            <div>

                            </div>
                        </div>
                        <div class="flex items-center gap-x-4"><button
                                class="inline-flex items-center bg-green-600 text-white justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-text-color-foreground transition-colors duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75 group relative flex w-full"
                                type="submit"><span class="absolute inset-y-0 left-0 flex items-center pl-3"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5">
                                        </path>
                                    </svg></span>Kirim Pesan</button></div>
                    </form>
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
</body>

</html>
