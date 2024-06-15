@extends('adminDev.layout')

@section('conten')
    <div class="row">
        <div class="col-lg-4 col-md-12 col-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('admin') }}/img/icons/unicons/chart-success.png" alt="chart success"
                                class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Total Pendapatan</span>
                    <h3 class="card-title mb-2">Rp. {{ number_format($totalPendapatan, 0, ',', '.') }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('admin') }}/img/icons/unicons/chart-success.png" alt="chart success"
                                class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Jumlah Worker</span>
                    <h3 class="card-title mb-2">{{ $jumlahWorker }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('admin') }}/img/icons/unicons/chart-success.png" alt="chart success"
                                class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Jumlah Customer</span>
                    <h3 class="card-title mb-2">{{ $jumlahCustomer }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- <div class="col-md-6 col-lg-8 order-1 mb-4">
            <div class="card h-100">
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('admin') }}/img/icons/unicons/wallet.png" alt="User" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Total Pendapatan</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">Rp. 1.000.000</h6>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart">
                            </div>
                            <div class="d-flex justify-content-center pt-4 gap-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-4 col-md-12 col-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('admin') }}/img/icons/unicons/chart-success.png" alt="chart success"
                                class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Jumlah Jokian Progress</span>
                    <h3 class="card-title mb-2">{{ $jumlahJokiProgress }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('admin') }}/img/icons/unicons/chart-success.png" alt="chart success"
                                class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Jumlah Jokian Done</span>
                    <h3 class="card-title mb-2">{{ $jumlahJokiDone }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">History Transaksi</h5>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        @foreach ($transaksi as $transakasi)
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('admin') }}/img/avatars/5.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">{{ $transakasi->item }}</small>
                                    <h6 class="mb-0">{{ $transakasi->jenis_item }}</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">Rp. {{ number_format($transakasi->harga, 0, ',', '.') }}</h6>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush


@push('style')

@endpush
