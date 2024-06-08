@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div class="card">
            <div class="p-3">
                <a href="{{ route('diamondGame.create') }}" class="btn btn-primary col-2"> + Diamond Game</a>
            </div>
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable">
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
                            @foreach ($diamondGames as $item)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $i }}</strong>
                                    </td>
                                    <td>{{ $item->nama_game }}</td>
                                    <td>{{ $item->jumlah_diamond }}</td>
                                    <td><span class="badge bg-label-primary me-1">{{ $item->harga_diamond }}</span></td>
                                    <td>
                                        <a href="{{ route('diamondGame.edit', $item->id) }}"
                                            class="btn btn-icon btn-outline-warning">
                                            <i class='bx bxs-pencil'></i>
                                        </a>
                                        {{-- <a href="{{ route('diamondGame.destroy',  $item->id) }}" class="btn btn-icon btn-outline-danger" data-confirm-delete="true"><i class="bx bx-trash-alt"></i></a> --}}
                                        <form action="{{ route('diamondGame.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button id="confirmDelete" type="submit"
                                                class="btn btn-icon btn-outline-danger" data-confirm-delete="true">
                                                <i class="bx bx-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @include('sweetalert::alert')
            {{-- <script>
        $('confirmDelete').click(function(event){
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                title: 'Hapus Data!',
                text: 'Apakah Anda yakin ingin menghapus data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        })
    </script> --}}
@endsection
