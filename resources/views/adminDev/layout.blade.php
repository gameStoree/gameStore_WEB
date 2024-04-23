<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Game Store</title>

    <meta name="description" content="" />

    <!-- LOGO -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('admin') }}/img/favicon/LOGOID.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="{{ asset('admin') }}/fonts.googleapis.com" />
    <link rel="preconnect" href="{{ asset('admin') }}/fonts.gstatic.com" crossorigin />
    <link
        href="{{ asset('admin') }}/fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/css/demo.css" />
    <link rel="stylesheet" href="{{ asset('css') }}/pemesananDiamond.css" />
    <link rel="stylesheet" href="{{ asset('css') }}/pemesananJoki.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('admin') }}/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin') }}/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <img src="{{ asset('admin') }}/img/favicon/LOGOID.png" class="center" style="height: 50px;"
                            alt="Logo">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Game Store</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item {{ Request::is('adminDev') ? 'active' : '' }}">
                        <a href="{{ route('dashboard.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Kategori game -->
                    <li class="menu-item {{ Request::is('adminDev/kategoriGame') ? 'active' : '' }}">
                        <a href="{{ route('kategoriGame.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-category-alt"></i>
                            <div data-i18n="Analytics">Kategori Game</div>
                        </a>
                    </li>

                    <!-- Game -->
                    <li
                        class="menu-item {{ Request::is('adminDev/diamondGame') || Request::is('adminDev/jokiML') ? 'active open' : '' }}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-game"></i>
                            <div data-i18n="Layouts">Game</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{ Request::is('adminDev/diamondGame') ? 'active' : '' }}">
                                <a href="{{ route('diamondGame.index') }}" class="menu-link">
                                    <div data-i18n="Without menu">Diamond Game</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::is('adminDev/jokiML') ? 'active' : '' }}">
                                <a href="{{ route('jokiML.index') }}" class="menu-link">
                                    <div data-i18n="Without navbar">Joki ML</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Pemesanan -->
                    <li
                        class="menu-item {{ Request::is('adminDev/pemesanan/diamond') || Request::is('adminDev/pemesanan/joki') ? 'active open' : '' }}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Pemesanan</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{ Request::is('adminDev/pemesanan/diamond') ? 'active' : '' }}">
                                <a href="{{ route('pemesananDiamond.index') }}" class="menu-link">
                                    <div data-i18n="Without menu">Diamond Game</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::is('adminDev/pemesanan/joki') ? 'active' : '' }}">
                                <a href="{{ route('pemesananJoki.index') }}" class="menu-link">
                                    <div data-i18n="Without navbar">Joki ML</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Worker -->
                    <li class="menu-item {{ Request::is('adminDev/worker') ? 'active' : '' }}">
                        <a href="{{ route('worker.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Analytics">Worker</div>
                        </a>
                    </li>

                    <!-- Laporan-->
                    <li class="menu-item {{ Request::is('adminDev/laporan') ? 'active' : '' }}">
                        <a href="{{ route('laporan.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-report"></i>
                            <div data-i18n="Analytics">Laporan</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Judul -->
                        <div class="navbar-nav align-items-center">
                            {{ $judul }}
                        </div>
                        <!-- /Judul -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset("storage") }}/{{ Auth::user()->foto_user }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('admin') }}/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::user()->nama_lengkap }}</span>
                                                    <small class="text-muted">{{ Auth::user()->role }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.index') }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            @yield('conten')
                        </div>
                    </div>
                </div>
                <!-- / Content -->
                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('admin') }}/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('admin') }}/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('admin') }}/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('admin') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('admin') }}/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('admin') }}/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('admin') }}/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin') }}/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
    </script>
    <script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js">
    </script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script>
        new DataTable('#myTable', {
            info: false,
        });
        new DataTable('#myTable1', {
            info: false,
        });
        new DataTable('#myTable2', {
            info: false,
        });
        new DataTable('#myTable3', {
            info: false,
        });
    </script>


</body>

</html>
