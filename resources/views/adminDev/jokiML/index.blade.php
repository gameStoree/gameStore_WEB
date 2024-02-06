@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div class="card">
            <div class="p-3">
                <a href="{{ route('jokiML.create') }}" class="btn btn-primary col-2"> + Paket Joki</a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Paket Joki</th>
                            <th>Joki Rank</th>
                            <th>Harga</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1; ?>
                        @foreach ($data as $item)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $i }}</strong>
                                </td>
                                <td>{{ $item->nama_paket }}</td>
                                <td>{{ $item->joki_rank }}</td>
                                <td><span class="badge bg-label-primary me-1">{{ $item->harga_joki }}</span></td>
                                <td>
                                    <a href="{{ route('jokiML.edit', $item->id) }}"
                                        class="btn btn-icon btn-outline-warning">
                                        <i class='bx bxs-pencil'></i>
                                    </a>
                                    <form action="{{ route('jokiML.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button id="confirmDelete" type="submit" class="btn btn-icon btn-outline-danger" data-confirm-delete="true">
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
    </div>
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function(){
            $('form').on('submit', function(e){
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                
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
                        $.ajax({
                            type: "DELETE",
                            url: url,
                            data: form.serialize(),
                            success: function(response) {
                                Swal.fire('Sukses!', response.success, 'success');
                                // Refresh halaman setelah penghapusan data
                                location.reload();
                            },
                            error: function(xhr) {
                                Swal.fire('Error!', 'Gagal menghapus data.', 'error');
                            }
                        });
                    }
                });
            });
        });
    </script>
    
@endsection
