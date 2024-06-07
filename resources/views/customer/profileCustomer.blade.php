@include('partials.navbar')

<main class="relative bg-gradient-to-br from-[#34A0A4] to-[#184E77]">
    <div class="container mt-10 text-white m-auto w-[70%] grid grid-cols-8 gap-8 pt-8 sm:pt-16">
        <div class="col-span-1 hidden sm:block md:col-span-2">
            <aside class="sticky top-20 print:hidden">
                <nav class="h-full content-start lg:grid lg:content-between">
                    <div class="space-y-4">
                        <a id="profile1"
                            class="menu-item group flex items-center gap-3 rounded-md bg-[#184E77] px-3 py-2 text-sm font-medium text-foreground hover:from-muted/50"
                            style="outline:none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                </path>
                            </svg>
                            <span class="hidden truncate md:block">Dashboard</span>
                        </a>
                        <a id="profile2"
                            class="menu-item group flex items-center gap-3 rounded-md bg-[#184E77] px-3 py-2 text-sm font-medium text-foreground hover:from-muted/50"
                            style="outline:none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="hidden truncate md:block">Transaksi</span>
                        </a>
                        <a id="profile3"
                            class="menu-item group flex items-center gap-3 rounded-md bg-[#184E77] px-3 py-2 text-sm font-medium text-foreground hover:from-muted/50"
                            style="outline:none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="hidden truncate md:block">Pengaturan</span>
                        </a>
                    </div>
                    <div class="w-full pt-4">
                        <a href="/logout" class="menu-item flex w-full items-center gap-3 rounded-md bg-[#184E77] px-3 py-2 text-sm font-medium text-destructive hover:from-muted/50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"></path>
                            </svg>
                            <span class="hidden md:block">Keluar</span>
                        </a>

                    </div>
                </nav>
            </aside>
        </div>
        <div class="col-span-8 sm:col-span-7 sm:col-start-2 md:col-span-7 md:col-start-3">
            {{-- ISI --}}
            <div id="dashboard-content">
                @include('partials.dashboardCustomer')
            </div>
            <div id="transaksi-content" style="display: none;">
                @include('partials.riwayatTransaksi')
            </div>
            <div id="pengaturan-content" style="display: none;">
                @include('partials.pengaturanCustomer')
            </div>
        </div>
    </div>
    @include('partials.footer')
</main>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Sembunyikan semua konten saat halaman dimuat kecuali yang pertama
        $("#dashboard-content").show();
        $("#transaksi-content").hide();
        $("#pengaturan-content").hide();
        $("#profile1").addClass("active-menu");

        function switchContent(contentId, menuItem) {
            $("#dashboard-content, #transaksi-content, #pengaturan-content").hide();
            $(contentId).show();
            $(".menu-item").removeClass("active-menu");
            $(menuItem).addClass("active-menu");
        }

        $("#profile1").click(function() {
            switchContent("#dashboard-content", this);
        });

        $("#profile2").click(function() {
            switchContent("#transaksi-content", this);
        });

        $("#profile3").click(function() {
            switchContent("#pengaturan-content", this);
        });
    });
</script>

<style>
    /* Tampilan menu saat aktif */
    .active-menu {
        background-color: #007497;
        /* Warna latar belakang saat aktif */
        color: #FFFFFF;
        /* Warna teks putih */
    }

    /* Tampilan menu saat di-hover */
    .menu-item:hover {
        background-color: #005f6b;
        /* Warna latar belakang saat di-hover */
        cursor: pointer;
    }

    /* Tampilan menu saat tidak aktif */
    .menu-item {
        color: #FFFFFF;
        /* Warna teks putih */
        cursor: pointer;
    }
</style>
