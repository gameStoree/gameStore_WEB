@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div class="card">
            <div class="col-md-6e p-1">
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
