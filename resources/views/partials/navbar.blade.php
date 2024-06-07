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

<nav class="bg-[#184E77] fixed m-auto top-0 w-full z-50 ">
    <div class="navbar h-[60px] w-[70%] m-auto items-center justify-center">
        <div class="flex-1">
            <div class="justify-center items-center">
                <a href="/customer" rel="noopener noreferrer">
                    <img src="{{ asset('admin/img/img/logo.png') }}" alt="Hubungi Kami">
                </a>
            </div>
        </div>
        <div class="flex-none">
            <div class="flex items-center mx-1 justify-center hover:border-b-2">
                <img src="{{ asset('admin/img/img/hubungikami.png') }}" class="h-[20px] items-center justify-center">
                <a href="/customer/hubungiKami" class="text-white text-[15px] py-4 pl-2 pr-4 font-bold">Hubungi Kami</a>
            </div>
            <div class="flex items-center mx-1 justify-center hover:border-b-2">
                <img src="{{ asset('admin/img/img/cektransaksi.png') }}" class="h-[20px] items-center justify-center">
                <a href="/customer/invoice" class="text-white text-[15px] py-4 pl-2 pr-4 font-bold">Cek Transaksi</a>
            </div>
            <div class="flex items-center mx-1 justify-center hover:border-b-2">
                <img src="{{ asset('admin/img/img/calculator.png') }}" class="h-[20px] items-center justify-center">
                <a href="/customer/kalkulator" class="text-white text-[15px] py-4 pl-2 pr-4 font-bold">Kalkulator</a>
            </div>
            <div class="flex items-center mx-1 justify-center hover:border-b-2">
                <img src="{{ asset('admin/img/img/home.png') }}" class="h-[20px] items-center justify-center">
                <a href="/customer" class="text-white text-[15px] py-4 pl-2 pr-4 font-bold">Beranda</a>
            </div>
            @guest
                <div
                    class="menu ml-2 hover:bg-[#007497] bg-[#168AAD] h-[40px] items-center justify-center rounded-l-xl border-r-[3px] border-white menu-horizontal p-0">
                    <a href="/login" class="text-white text-[15px] py-[10px] px-4 font-bold">Masuk</a>
                </div>
                <div
                    class="menu hover:bg-[#007497] bg-[#168AAD] h-[40px] items-center justify-center rounded-r-xl menu-horizontal p-0">
                    <a href="/customer" class="text-white text-[15px] py-[10px] px-4 font-bold">Daftar Sekarang</a>
                </div>
            @endguest
            @auth
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a href="/logout    ">Logout</a></li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</nav>
