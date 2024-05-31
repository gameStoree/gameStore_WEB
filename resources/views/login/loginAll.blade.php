<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>GAMINGSTORE</title>
    <link rel="stylesheet" href="{{ asset('admin') }}/css/index.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/css/output.css" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./carousel.css">

</head>

<body>
    <div class=" flex min-h-full ">


        {{-- KIRI --}}
        <div
            class="flex bg-gradient-to-br from-[#34A0A4] to-[#184E77]  text-white flex-1 flex-col justify-center px-4 py-36 sm:px-6 md:px-12 xl:flex-none xl:px-24">
            <div class="mb-14 flex shrink-0 items-center">
                <img class="w-full" src="{{ asset('admin/img/img/logo.png') }}" alt="Hubungi Kami">
            </div>
            <div class="mx-auto w-full">
                <div>
                    <h5
                        class="text-[14px] font-semibold uppercase leading-[26px] tracking-[0.2em] text-primary-400 md:text-[16px] lg:text-[18px]">
                        MASUK AKUN GAMINGSTORE</h5>
                    <h2 class="text-[44px] font-extrabold tracking-tighter text-white md:text-[56px] lg:text-[64px]">
                        Selamat Datang</h2>
                    <p class="mt-2 text-base text-white">Masukan Email dan Passowrd kamu untuk masuk</p>
                </div>
                <div class="mt-8 ">
                    <div class="mt-6">
                        <form class="space-y-6">
                            <div><label class="mb-4 block text-sm font-medium text-white">Email</label>
                                <div class="mt-1">
                                    <label class="input bg-[#168AAD] input-bordered flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                            class="w-4 h-4 ">
                                            <path
                                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                                            <path
                                                d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                                        </svg>
                                        <input type="text" class="grow placeholder-white" placeholder="Email" />

                                    </label>
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label class="mb-4 block text-sm font-medium text-white">Password</label>
                                <div class="relative mt-1"><label
                                        class="input bg-[#168AAD] input-bordered flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                            class="w-4 h-4 ">
                                            <path fill-rule="evenodd"
                                                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <input type="password" class="grow via-white text-white" value="password" />
                                    </label>
                                    <div class="absolute inset-y-0 right-1 flex cursor-pointer items-center pr-6"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="h-5 w-5 text-gray-400">
                                            <path class="text-white" stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                            </path>
                                        </svg></div>
                                </div>
                            </div>
                            <div><button type="submit"
                                    class="flex bg-green-600 h-14 w-full items-center justify-center rounded-[10px] bg-primary-50 p-4 text-[14px] font-semibold text-primary-400 shadow-sm md:text-base">
                                    Masuk Sekarang</button></div>
                            <div class="flex flex-col space-y-2 text-center text-sm">
                                <p class="font-semibold text-white">Belum punya akun? <a
                                        class="ml-2 font-semibold text-green-600" href="/account/auth/register">Daftar
                                        Sekarang</a></p><a class="font-semibold text-green-600"
                                    href="/account/auth/forgot-password">Lupa Password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        {{-- KANAN --}}
        <div class="relative   hidden w-0 flex-1 bg-[#99D98C] lg:block">
            <div class="absolute   inset-0 m-auto flex items-center justify-center" id="carousel-container">
                <img class="px-12 carousel-img" src="{{ asset('admin/img/img/BGALL.png') }}" alt="">
                <img class="px-12 carousel-img" src="{{ asset('admin/img/img/bgHub.png') }}" alt="">
                <img class="px-12 carousel-img" src="{{ asset('admin/img/img/bgKalkulator.png') }}" alt="">
                <img class="px-12 carousel-img" src="{{ asset('admin/img/img/footer.png') }}" alt="">
                <img class="px-12 carousel-img" src="{{ asset('admin/img/img/image3.png') }}" alt="">
            </div>
        </div>







    </div>







    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const images = document.querySelectorAll('.carousel-img');
            let index = 0;

            // Fungsi untuk menampilkan gambar selanjutnya dalam carousel
            function showNextImage() {
                images[index].classList.remove('show');
                index = (index + 1) % images.length;
                images[index].classList.add('show');
            }

            // Tampilkan gambar pertama saat halaman dimuat
            images[index].classList.add('show');

            // Atur interval untuk memanggil fungsi showNextImage setiap 3 detik
            setInterval(showNextImage, 5000);
        });
    </script>

</body>
