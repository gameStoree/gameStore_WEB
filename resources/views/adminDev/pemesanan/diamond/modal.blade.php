<!-- Modal -->
{{-- @foreach ($dataMasuk as $pesananMasuk)
    <div class="modal fade" id="staticBackdrop{{ $pesananMasuk->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="rounded-circle mt-5 img-fluid mx-auto d-block " style="object-fit: cover; height:260px; width:260px; margin-bottom: 40px;" src="{{ asset('storage/' . $pesananMasuk->foto) }}" alt="">
                    <div class="container">
                        <p><b>ID Transaksi :</b> {{ $pesananMasuk->id_pemesanan }}</p>
                        <p><b>ID Game :</b> {{ $pesananMasuk->nama_kamar }}</p>
                        <p><b>Nama Game :</b> {{ $pesananMasuk->nama_lengkap }}</p>
                        <p><b>Nama Customer :</b> {{ $pesananMasuk->tggl_pemesaan }}</p>
                        <p><b>No HP :</b> {{ $pesananMasuk->tggl_masuk }}</p>
                        <p><b>Metode Pembayaran :</b> {{ $pesananMasuk->tggl_keluar }}</p>
                        <p><b>Status :</b> {{ $pesananMasuk->harga }}</p>
                        <p><b>Tanggal Pemesanan :</b> {{ $pesananMasuk->kategori }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach --}}

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
                        <p><b>ID Game :</b> {{ $pesananMasuk->id_game }}</p>
                        <p><b>Nama Game :</b> {{ $pesananMasuk->nama_game }}</p>
                        <p><b>Nama Customer :</b> {{ $pesananMasuk->nama_lengkap }}</p>
                        <p><b>No HP :</b> {{ $pesananMasuk->no_hp }}</p>
                        <p><b>Metode Pembayaran :</b> {{ $pesananMasuk->metode_pembayaran }}</p>
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
