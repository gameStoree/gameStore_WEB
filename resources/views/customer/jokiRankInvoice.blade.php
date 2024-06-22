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
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>


{{-- NAVBAR --}}
@include('partials.navbar')
{{-- NAVBAR --}}

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
            <div class="grid grid-rows-2 grid-flow-col gap-4">
                <div class=" rounded-xl border border-secondary-700/25 bg-secondary-800/25 p-4 bg-[#34A0A4]">
                    <div class="rounded-md bg-secondary-800/25 p-4 md:grid-cols-2 bg-[#184E77]">
                        <div>
                            <h3 class="text-base font-semibold leading-7 text-text-color print:text-black">Detail
                                Pembelian</h3>
                            <p class="text- mt-1 max-w-2xl text-sm leading-6">Pembelian produk Joki Rank 5 Star Glory
                            </p>
                        </div>
                        <div class="mt-4 border-t border-secondary-700/25">
                            <dl class="divide-y divide-secondary-700/25">
                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Nomor
                                        Invoice</dt>
                                    <dd
                                        class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">
                                        {{ $pemesanan->id }}</dd>
                                </div>
                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Status
                                        Pembayaran</dt>
                                    <dd
                                        class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">
                                        <span id="badge-paid"
                                            class="inline-flex rounded-sm px-2 text-xs font-semibold leading-5 print:p-0 bg-emerald-200 text-emerald-900">{{ $pemesanan->status }}</span>
                                    </dd>
                                </div>
                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Tanggal
                                        Transakasi
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">
                                        {{ $pemesanan->created_at }}</dd>
                                </div>
                                <div class="pt-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Produk
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">
                                        {{ $pemesanan->id_paket }}</dd>
                                </div>
                                <div class="pt-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm font-medium leading-6 text-text-color print:text-black">Total
                                        Harga</dt>
                                    <dd
                                        class="mt-1 text-sm leading-6 text-text-color print:text-black sm:col-span-2 sm:mt-0">
                                        Rp.
                                        {{ $pemesanan->harga_keseluruhan }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                @if($pemesanan->status == 'Belum Bayar')
                <div class="rounded-xl border border-secondary-700/25 bg-secondary-800/25 bg-[#34A0A4]">
                    <div class="flex flex-col gap-4 md:flex-row p-4">
                        <div class="grid w-full grid-cols-1 gap-4 rounded-md bg-secondary-800/25 p-4 md:grid-cols-2 bg-[#184E77]">
                            <div>
                                <h3 class="text-sm font-semibold leading-6">Informasi akun</h3>
                                <div class="mt-4 divide-y divide-secondary-700/50 border-t border-secondary-700/50 text-sm font-medium text-text-color print:text-black">
                                    <!-- Account Information -->
                                    @foreach(['Login Via' => 'login_via', 'User ID & Server' => 'Id_Server', 'Email/No. Hp/Moonton ID' => 'email_no_hp_montonID', 'Password' => 'password', 'Request Hero' => 'request_hero', 'Catatan Untuk Penjoki' => 'catatan_penjoki'] as $label => $field)
                                        <div class="grid grid-cols-3 gap-x-4 py-2">
                                            <dt class="col-span-3 text-sm font-medium leading-6 text-text-color print:text-black md:col-span-1">{{ $label }}</dt>
                                            <dd class="col-span-3 text-xs leading-6 text-text-color print:text-black sm:col-span-2 md:text-sm">
                                                <p>{{ $pemesanan->$field }}</p>
                                            </dd>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <div class="pt-4 print:hidden">
                                    <form class="flex flex-col gap-y-3 rounded-lg border border-secondary-700/25 bg-secondary-800/50 p-4">
                                        <div class="font-semibold">Tinggalkan ulasan untuk transaksi ini.</div>
                                        <!-- Star Rating and Review Form -->
                                        <!-- Star Rating -->
                                        <div class="flex items-center">
                                            @for($i = 0; $i < 5; $i++)
                                                <button type="button" class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5 flex-shrink-0">
                                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            @endfor
                                        </div>
                                        <!-- Review Text -->
                                        <div>
                                            <label for="review" class="flex items-center justify-between text-sm font-medium leading-6 text-white">
                                                <div>Tambahkan ulasan Kamu</div>
                                            </label>
                                            <div class="my-2 flex flex-wrap gap-1">
                                                @foreach(['Pelayanan ramah', 'Proses cepat banget', 'Harganya murah', 'Puas banget topup disini', 'Penyelesaian masalah cepat', 'Custom'] as $tag)
                                                    <button type="button" class="inline-flex items-center gap-x-1.5 rounded-full px-3 py-2 text-xs font-medium text-secondary-200 outline-none ring-1 ring-inset ring-secondary-700 bg-secondary-600 hover:bg-secondary-700">{{ $tag }}</button>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button class="inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-text-color-foreground transition-colors duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75" type="submit">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <button id="pay-button" class="print:text-black-foreground bg-green-600 flex w-full items-center justify-center rounded-lg bg-primary-500 py-2 text-sm font-semibold leading-6 text-text-color duration-200 ease-in-out hover:bg-primary-400" style="outline: none;">Bayar Sekarang</button>
                            </div>
                            <div>
                                <a class="print:text-black-foreground bg-red-600 flex w-full items-center justify-center rounded-lg bg-primary-500 py-2 text-sm font-semibold leading-6 text-text-color duration-200 ease-in-out hover:bg-primary-400" href="/id/joki-rank" style="outline: none;">Batalkan & Beli Lagi</a>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif($pemesanan->status == 'Lunas' || $pemesanan->status == 'Done')
                <div class="rounded-xl border border-secondary-700/25 bg-secondary-800/25 bg-[#34A0A4]">
                    <div class="flex flex-col gap-4 md:flex-row p-4">
                        <div class="grid w-full grid-cols-1 gap-4 rounded-md bg-secondary-800/25 p-4 md:grid-cols-2 bg-[#184E77]">
                            <div>
                                <h3 class="text-sm font-semibold leading-6">Informasi akun</h3>
                                <div class="mt-4 divide-y divide-secondary-700/50 border-t border-secondary-700/50 text-sm font-medium text-text-color print:text-black">
                                    <!-- Account Information -->
                                    @foreach(['Login Via' => 'login_via', 'User ID & Server' => 'Id_Server', 'Email/No. Hp/Moonton ID' => 'email_no_hp_montonID', 'Password' => 'password', 'Request Hero' => 'request_hero', 'Catatan Untuk Penjoki' => 'catatan_penjoki'] as $label => $field)
                                        <div class="grid grid-cols-3 gap-x-4 py-2">
                                            <dt class="col-span-3 text-sm font-medium leading-6 text-text-color print:text-black md:col-span-1">{{ $label }}</dt>
                                            <dd class="col-span-3 text-xs leading-6 text-text-color print:text-black sm:col-span-2 md:text-sm">
                                                <p>{{ $pemesanan->$field }}</p>
                                            </dd>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <div class="pt-4 print:hidden">
                                    <form class="flex flex-col gap-y-3 rounded-lg border border-secondary-700/25 bg-secondary-800/50 p-4">
                                        <div class="font-semibold">Tinggalkan ulasan untuk transaksi ini.</div>
                                        <!-- Star Rating and Review Form -->
                                        <!-- Star Rating -->
                                        <div class="flex items-center">
                                            @for($i = 0; $i < 5; $i++)
                                                <button type="button" class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5 flex-shrink-0">
                                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            @endfor
                                        </div>
                                        <!-- Review Text -->
                                        <div>
                                            <label for="review" class="flex items-center justify-between text-sm font-medium leading-6 text-white">
                                                <div>Tambahkan ulasan Kamu</div>
                                            </label>
                                            <div class="my-2 flex flex-wrap gap-1">
                                                @foreach(['Pelayanan ramah', 'Proses cepat banget', 'Harganya murah', 'Puas banget topup disini', 'Penyelesaian masalah cepat', 'Custom'] as $tag)
                                                    <button type="button" class="inline-flex items-center gap-x-1.5 rounded-full px-3 py-2 text-xs font-medium text-secondary-200 outline-none ring-1 ring-inset ring-secondary-700 bg-secondary-600 hover:bg-secondary-700">{{ $tag }}</button>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button class="inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-text-color-foreground transition-colors duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75" type="submit">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif



            </div>
            <div class="p-4 mt-4 rounded-xl border border-secondary-700/25 bg-secondary-800/25">
                <div class="relative h-auto w-full bg-[#184E77] p-2 rounded-md overflow-x-auto">
                    <ul class="w-auto h-auto p-2 text-white text-lg font-semibold">
                        Detail Hasil Pesanan
                    </ul>
                    <div class="grid grid-cols-4 gap-4 w-full h-auto">
                        @if ($pemesanan->ss_hasilJoki)
                            @php
                                $gambarArray = explode(',', $pemesanan->ss_hasilJoki);
                            @endphp
                            @foreach ($gambarArray as $gambar)
                                <div class="col-span-1">
                                    <img alt="" loading="lazy" decoding="async"
                                        class="h-40 object-cover rounded-md"
                                        src="{{ asset('storage/' . trim($gambar)) }}"
                                        style="height: 100%; width: 100%;">
                                </div>
                            @endforeach
                        @else
                            <div class="col-span-4 text-center">
                                <p class="text-white text-2xl font-bold shadow-lg bg-[#1D3557] p-4 rounded-md">
                                    Pesanan Sedang Di Proses
                                </p>
                                {{-- Gambar "Not Found" hanya akan muncul jika tidak ada gambar hasil joki --}}
                                <img class="mx-auto mt-4 rounded-md hidden" style="max-height: 180px; overflow:hidden"
                                    src="{{ asset('dist/img/not-found.jpg') }}" alt="Not Found">
                            </div>
                        @endif
                    </div>
                </div>

                @if ($pemesanan->status == 'Lunas' || $pemesanan->status == 'Done')
                <div class="prose prose-sm pt-4">
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
                </div>
                @endif

            </div>
        </main>

    </div>
    {{-- FOOTER --}}
    @include('partials.footer')
    {{-- FOOTER --}}

</div>
<script>
    // Mendapatkan referensi ke tombol untuk menyalin teks
    var copyButton = document.getElementById("copyButton");

    // Menambahkan event listener untuk mengklik tombol salin
    copyButton.addEventListener("click", function() {
        // Mendapatkan teks dari tombol
        var textToCopy = copyButton.textContent.trim();

        // Salin teks ke clipboard
        navigator.clipboard.writeText(textToCopy)
            .then(function() {
                // Tampilkan notifikasi bahwa teks telah disalin
                alert("Teks telah disalin ke clipboard!");
            })
            .catch(function(error) {
                console.error('Gagal menyalin teks: ', error);
            });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
        window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result) {
                $.ajax({
                    url: '/api/jokiRankInvoice/updateStatus',
                    type: 'POST',
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
