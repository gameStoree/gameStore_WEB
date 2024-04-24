@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div class="card">
            <div class="p-3">
                <a href="{{ route('kategoriGame.create') }}" class="btn btn-primary col-2"> + Kategori Game</a>
            </div>
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Game</th>
                                <th>Poster Game</th>
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
                                    <td>{{ $item->nama_game }}</td>
                                    <td>
                                        @if ($item->poster_game)
                                            <img style="max-height: 150px; overflow:hidden"
                                                src="{{ asset('storage/' . $item->poster_game) }}" alt="">
                                        @else
                                            <img style="max-height: 180px; overflow:hidden"
                                                src="{{ asset('dist/img/not-found.jpg') }}" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('kategoriGame.edit', $item->id) }}"
                                            class="btn btn-icon btn-outline-warning">
                                            <i class='bx bxs-pencil'></i>
                                        </a>
                                        <form action="{{ route('kategoriGame.destroy', $item->id) }}" method="POST"
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
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
