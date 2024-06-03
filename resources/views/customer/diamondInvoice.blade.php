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
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
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

        <main class="relative text-white">
            <div class="container pt-12 pb-8  md:pt-24">
                <div class="mx-auto max-w-3xl text-center">
                    <h1 class="text-base font-semibold text-text-color print:text-black">Terima Kasih!</h1>
                    <p class="mt-2 text-2xl font-bold tracking-tight text-text-color print:text-black md:text-4xl">
                        Transaksi sudah selesai.</p>
                    <p class="mt-3.5 text-base text-text-color print:text-black">
                        Pesanan kamu {{ $pemesanan->id }} telah dikirim dan akan segera tiba.
                    </p>
                </div>
            </div>
            <div class="container ">
                <div class="col-span-3 rounded-xl border border-secondary-700/25 bg-secondary-800/25 p-4 md:col-span-2 bg-[#34A0A4]">
                    <div>
                        <div>
                            <h3 class="text-base font-semibold leading-7 text-text-color print:text-black">Detail Pembelian</h3>
                            <p class="text- mt-1 max-w-2xl text-sm leading-6">Pembelian produk Joki Rank 5 Star Glory</p>
                        </div>
                        <div class="mt-4 border-t border-secondary-700/25">
                            <dl class="divide-y divide-secondary-700/25">
                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Nomor Invoice</dt>
                                    <dd class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">{{ $pemesanan->id }}</dd>
                                </div>
                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Status Pembayaran</dt>
                                    <dd class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">
                                        <span id="badge-paid" class="inline-flex rounded-sm px-2 text-xs font-semibold leading-5 print:p-0 bg-emerald-200 text-emerald-900">{{ $pemesanan->status }}</span>
                                    </dd>
                                </div>
                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Tanggal Transaksi</dt>
                                    <dd class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">{{ $pemesanan->created_at }}</dd>
                                </div>
                                <div class="pt-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Produk</dt>
                                    <dd class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">{{ $pemesanan->id_diamond }}</dd>
                                </div>
                                <div class="pt-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Id & Server</dt>
                                    <dd class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">{{ $pemesanan->id_server }}</dd>
                                </div>
                                <div class="pt-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Total Harga</dt>
                                    <dd class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">Rp. {{ $pemesanan->harga_keseluruhan }}</dd>
                                </div>
                                <div class="flex">
                                    <button id="pay-button" class="flex-1 bg-green-600 flex items-center justify-center rounded-lg py-2 text-sm font-semibold leading-6 text-text-color duration-200 ease-in-out hover:bg-green-500 mr-2" style="outline: none;">Bayar Sekarang</button>
                                    <a class="flex-1 bg-red-600 flex items-center justify-center rounded-lg py-2 text-sm font-semibold leading-6 text-text-color duration-200 ease-in-out hover:bg-red-500 ml-2" href="/id/joki-rank" style="outline: none;">Batalkan & Beli Lagi</a>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container md:pt-8">
                {{-- <div class="prose prose-sm pt-4">
                    <p class="py-2">Halo, Orderanmu Telah Selesai! Terima kasih Telah Order di TAKAPEDIA.</p>
                    <p class="py-2">Keterangan Order:</p>
                    <div class="-mt-4 break-words p-4">
                        <p>[ Hallo brader pedia !!! ]<br>- Orderanmu 5 star Glory&nbsp; bonus 1 star sudah selesai dalam
                            waktu (15.49 - 18.40) sudah selesai boskuhhh</p>
                        <p>Ini ada bonus video dari kita boleh la buat story / Upload tiktok hehe<br>Link : &nbsp;<a
                                href="https://drive.google.com/drive/folders/141aWn6nddEY42kbke87tVSOwJTgAKyrH?usp=drive_link">https://drive.google.com/drive/folders/141aWn6nddEY42kbke87tVSOwJTgAKyrH?usp=drive_link</a>
                        </p>
                        <p>Gimana nih kesannya memakai joki di @Takapedia? jangan lupa tinggalin kesan di kolom ulasan
                            ya kak🙏🥰<br>Terimakasih sudah menggunakan jasa joki di @Takapedia&nbsp;</p>
                        <p>Tentunya banyak bonus dan promo menarik lainnya ]</p>
                    </div>
                    <p class="py-2">Cara Download Gambar:</p>
                    <ol class="-ml-1 -mt-3 p-4">
                        <li>Pilih gambar yang ingin di download, lalu klik gambar tersebut.</li>
                        <li>Akan muncul tab baru, lalu klik kanan atau klik lalu tahan gambar tersebut</li>
                        <li>Pilih "Save image as", maka gambar akan otomatis terdownload.</li>
                    </ol>
                    <p class="py-2">Terimakasih Sudah Order Di TAKAPEDIA, Di tunggu Next Ordernya Semoga Sehat Selalu
                        Dan Lancar
                        Rezekinya.</p>
                </div> --}}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
        window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result) {
                $.ajax({
                    url: '/api/pesanDiamondInvoice/updateStatus',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        id: result.order_id
                    },
                    success: function(response) {
                        alert('Payment successful! Status updated to Lunas.');
                        console.log(response.message);
                    },
                    error: function(response) {
                        alert('Error updating status.');
                        console.log(response);
                    }
                });
            },
            onPending: function(result) {
                alert("Waiting for your payment!");
                console.log(result);
            },
            onError: function(result) {
                alert("Payment failed!");
                console.log(result);
            },
            onClose: function() {
                alert('You closed the popup without finishing the payment');
            }
        });
    });
</script>
