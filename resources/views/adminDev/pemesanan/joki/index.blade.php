@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div id="pemesanan_top" class="w-full">
            <div id="pesanan_masuk">
                <h4 id="pesanan-masuk">Pesanan Masuk</h4>
                {{-- <span class="line-active"></span> --}}
                <span class="line-text"></span>
            </div>
            <div id="pesanan_lunas">
                <h4 id="pesanan-terkonfimasi">Pesanan Lunas</h4>
                <span class="line-text"></span>
            </div>
            <div id="pesanan_progres">
                <h4 id="pesanan-progres">Pesanan Progres</h4>
                <span class="line-text"></span>
            </div>
            <div id="pesanan_done">
                <h4 id="pesanan-done">Pesanan Done</h4>
                <span class="line-text"></span>
            </div>
        </div>
        <div id="pemesanan_content_masuk">
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable">
                        <thead>
                            <tr>
                                <th>ID Transaksi Joki</th>
                                {{-- <th>Nama Customer</th> --}}
                                <th>Nama Paket</th>
                                <th>Joki Rank</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>No Hp</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($jokiMasuk as $pesananMasuk)
                                <tr>
                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $pesananMasuk->id }}</strong>
                                    </td>
                                    {{-- <td>{{ $pesananMasuk->nama_lengkap }}</td> --}}
                                    <td>{{ $pesananMasuk->nama_paket }}</td>
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
                                        </form>
                                        <button type="button" class="btn btn-icon btn-outline-danger">
                                            <i class="bx bx-trash-alt"></i>
                                        </button> --}}
                                        <button type="button" class="btn btn-icon btn-outline-secondary"
                                            data-bs-toggle="modal" data-bs-target="#modalLong">
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

        <div id="pemesanan_content_lunas">
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
                            @foreach ($jokiTerkonfirmasi as $pesananTerkonfirmasi)
                                <tr>
                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $pesananTerkonfirmasi->id }}</strong>
                                    </td>
                                    <td>{{ $pesananTerkonfirmasi->nama_paket }}</td>
                                    <td>{{ $pesananTerkonfirmasi->joki_rank }}</td>
                                    <td>{{ $pesananTerkonfirmasi->harga_joki }}</td>
                                    <td><span class="badge bg-label-warning me-1">{{ $pesananTerkonfirmasi->status }}</span></td>
                                    <td>{{ $pesananTerkonfirmasi->no_hp }}</td>
                                    <td class="d-flex gap-2">
                                        <button type="button" class="btn btn-icon btn-outline-secondary"
                                            data-bs-toggle="modal" data-bs-target="#modalLong{{ $pesananTerkonfirmasi->id }}">
                                            <i class="bx bx-info-circle"></i>
                                        </button>
                                        <a href="https://wa.me/{{ $pesananTerkonfirmasi->no_hp }}" class="btn btn-icon btn-outline-success">
                                            <i class="bx bxl-whatsapp"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="pemesanan_content_progres">
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
                            @foreach ($jokiProgress as $pesananProgress)
                                <tr>
                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $pesananProgress->id }}</strong>
                                    </td>
                                    <td>{{ $pesananProgress->nama_paket }}</td>
                                    <td>{{ $pesananProgress->joki_rank }}</td>
                                    <td>{{ $pesananProgress->harga_joki }}</td>
                                    <td><span class="badge bg-label-warning me-1">{{ $pesananProgress->status }}</span></td>
                                    <td>{{ $pesananProgress->no_hp }}</td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-outline-secondary"
                                            data-bs-toggle="modal" data-bs-target="#modalLong{{ $pesananProgress->id }}">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#pemesanan_content_lunas").hide();
            $("#pemesanan_content_progres").hide();
            $("#pemesanan_content_done").hide();
            $("#pesanan_masuk").addClass("active");

            var initialPosition = $(".line-text").position().left;

            $("#pesanan_masuk").click(function() {
                $("#pemesanan_content_masuk").show();
                $("#pemesanan_content_lunas").hide();
                $("#pemesanan_content_progres").hide();
                $("#pemesanan_content_done").hide();

                $(this).addClass("active");
                $("#pesanan_lunas").removeClass("active");
                $("#pesanan_progres").removeClass("active");
                $("#pesanan_done").removeClass("active");

                $(".line-text").css("left", initialPosition);
            });

            $("#pesanan_lunas").click(function() {
                $("#pemesanan_content_lunas").show();
                $("#pemesanan_content_masuk").hide();
                $("#pemesanan_content_progres").hide();
                $("#pemesanan_content_done").hide();

                $(this).addClass("active");
                $("#pesanan_masuk").removeClass("active");
                $("#pesanan_progres").removeClass("active");
                $("#pesanan_done").removeClass("active");

                $(".line-text").css("left", "500px");
            });

            $("#pesanan_progres").click(function() {
                $("#pemesanan_content_progres").show();
                $("#pemesanan_content_masuk").hide();
                $("#pemesanan_content_lunas").hide();
                $("#pemesanan_content_done").hide();

                $(this).addClass("active");
                $("#pesanan_masuk").removeClass("active");
                $("#pesanan_lunas").removeClass("active");
                $("#pesanan_done").removeClass("active");

                $(".line-text").css("left", "500px");
            });

            $("#pesanan_done").click(function() {
                $("#pemesanan_content_done").show();
                $("#pemesanan_content_masuk").hide();
                $("#pemesanan_content_lunas").hide();
                $("#pemesanan_content_progres").hide();

                $(this).addClass("active");
                $("#pesanan_masuk").removeClass("active");
                $("#pesanan_lunas").removeClass("active");
                $("#pesanan_progres").removeClass("active");

                $(".line-text").css("left", "500px");
            });
        });
    </script>
    @include('sweetalert::alert')
    @include('adminDev.pemesanan.joki.modal')
@endsection
