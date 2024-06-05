@foreach ($jokiMasuk as $pesananMasuk)
    <div class="col-lg-4 col-md-3">
        <!-- Modal -->
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
                            <p><b>Status :</b> {{ $pesananMasuk->status }}</p>
                            <p><b>ID Transaksi :</b> {{ $pesananMasuk->id }}</p>
                            <p><b>Nama Paket :</b> {{ $pesananMasuk->nama_paket }}</p>
                            <p><b>Login_Via :</b> {{ $pesananMasuk->login_via }}</p>
                            <p><b>Email/No HP/Moonton ID :</b> {{ $pesananMasuk->email_no_hp_montonID }}</p>
                            <p><b>Password :</b> {{ $pesananMasuk->password }}</p>
                            <p><b>Request Hero :</b> {{ $pesananMasuk->request_hero }}</p>
                            <p><b>Catatan Penjoki :</b> {{ $pesananMasuk->catatan_penjoki }}</p>
                            <p><b>No HP :</b> {{ $pesananMasuk->no_hp }}</p>
                            <p><b>Harga :</b> {{ $pesananMasuk->harga_keseluruhan }}</p>
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

@foreach ($jokiTerkonfirmasi as $pesananTerkonfirmasi)
    <div class="col-lg-4 col-md-3">
        <!-- Modal -->
        <div class="modal fade" id="modalLong{{ $pesananTerkonfirmasi->id }}" tabindex="-1" aria-hidden="true">
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
                            <p><b>Status :</b> {{ $pesananTerkonfirmasi->status }}</p>
                            <p><b>ID Transaksi :</b> {{ $pesananTerkonfirmasi->id }}</p>
                            <p><b>Nama Paket :</b> {{ $pesananTerkonfirmasi->nama_paket }}</p>
                            <p><b>Login_Via :</b> {{ $pesananTerkonfirmasi->login_via }}</p>
                            <p><b>Email/No HP/Moonton ID :</b> {{ $pesananTerkonfirmasi->email_no_hp_montonID }}</p>
                            <p><b>Password :</b> {{ $pesananTerkonfirmasi->password }}</p>
                            <p><b>Request Hero :</b> {{ $pesananTerkonfirmasi->request_hero }}</p>
                            <p><b>Catatan Penjoki :</b> {{ $pesananTerkonfirmasi->catatan_penjoki }}</p>
                            <p><b>No HP :</b> {{ $pesananTerkonfirmasi->no_hp }}</p>
                            <p><b>Harga :</b> {{ $pesananTerkonfirmasi->harga_keseluruhan }}</p>
                            <p><b>Tanggal Pemesanan :</b> {{ $pesananTerkonfirmasi->created_at }}</p>
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
    <div class="col-lg-4 col-md-3">
        <!-- Modal -->
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
                            <p><b>Status :</b> {{ $pesananProgress->status }}</p>
                            <p><b>ID Transaksi :</b> {{ $pesananProgress->id }}</p>
                            <p><b>Nama Worker :</b> {{ $pesananProgress->nama_lengkap }}</p>
                            <p><b>Nama Paket :</b> {{ $pesananProgress->nama_paket }}</p>
                            <p><b>Login_Via :</b> {{ $pesananProgress->login_via }}</p>
                            <p><b>Email/No HP/Moonton ID :</b> {{ $pesananProgress->email_no_hp_montonID }}</p>
                            <p><b>Password :</b> {{ $pesananProgress->password }}</p>
                            <p><b>Request Hero :</b> {{ $pesananProgress->request_hero }}</p>
                            <p><b>Catatan Penjoki :</b> {{ $pesananProgress->catatan_penjoki }}</p>
                            <p><b>No HP :</b> {{ $pesananProgress->no_hp }}</p>
                            <p><b>Harga :</b> {{ $pesananProgress->harga_keseluruhan }}</p>
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
    </div>
@endforeach

@foreach ($jokiDone as $pesananDone)
    <div class="col-lg-4 col-md-3">
        <!-- Modal -->
        <div class="modal fade" id="modalLong{{ $pesananDone->id }}" tabindex="-1" aria-hidden="true">
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
                            <p><b>Status :</b> {{ $pesananDone->status }}</p>
                            <p><b>ID Transaksi :</b> {{ $pesananDone->id }}</p>
                            <p><b>Nama Worker :</b> {{ $pesananDone->nama_lengkap }}</p>
                            <p><b>Nama Paket :</b> {{ $pesananDone->nama_paket }}</p>
                            <p><b>Joki :</b> {{ $pesananDone->joki_rank }}</p>
                            <p><b>Login_Via :</b> {{ $pesananDone->login_via }}</p>
                            <p><b>Email/No HP/Moonton ID :</b> {{ $pesananDone->email_no_hp_montonID }}</p>
                            <p><b>Password :</b> {{ $pesananDone->password }}</p>
                            <p><b>Request Hero :</b> {{ $pesananDone->request_hero }}</p>
                            <p><b>Catatan Penjoki :</b> {{ $pesananDone->catatan_penjoki }}</p>
                            <p><b>No HP :</b> {{ $pesananDone->no_hp }}</p>
                            <p><b>Harga :</b> {{ $pesananDone->harga_keseluruhan }}</p>
                            <p><b>Tanggal Pemesanan :</b> {{ $pesananDone->created_at }}</p>
                            @if ($pesananDone->ss_hasilJoki)
                                @php
                                    $gambarArray = explode(',', $pesananDone->ss_hasilJoki);
                                @endphp
                                @foreach ($gambarArray as $gambar)
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#zoomedImage">
                                        <img class="mb-3" style="max-height: 150px; margin: 5px;"
                                            src="{{ asset('storage/' . $gambar) }}" alt="">
                                    </a>
                                @endforeach
                            @else
                                <img style="max-height: 180px; overflow:hidden"
                                    src="{{ asset('dist/img/not-found.jpg') }}" alt="">
                            @endif
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
