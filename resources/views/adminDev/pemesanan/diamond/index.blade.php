@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div id="pemesanan_top" class="w-full">
            <div id="pesanan_masuk">
                <h4 id="pesanan-masuk">Pesanan Masuk</h4>
                <span class="line-text"></span>
            </div>
            <div id="pesanan_terkonfirmasi">
                <h4 id="pesanan-terkonfimasi">Pesanan Terkonfirmasi</h4>
                <span class="line-text"></span>
            </div>
        </div>
        <div id="pemesanan_content_masuk">
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable">
                        <thead>
                            <tr>
                                <th>ID Transaksi TopUp</th>
                                <th>ID Game</th>
                                <th>Nama Game</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($dataMasuk as $pesananMasuk)
                                <tr>
                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $pesananMasuk->id }}</strong>
                                    </td>
                                    <td>{{ $pesananMasuk->id_server }}</td>
                                    <td>{{ $pesananMasuk->nama_game }}</td>
                                    <td>{{ $pesananMasuk->harga_keseluruhan }}</td>
                                    <td><span class="badge bg-label-warning me-1">{{ $pesananMasuk->status }}</span></td>
                                    <td class="d-flex gap-2">
                                        <form action="{{ route('pemesanan.diamond.kirim', $pesananMasuk->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-icon btn-outline-success">
                                                <i class='bx bx-check'></i>
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-icon btn-outline-danger">
                                            <i class="bx bx-trash-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon btn-outline-secondary"
                                            data-bs-toggle="modal" data-bs-target="#modalLong{{ $pesananMasuk->id }}">
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

        <div id="pemesanan_content_terkonfirmasi">
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable1">
                        <thead>
                            <tr>
                                <th>ID Transaksi TopUp</th>
                                <th>ID Game</th>
                                <th>Nama Game</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($dataTerkonfirmasi as $pesananMasuk)
                                <tr>
                                    <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $pesananMasuk->id }}</strong>
                                    </td>
                                    <td>{{ $pesananMasuk->id_server }}</td>
                                    <td>{{ $pesananMasuk->nama_game }}</td>
                                    <td>{{ $pesananMasuk->harga_keseluruhan }}</td>
                                    <td><span class="badge bg-label-warning me-1">{{ $pesananMasuk->status }}</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-outline-secondary"
                                            data-bs-toggle="modal" data-bs-target="#modalLong{{ $pesananMasuk->id }}">
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

                $(this).addClass("active");
                $("#pesanan_terkonfirmasi").removeClass("active");

                $("line-text").css("left", initialPosition);
            });

            $("#pesanan_terkonfirmasi").click(function() {
                $("#pemesanan_content_terkonfirmasi").show();
                $("#pemesanan_content_masuk").hide();

                $("line-text").css("left", "650px");

                $(this).addClass("active");
                $("#pesanan_masuk").removeClass("active");
            });
        });
    </script>
    @include('sweetalert::alert')
    @include('adminDev.pemesanan.diamond.modal')
@endsection
