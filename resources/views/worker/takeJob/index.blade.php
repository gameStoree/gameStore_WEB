@extends('worker.layout')

@section('conten')
    <div class="content-wrapper">
        <div id="pemesanan_top" class="w-full">
            <div id="pesanan_masuk">
                <h4 id="pesanan-masuk">Pesanan Joki</h4>
                <span class="line-text"></span>
            </div>
            <div id="pesanan_terkonfirmasi">
                <h4 id="pesanan-terkonfimasi">Pesanan Take Job</h4>
                <span class="line-text"></span>
            </div>
            <div id="pesanan_done">
                <h4 id="pesanan-done">Pesanan Done</h4>
                <span class="line-text"></span>
            </div>
            <div id="pesanan_akunBermasalah">
                <h4 id="pesanan-akunBermasalah">Akun Bermasalah</h4>
                <span class="line-text"></span>
            </div>
        </div>
        {{-- PESANAN JOKI LUNAS --}}
        <div id="pemesanan_content_masuk">
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable">
                        <thead>
                            <tr>
                                <th>ID Transaksi Joki</th>
                                <th>Nama Paket</th>
                                <th>Joki Rank</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>No Hp</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($jokiTerkonfirmasi as $pesananMasuk)
                                <tr>
                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $pesananMasuk->id }}</strong>
                                    </td>
                                    <td>{{ $pesananMasuk->joki_rank }}</td>
                                    <td>{{ $pesananMasuk->joki_rank }}</td>
                                    <td>{{ $pesananMasuk->harga_joki }}</td>
                                    <td><span class="badge bg-label-warning me-1">{{ $pesananMasuk->status }}</span></td>
                                    <td>{{ $pesananMasuk->no_hp }}</td>
                                    <td class="d-flex gap-2">
                                        {{-- <form action="{{ route('pemesanan.diamond.kirim', $pesananMasuk->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-icon btn-outline-success">
                                                <i class='bx bx-check'></i>
                                            </button>
                                        </form> --}}
                                        <button type="button" class="btn btn-icon btn-outline-secondary"
                                            data-bs-toggle="modal" data-bs-target="#modalLong">
                                            <i class="bx bx-info-circle"></i>
                                        </button>
                                        <form action="{{ route('takeJob.update', $pesananMasuk->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-icon btn-outline-success">
                                                <i class="bx bxs-hand-up"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- PESANAN JOKI PROGRES --}}
        <div id="pemesanan_content_terkonfirmasi">
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable1">
                        <thead>
                            <tr>
                                <th>ID Transaksi Joki</th>
                                <th>Nama Paket</th>
                                <th>Joki Rank</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>No Hp</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($jokiProgress as $pesananProgress)
                                <tr>
                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $pesananProgress->id }}</strong>
                                    </td>
                                    <td>{{ $pesananProgress->joki_rank }}</td>
                                    <td>{{ $pesananProgress->joki_rank }}</td>
                                    <td>{{ $pesananProgress->harga_joki }}</td>
                                    <td><span class="badge bg-label-warning me-1">{{ $pesananProgress->status }}</span>
                                    </td>
                                    <td>{{ $pesananProgress->no_hp }}</td>
                                    <td class="d-flex gap-2">
                                        <button type="button" class="btn btn-icon btn-outline-secondary"
                                            data-bs-toggle="modal" data-bs-target="#modalLong{{ $pesananProgress->id }}">
                                            <i class="bx bx-info-circle"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-outline-danger"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalLaporan{{ $pesananProgress->id }}">
                                            <i class="bx bx-flag"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-outline-success"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalJokiDone{{ $pesananProgress->id }}">
                                            <i class="bx bx-check"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- PESANAN JOKI Done --}}
        <div id="pemesanan_content_done">
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable3">
                        <thead>
                            <tr>
                                <th>ID Transaksi Joki</th>
                                <th>Nama Paket</th>
                                <th>Joki Rank</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>No Hp</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($jokiDone as $pesananDone)
                            <tr>
                                <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                    <strong>{{ $pesananDone->id }}</strong>
                                </td>
                                <td>{{ $pesananDone->nama_paket }}</td>
                                <td>{{ $pesananDone->joki_rank }}</td>
                                <td>{{ $pesananDone->harga_joki }}</td>
                                <td><span class="badge bg-label-warning me-1">{{ $pesananDone->status }}</span></td>
                                <td>{{ $pesananDone->no_hp }}</td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-outline-secondary"
                                        data-bs-toggle="modal" data-bs-target="#modalLong{{ $pesananDone->id }}">
                                        <i class="bx bx-info-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- AKUN JOKI BERMASALAH --}}
        <div id="pemesanan_content_akunBermasalah">
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable2">
                        <thead>
                            <tr>
                                <th>ID Transaksi Joki</th>
                                <th>Nama Paket</th>
                                <th>Joki Rank</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>No Hp</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($jokiAkunBermasalah as $pesananBermasalah)
                            <tr>
                                <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                    <strong>{{ $pesananBermasalah->id }}</strong>
                                </td>
                                <td>{{ $pesananBermasalah->nama_paket }}</td>
                                <td>{{ $pesananBermasalah->joki_rank }}</td>
                                <td>{{ $pesananBermasalah->harga_joki }}</td>
                                <td><span class="badge bg-label-warning me-1">{{ $pesananBermasalah->status }}</span></td>
                                <td>{{ $pesananBermasalah->no_hp }}</td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-outline-secondary"
                                        data-bs-toggle="modal" data-bs-target="#modalLong{{ $pesananBermasalah->id }}">
                                        <i class="bx bx-info-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#pemesanan_content_terkonfirmasi").hide();
            $("#pesanan_masuk").addClass("active");

            var initialPosition = $(".line-text").position().left;

            $("#pesanan_masuk").click(function() {
                $("#pemesanan_content_masuk").show();
                $("#pemesanan_content_terkonfirmasi").hide();
                $("#pemesanan_content_done").hide();
                $("#pemesanan_content_akunBermasalah").hide();

                $(this).addClass("active");
                $("#pesanan_terkonfirmasi").removeClass("active");
                $("#pesanan_done").removeClass("active");
                $("#pesanan_akunBermasalah").removeClass("active");

                $("line-text").css("left", initialPosition);
            });

            $("#pesanan_terkonfirmasi").click(function() {
                $("#pemesanan_content_terkonfirmasi").show();
                $("#pemesanan_content_masuk").hide();
                $("#pemesanan_content_done").hide();
                $("#pemesanan_content_akunBermasalah").hide();

                $("line-text").css("left", "650px");

                $(this).addClass("active");
                $("#pesanan_masuk").removeClass("active");
                $("#pesanan_done").removeClass("active");
                $("#pesanan_akunBermasalah").removeClass("active");
            });
            $("#pesanan_done").click(function() {
                $("#pemesanan_content_done").show();
                $("#pemesanan_content_masuk").hide();
                $("#pemesanan_content_terkonfirmasi").hide();
                $("#pemesanan_content_akunBermasalah").hide();

                $("line-text").css("left", "650px");

                $(this).addClass("active");
                $("#pesanan_masuk").removeClass("active");
                $("#pesanan_terkonfirmasi").removeClass("active");
                $("#pesanan_akunBermasalah").removeClass("active");
            });
            $("#pesanan_akunBermasalah").click(function() {
                $("#pemesanan_content_akunBermasalah").show();
                $("#pemesanan_content_masuk").hide();
                $("#pemesanan_content_terkonfirmasi").hide();
                $("#pemesanan_content_done").hide();

                $("line-text").css("left", "650px");

                $(this).addClass("active");
                $("#pesanan_masuk").removeClass("active");
                $("#pesanan_terkonfirmasi").removeClass("active");
                $("#pesanan_done").removeClass("active");
            });
        });
    </script>
    @include('sweetalert::alert')
    @include('worker.takeJob.modal')
@endsection
