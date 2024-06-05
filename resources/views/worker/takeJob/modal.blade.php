@foreach ($jokiTerkonfirmasi as $pesananMasuk)
    <div class="col-lg-4 col-md-3">
        <!-- Modal joki terkonfirmasi -->
        <div class="modal fade" id="modalLong" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="rounded-circle mt-5 img-fluid mx-auto d-block "
                            style="object-fit: cover; height:260px; width:260px; margin-bottom: 40px;"
                            src="{{ asset('admin/img/img/jokirank.png') }}" alt="">
                        <div class="container">
                            <p><b>ID Transaksi :</b> {{ $pesananMasuk->id }}</p>
                            <p><b>Nama Paket :</b> {{ $pesananMasuk->joki_rank }}</p>
                            <p><b>Login_Via :</b> {{ $pesananMasuk->login_via }}</p>
                            <p><b>Email/No HP/Moonton ID :</b> {{ $pesananMasuk->email_no_hp_montonID }}</p>
                            <p><b>Password :</b> {{ $pesananMasuk->password }}</p>
                            <p><b>Request Hero :</b> {{ $pesananMasuk->request_hero }}</p>
                            <p><b>Catatan Penjoki :</b> {{ $pesananMasuk->catatan_penjoki }}</p>
                            <p><b>No HP :</b> {{ $pesananMasuk->no_hp }}</p>
                            <p><b>Status :</b> {{ $pesananMasuk->status }}</p>
                            <p><b>Tanggal Pemesanan :</b> {{ $pesananMasuk->created_at }}</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($jokiProgress as $pesananProgress)
    <!-- Modal joki progress -->
    <div class="modal fade" id="modalLong{{ $pesananProgress->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="rounded-circle mt-5 img-fluid mx-auto d-block "
                        style="object-fit: cover; height:260px; width:260px; margin-bottom: 40px;"
                        src="{{ asset('admin/img/img/jokirank.png') }}" alt="">
                    <div class="container">
                        <p><b>ID Transaksi :</b> {{ $pesananProgress->id }}</p>
                        <p><b>Nama Paket :</b> {{ $pesananProgress->joki_rank }}</p>
                        <p><b>Login_Via :</b> {{ $pesananProgress->login_via }}</p>
                        <p><b>Email/No HP/Moonton ID :</b> {{ $pesananProgress->email_no_hp_montonID }}</p>
                        <p><b>Password :</b> {{ $pesananProgress->password }}</p>
                        <p><b>Request Hero :</b> {{ $pesananProgress->request_hero }}</p>
                        <p><b>Catatan Penjoki :</b> {{ $pesananProgress->catatan_penjoki }}</p>
                        <p><b>No HP :</b> {{ $pesananProgress->no_hp }}</p>
                        <p><b>Status :</b> {{ $pesananProgress->status }}</p>
                        <p><b>Tanggal Pemesanan :</b> {{ $pesananProgress->created_at }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($jokiProgress as $pesananProgress)
    <!-- Modal joki progress -->
    <div class="modal fade" id="modalLaporan{{ $pesananProgress->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <form action="{{ route('takeJob.report', $pesananProgress->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="rounded-circle mt-5 img-fluid mx-auto d-block "
                            style="object-fit: cover; height:260px; width:260px; margin-bottom: 40px;"
                            src="{{ asset('admin/img/img/jokirank.png') }}" alt="">
                        <div class="container">
                            <p><b>ID Transaksi :</b> {{ $pesananProgress->id }}</p>
                            <p><b>Nama Paket :</b> {{ $pesananProgress->joki_rank }}</p>
                            <p><b>Login_Via :</b> {{ $pesananProgress->login_via }}</p>
                            <p><b>Email/No HP/Moonton ID :</b> {{ $pesananProgress->email_no_hp_montonID }}</p>
                            <p><b>Password :</b> {{ $pesananProgress->password }}</p>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-nickname">Laporan</label>
                                <textarea class="form-control" name="laporan_akun" aria-label="With textarea" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-danger">
                            Lapor
                        </button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach


