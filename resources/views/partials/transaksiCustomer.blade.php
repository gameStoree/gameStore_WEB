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
<div class="col-span-8 sm:col-span-7 sm:col-start-2 md:col-span-7 md:col-start-3">
    <div>
        <div class="pb-8 sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-foreground">Riwayat Transaksi</h1>
                <p class="text-murky-200 mt-2 text-sm">Menampilkan data riwayat transaksi yang telah Anda lakukan selama
                    periode yang dipilih.</p>
            </div>
        </div>
        <div class="space-y-4">
            <div class="grid gap-4">
                <div class="border-murky-600 flex flex-col gap-2 rounded-xl border p-4 md:p-6">
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                        <div class="flex flex-col gap-2">
                            <div class="text-xs">Status</div><select
                                class="relative block w-full appearance-none rounded-lg border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-muted-foreground focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-[#184E77] disabled:cursor-not-allowed disabled:opacity-75">
                                <option value="">Semua</option>
                                <option value="1">Menunggu</option>
                                <option value="2">Sedang Diproses</option>
                                <option value="3">Selesai</option>
                                <option value="4">Dibatalkan</option>
                                <option value="5">Gagal</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="text-xs">Status Pembayaran</div><select
                                class="relative block w-full appearance-none rounded-lg border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-muted-foreground focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-[#184E77] disabled:cursor-not-allowed disabled:opacity-75">
                                <option value="">Semua</option>
                                <option value="2">Dibayar</option>
                                <option value="6">Dikembalikan</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="text-xs">Tanggal Mulai</div>
                            <div class="flex flex-col items-start"><input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-muted-foreground focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-[#184E77] disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="date" placeholder="Tanggal Mulai" value="2024-06-06"></div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="text-xs">Tanggal Akhir</div>
                            <div class="flex flex-col items-start"><input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-muted-foreground focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-[#184E77] disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="date" placeholder="Tanggal Akhir" value="2024-06-06"></div>
                        </div>
                        <div class="col-span-2 flex flex-col gap-2">
                            <div class="text-xs">Cari</div>
                            <div class="flex flex-col items-start"><input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-muted-foreground focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-[#184E77] disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="text" placeholder="#trxid $price @inputs" value=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-4"><button type="button" disabled=""
                    class="hover:bg-murky-700 inline-flex w-full items-center justify-center rounded-md border bg-[#184E77] px-4 py-2 text-xs disabled:cursor-not-allowed disabled:opacity-75 md:w-auto">Download
                    CSV</button><button type="button" disabled=""
                    class="hover:bg-murky-700 inline-flex w-full items-center justify-center rounded-md border bg-[#184E77] px-4 py-2 text-xs disabled:cursor-not-allowed disabled:opacity-75 md:w-auto">Download
                    XLSX</button><select
                    class="hover:bg-murky-700 inline-flex w-full cursor-pointer items-center justify-center rounded-md border bg-[#184E77] py-2 text-xs ring-inset focus:ring-2 focus:ring-[#184E77] md:w-auto">
                    <option value="5">5 Entries</option>
                    <option value="10">10 Entries</option>
                    <option value="25">25 Entries</option>
                    <option value="50">50 Entries</option>
                    <option value="100">100 Entries</option>
                </select></div>
            <div class="-mx-4 overflow-x-auto ring-1 ring-white sm:mx-0 sm:rounded-lg">
                <table class="min-w-full divide-y divide-muted">
                    <thead>
                        <tr>
                            <th scope="col" colspan="1"
                                class="table-cell whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell">
                                <div
                                    class="cursor-pointer select-none flex whitespace-nowrap items-center justify-between">
                                    Nomor Invoice</div>
                            </th>
                            <th scope="col" colspan="1"
                                class="table-cell whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell">
                                <div class="">ID Trx</div>
                            </th>
                            <th scope="col" colspan="1"
                                class="table-cell whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell">
                                <div class="">Item</div>
                            </th>
                            <th scope="col" colspan="1"
                                class="table-cell whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell">
                                <div class="">User Input</div>
                            </th>
                            <th scope="col" colspan="1"
                                class="table-cell whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell">
                                <div
                                    class="cursor-pointer select-none flex whitespace-nowrap items-center justify-between">
                                    Harga</div>
                            </th>
                            <th scope="col" colspan="1"
                                class="table-cell whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell">
                                <div
                                    class="cursor-pointer select-none flex whitespace-nowrap items-center justify-between">
                                    Tanggal</div>
                            </th>
                            <th scope="col" colspan="1"
                                class="table-cell whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground first:table-cell first:pl-4 sm:first:pl-6 first:pr-4 last:relative last:table-cell sm:last:pr-6 [&amp;:nth-last-child(2)]:table-cell">
                                <div class="">Status</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" class="px-4 py-24 text-center sm:px-6"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="mx-auto h-12 w-12 text-foreground">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z">
                                    </path>
                                </svg>
                                <h3 class="mt-2 font-semibold text-foreground">Data tidak ditemukan!</h3>
                                <p class="mt-1 text-sm text-secondary-foreground">Tidak ada aktifitasi data.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav class="flex items-center justify-between" aria-label="Pagination">
                <div class="hidden sm:block">
                    <p class="text-sm text-foreground">Menampilkan <span class="font-medium">0</span> sampai <span
                            class="font-medium">0</span> dari <span class="font-medium">0</span> hasil</p>
                </div>
                <div class="flex flex-1 justify-between sm:justify-end"><button type="button" disabled=""
                        class="hover:bg-murky-700 relative inline-flex items-center  rounded-md bg-[#184E77] px-4 py-2 text-sm font-semibold text-foreground ring-1 ring-inset ring-transparent focus-visible:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75">Sebelumnya</button>
                    <div class="flex items-center justify-center space-x-2"></div><button type="button"
                        disabled=""
                        class="hover:bg-murky-700 relative ml-3 inline-flex items-center  rounded-md bg-[#184E77] px-4 py-2 text-sm font-semibold text-foreground ring-1 ring-inset ring-transparent focus-visible:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75">Selanjutnya</button>
                </div>
            </nav>
        </div>
    </div>
</div>
