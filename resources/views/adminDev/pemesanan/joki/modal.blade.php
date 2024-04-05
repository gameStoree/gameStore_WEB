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
                            src="{{ asset('storage/' . $pesananMasuk->bukti_tf) }}" alt="">
                        <div class="container">
                            <p><b>ID Transaksi :</b> {{ $pesananMasuk->id }}</p>
                            <p><b>Nama Paket :</b> {{ $pesananMasuk->nama_paket }}</p>
                            <p><b>Login_Via :</b> {{ $pesananMasuk->login_via }}</p>
                            <p><b>Email/No HP/Moonton ID :</b> {{ $pesananMasuk->email_no_hp_montonID }}</p>
                            <p><b>Password :</b> {{ $pesananMasuk->password }}</p>
                            <p><b>Request Hero :</b> {{ $pesananMasuk->request_hero }}</p>
                            <p><b>Catatan Penjoki :</b> {{ $pesananMasuk->catatan_penjoki }}</p>
                            <p><b>Metode Pembayaran :</b> {{ $pesananMasuk->metode_pembayaran }}</p>
                            <p><b>No HP :</b> {{ $pesananMasuk->no_hp }}</p>
                            <p><b>Status :</b> {{ $pesananMasuk->status }}</p>
                            <p><b>Tanggal Pemesanan :</b> {{ $pesananMasuk->creat_at }}</p>
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
