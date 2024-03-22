@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div id="pemesanan_top" class="w-full">
            <div id="pesanan_masuk">
                <h4 id="pesanan-masuk">Pesanan Masuk</h4>
                <span class="line-active"></span>
            </div>
            <div id="pesanan_terkonfirmasi">
                <h4 id="pesanan-terkonfimasi">Pesanan Terkonfirmasi</h4>
                <!-- <span class="line-active"></span> -->
            </div>
        </div>
        <div id="pemesanan_content_masuk">
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID Transaksi TopUp</th>
                                <th>ID Game</th>
                                <th>No Hp</th>
                                <th>Customer</th>
                                <th>Metode Pembayaran</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>
                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>TRK0001</strong>
                                </td>
                                <td>12334332</td>
                                <td>085233661118</td>
                                <td>Iqbal</td>
                                <td>BCA</td>
                                <td>BCA</td>
                                <td><span class="badge bg-label-warning me-1">Belum bayar</span></td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-outline-success">
                                        <i class='bx bx-check'></i>
                                    </button>
                                    <button type="button" class="btn btn-icon btn-outline-danger">
                                        <i class="bx bx-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="pemesanan_content_terkonfirmasi">
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Users</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong>
                                </td>
                                <td>Albert Cook</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                            <img src="{{ asset('admin') }}/img/avatars/5.png" alt="Avatar"
                                                class="rounded-circle" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                            <img src="{{ asset('admin') }}/img/avatars/6.png" alt="Avatar"
                                                class="rounded-circle" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Christina Parker">
                                            <img src="{{ asset('admin') }}/img/avatars/7.png" alt="Avatar"
                                                class="rounded-circle" />
                                        </li>
                                    </ul>
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                            </tr>
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

            var initialPosition = $(".line-active").position().left;

            $("#pesanan_masuk").click(function() {
                $("#pemesanan_content_masuk").show();
                $("#pemesanan_content_terkonfirmasi").hide();

                $(this).addClass("active");
                $("#pesanan_terkonfirmasi").removeClass("active");

                $(".line-active").css("left", initialPosition);
            });

            $("#pesanan_terkonfirmasi").click(function() {
                $("#pemesanan_content_terkonfirmasi").show();
                $("#pemesanan_content_masuk").hide();

                $(".line-active").css("left", "650px");

                $(this).addClass("active");
                $("#pesanan_masuk").removeClass("active");
            });
        });
    </script>
@endsection
