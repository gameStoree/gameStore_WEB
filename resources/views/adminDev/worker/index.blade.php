@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div class="card">
            <div class="p-3">
                <a href="{{ route('worker.create') }}" class="btn btn-primary col-2"> + Worker</a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Worker</th>
                            <th>Nama Lenngkap</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>High Rank</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1; ?>
                        @foreach ($data as $worker)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $i }}</strong></td>
                                <td>{{ $worker->nama_lengkap }}</td>
                                <td>{{ $worker->email }}</td>
                                <td>{{ $worker->password }}</span></td>
                                <td>{{ $worker->role }}</span></td>
                                <td>{{ $worker->high_rank }}</td>
                                <td>
                                    <a href="{{ route('worker.edit', $worker->id) }}"
                                        class="btn btn-icon btn-outline-warning">
                                        <i class='bx bxs-pencil'></i>
                                    </a>
                                    <button type="button" class="btn btn-icon btn-outline-danger">
                                        <i class="bx bx-trash-alt"></i>
                                    </button>
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
