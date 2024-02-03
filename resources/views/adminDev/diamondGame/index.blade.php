@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div class="card">
            <div class="p-3">
                <a href="{{ route('diamondGame.create') }}" class="btn btn-primary col-2"> + Diamond Game</a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Game</th>
                            <th>Jumlah Diamond</th>
                            <th>Harga Diamond</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1; ?>
                        @foreach ($data as $item)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $i }}</strong></td>
                                <td>{{ $item->nama_game }}</td>
                                <td>{{ $item->jumlah_diamond }}</td>
                                <td><span class="badge bg-label-primary me-1">{{ $item->harga_diamond }}</span></td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-outline-warning">
                                        <i class='bx bxs-pencil'></i>
                                    </button>
                                    <button type="button" class="btn btn-icon btn-outline-danger">
                                        <i class="bx bx-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
