@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div class="card">
            <div class="col-md-6e p-1">
                <form method="GET" action="{{ route('laporan.index') }}">
                    <div class="row mb-3 align-items-end">
                        <div class="col-3">
                            <label for="tgl_awal" class="form-label">Tanggal Awal</label>
                            <input type="date" class="form-control" id="tgl_awal" name="tgl_awal"
                                value="{{ request('tgl_awal') }}">
                        </div>
                        <div class="col-3">
                            <label for="tgl_akhir" class="form-label">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir"
                                value="{{ request('tgl_akhir') }}">
                        </div>
                        <div class="col-2">
                            <label class="form-label d-block">&nbsp;</label>
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive text-nowrap">
                    <div class="card-body bg-white p-2" style="border-radius: 18px;">
                        <table class="table table-hover large" id="myTable">
                            <thead>
                                <tr>
                                    <th>ID Transaksi</th>
                                    <th>Item</th>
                                    <th>Jenis Item</th>
                                    <th>Harga</th>
                                    <th>No HP</th>
                                    <th>Tanggal</th>
                                    <th>ID Customer</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($laporan as $item)
                                    <tr>
                                        <td><strong>{{ $item->id_transaksi }}</strong></td>
                                        <td>{{ $item->item }}</td>
                                        <td>{{ $item->jenis_item }}</td>
                                        <td><span
                                                class="badge bg-label-primary me-1">{{ number_format($item->harga) }}</span>
                                        </td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->id_customer }}</td>
                                        <td>
                                            <button id="confirmDelete" type="button"
                                                class="btn btn-icon btn-outline-danger" data-confirm-delete="true">
                                                <i class="bx bx-trash-alt"></i>
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
    </div>
@endsection
