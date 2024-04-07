@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div class="card">
            <div class="p-3">
                <a href="{{ route('worker.create') }}" class="btn btn-primary col-2"> + Worker</a>
            </div>
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable">
                        <thead>
                            <tr>
                                <th>ID Worker</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>No Hp</th>
                                <th>Role</th>
                                <th>High Rank</th>
                                <th>Foto</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php $i = 1; ?>
                            @foreach ($data as $worker)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $i }}</strong>
                                    </td>
                                    <td>{{ $worker->nama_lengkap }}</td>
                                    <td>{{ $worker->email }}</td>
                                    <td>{{ $worker->password }}</span></td>
                                    <td>{{ $worker->no_hp }}</td>
                                    <td>{{ $worker->role }}</span></td>
                                    <td>{{ $worker->high_rank }}</td>
                                    <td>
                                        @if ($worker->foto)
                                            <img style="max-height: 150px; overflow:hidden"
                                                src="{{ asset('storage/' . $worker->foto) }}" alt="">
                                        @else
                                            <img style="max-height: 180px; overflow:hidden"
                                                src="{{ asset('dist/img/not-found.jpg') }}" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('worker.edit', $worker->id) }}"
                                            class="btn btn-icon btn-outline-warning">
                                            <i class='bx bxs-pencil'></i>
                                        </a>
                                        <form action="{{ route('worker.destroy', $worker->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button id="confirmDelete" type="submit"
                                                class="btn btn-icon btn-outline-danger" data-confirm-delete="true">
                                                <i class="bx bx-trash-alt"></i>
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-icon btn-outline-secondary">
                                            <i class="bx bx-info-circle"></i>
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
