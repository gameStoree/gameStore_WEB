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
                            <div class="text-xs">Status</div>
                            <select
                                class="relative block w-full appearance-none rounded-lg border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-muted-foreground focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-[#184E77] disabled:cursor-not-allowed disabled:opacity-75">
                                <option value="">Semua</option>
                                <option value="1">Belum Bayar</option>
                                <option value="2">Lunas</option>
                                <option value="3">Progress</option>
                                <option value="4">Done</option>
                                <option value="5">Akun Bermasalah</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-2">
                            <div class="text-xs">Tanggal Mulai</div>
                            <div class="flex flex-col items-start">
                                <input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-muted-foreground focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-[#184E77] disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="date" placeholder="Tanggal Mulai" value="<?= date('Y-m-d') ?>">
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="text-xs">Tanggal Akhir</div>
                            <div class="flex flex-col items-start">
                                <input
                                    class="relative block w-full appearance-none rounded-lg border border-border bg-[#184E77] px-3 py-2 text-xs text-foreground placeholder-muted-foreground focus:z-10 focus:border-primary focus:outline-none focus:ring-1 focus:ring-[#184E77] disabled:cursor-not-allowed disabled:opacity-75 !rounded-md"
                                    type="date" placeholder="Tanggal Akhir" value="<?= date('Y-m-d') ?>">
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <button type="button"
                                class="hover:bg-murky-700 mt-6 border-white relative inline-flex items-center rounded-md bg-green-600 px-4 py-2 text-sm
                                font-semibold text-foreground ring-1 ring-inset ring-transparent focus-visible:outline-offset-0
                                disabled:cursor-not-allowed disabled:opacity-75 w-14">
                                Cari
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="-mx-4 overflow-x-auto ring-1 ring-white sm:mx-0 sm:rounded-lg">
                <table class="min-w-full divide-y divide-muted">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground">
                                <div class="cursor-pointer select-none flex items-center justify-between">
                                    Nomor Invoice
                                </div>
                            </th>

                            <th scope="col"
                                class="whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground">
                                <div class="">Item</div>
                            </th>
                            <th scope="col"
                                class="whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground">
                                <div class="">Qty</div>
                            </th>

                            <th scope="col"
                                class="whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground">
                                <div class="">Total</div>
                            </th>
                            <th scope="col"
                                class="whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground">
                                <div class="cursor-pointer select-none flex items-center justify-between">
                                    Tanggal
                                </div>
                            </th>
                            <th scope="col"
                                class="whitespace-nowrap px-3 py-3.5 text-left text-xs font-semibold text-foreground">
                                <div class="">Status</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($diamondTransactions as $diamond)
                            <tr class="bg-transparent">
                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">{{ $diamond->id }}
                                </td>

                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">Diamond</td>
                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">n/a</td>

                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">
                                    {{ $diamond->harga_keseluruhan }}</td>
                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">
                                    {{ $diamond->created_at }}</td>
                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">{{ $diamond->status }}
                                </td>
                            </tr>
                        @empty
                        @endforelse

                        @forelse($jokiTransactions as $joki)
                            <tr class="bg-transparent">
                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground"></a>{{ $joki->id }}
                                </td>

                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">Jasa Mobile Legends</td>
                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">{{ $joki->jumlah_bintang}}
                                </td>
                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">
                                    {{ $joki->harga_keseluruhan }}</td>
                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">
                                    {{ $joki->created_at }}</td>
                                <td class="whitespace-nowrap px-3 py-3.5 text-sm text-foreground">{{ $joki->status }}
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>


            </div>

        </div>
    </div>
</div>
