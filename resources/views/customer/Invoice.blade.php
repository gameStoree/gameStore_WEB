{{-- NAVBARNYA --}}
@include('partials.navbar')

<body class=" w-full h-auto">
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
            <form action="{{ route('invoice') }}" method="GET"
                class="container w-[70%] text-white mt-16 m-auto relative z-20 py-12 text-left">
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
                            @foreach ($invoices as $invoice)
                                <tr>
                                    <td
                                        class="table-cell px-3 py-3.5 text-left text-xs font-medium text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                        <div class="whitespace-nowrap">{{ $invoice->created_at->format('d-m-Y H:i:s') }}
                                        </div>
                                    </td>
                                    <td
                                        class="table-cell px-3 py-3.5 text-left text-xs font-medium text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                        <div class="whitespace-nowrap">
                                            @if ($isSearched)
                                                @if ($transactionType === 'diamond')
                                                    <a href="{{ route('pesanDiamondInvoice.index', $invoice->id) }}"
                                                        class="text-white-500 hover:underline"><u>{{ $invoice->id }}</u></a>
                                                @elseif ($transactionType === 'joki')
                                                    <a href="{{ route('pesanJokiInvoice.index', $invoice->id) }}"
                                                        class="text-white-500 hover:underline"><u>{{ $invoice->id }}</u></a>
                                                @endif
                                            @else
                                                {{ $maskId($invoice->id) }}
                                                <!-- Tampilkan ID masked jika bukan hasil pencarian -->
                                            @endif
                                        </div>
                                    </td>
                                    <td
                                        class="table-cell px-3 py-3.5 text-left text-xs font-medium text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                        <div class="whitespace-nowrap">
                                            @if ($isSearched)
                                                {{ $invoice->no_hp }}
                                                <!-- Tampilkan nomor HP asli jika hasil pencarian -->
                                            @else
                                                {{ $maskNoHP($invoice->no_hp) }}
                                                <!-- Tampilkan nomor HP masked jika bukan hasil pencarian -->
                                            @endif
                                        </div>
                                    </td>
                                    <td
                                        class="table-cell px-3 py-3.5 text-left text-xs font-medium text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                        <div class="whitespace-nowrap">Rp
                                            {{ number_format($invoice->harga_keseluruhan, 0, ',', '.') }}</div>
                                    </td>
                                    <td
                                        class="table-cell px-3 py-3.5 text-left text-xs font-medium text-text-color first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell !text-text-color">
                                        <div class="whitespace-nowrap">
                                            <span
                                                class="inline-flex rounded-sm px-2 text-xs font-semibold leading-5 print:p-0
                    @if ($invoice->status == 'Pending') bg-yellow-300 text-yellow-800
                    @elseif($invoice->status == 'Selesai') bg-green-300 text-green-800
                    @else bg-gray-300 text-gray-800 @endif">
                                                {{ $invoice->status }}
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- FOOTER --}}
        @include('partials.footer')
        {{-- FOOTER --}}


    </div>
</body>

</html>
