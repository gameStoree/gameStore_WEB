
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
    <div class="grid grid-cols-1 gap-8 lg:gap-8 xl:grid-cols-2">
        <div class="rounded-lg border bg-card/50 p-6">
            <figure class="flex items-center justify-between">
                <figcaption class="flex items-center justify-start space-x-3.5 text-left"><img
                        src="https://ui-avatars.com/api/?color=FFFFFF&amp;background=f97316&amp;name=Hanif Febriansyah"
                        alt="" class="h-14 w-14 rounded-full" loading="lazy" decoding="async">
                    <div>
                        <div class="flex items-center gap-x-2 pb-1 font-semibold text-foreground"><span>Hanif
                                Febriansyah</span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                class="h-5 w-5 hidden">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z">
                                </path>
                            </svg></div><span
                            class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium capitalize ring-1 ring-inset bg-info/10 text-info ring-info/30">member</span>
                    </div>
                </figcaption><a class="bg-murky-600 flex items-center justify-center rounded-md p-2" href="/id/settings"
                    style="outline: none;"></a>
            </figure>
            <div class="border-murky-600 mt-6 flex items-center space-x-2 border-t pt-6"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                    </path>
                </svg><span>+6285772870612</span></div>
        </div>

        <div class="col-span-1 lg:col-span-2">
            <h1 class="pb-4 text-lg font-semibold">Transaksi Hari Ini</h1>
            <div class="grid grid-cols-2 gap-4 xl:gap-8">
                <div
                    class="flex flex-col items-center justify-center rounded-lg border bg-card p-6 col-span-2 duration-200 ease-in-out hover:bg-card/75 xl:col-span-1">
                    <div class="flex items-center justify-center text-4xl font-semibold">0</div>
                    <div class="pt-4 text-sm font-medium">Total Transaksi</div>
                </div>
                <div
                    class="flex flex-col items-center justify-center rounded-lg border bg-card p-6 col-span-2 duration-200 ease-in-out hover:bg-card/75 xl:col-span-1">
                    <div class="flex items-center justify-center text-4xl font-semibold"> 0</div>
                    <div class="pt-4 text-sm font-medium">Total Penjualan</div>
                </div>
            </div>
            <div class="mt-4 grid grid-cols-2 gap-4 xl:mt-8 xl:grid-cols-4 xl:gap-8">
                <div
                    class="flex flex-col items-center justify-center rounded-lg border p-6 border-warning bg-warning/50 duration-200 ease-in-out hover:bg-warning/75">
                    <div class="flex items-center justify-center text-4xl font-semibold">0</div>
                    <div class="pt-4 text-sm font-medium">Menunggu</div>
                </div>
                <div
                    class="flex flex-col items-center justify-center rounded-lg border p-6 border-info bg-info/50 duration-200 ease-in-out hover:bg-info/75">
                    <div class="flex items-center justify-center text-4xl font-semibold">0</div>
                    <div class="pt-4 text-sm font-medium">Dalam Proses</div>
                </div>
                <div
                    class="flex flex-col items-center justify-center rounded-lg border p-6 border-success bg-success/50 duration-200 ease-in-out hover:bg-success/75">
                    <div class="flex items-center justify-center text-4xl font-semibold">0</div>
                    <div class="pt-4 text-sm font-medium">Sukses</div>
                </div>
                <div
                    class="flex flex-col items-center justify-center rounded-lg border p-6 border-destructive bg-destructive/50 duration-200 ease-in-out hover:bg-destructive/75">
                    <div class="flex items-center justify-center text-4xl font-semibold">0</div>
                    <div class="pt-4 text-sm font-medium">Gagal</div>
                </div>
            </div>
        </div>
        <div class="col-span-1 lg:col-span-2">
            <h1 class="pb-4 text-lg font-semibold">Riwayat Transaksi Terbaru Hari Ini</h1>
            <div class="space-y-4">
                <div class="-mx-4 overflow-x-auto ring-1 ring-muted sm:mx-0 sm:rounded-lg">
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
            </div>
        </div>
    </div>
</div>
