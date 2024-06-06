<!-- Modal -->
@foreach ($dataMasuk as $pesananMasuk)
<div class="col-lg-4 col-md-3">
    <!-- Modal -->
    <div class="modal fade" id="modalLong{{ $pesananMasuk->id }}" tabindex="-1" aria-hidden="true">
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
                        <p><b>Status :</b> {{ $pesananMasuk->status }}</p>
                        <p><b>ID Transaksi :</b> {{ $pesananMasuk->id }}</p>
                        <p><b>ID Game :</b> {{ $pesananMasuk->id_server }}</p>
                        <p><b>Nama Game :</b> {{ $pesananMasuk->nama_game }}</p>
                        <p><b>Nama Customer :</b> {{ $pesananMasuk->nama_lengkap }}</p>
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

@foreach ($dataTerkonfirmasi as $pesananMasuk)
<div class="col-lg-4 col-md-3">
    <!-- Modal -->
    <div class="modal fade" id="modalLong{{ $pesananMasuk->id }}" tabindex="-1" aria-hidden="true">
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
                        <p><b>Status :</b> {{ $pesananMasuk->status }}</p>
                        <p><b>ID Transaksi :</b> {{ $pesananMasuk->id }}</p>
                        <p><b>ID Game :</b> {{ $pesananMasuk->id_server }}</p>
                        <p><b>Nama Game :</b> {{ $pesananMasuk->nama_game }}</p>
                        <p><b>Nama Customer :</b> {{ $pesananMasuk->nama_lengkap }}</p>
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
