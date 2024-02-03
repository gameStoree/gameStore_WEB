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
                            <th>No</th>
                            <th>Nama Worker</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1.</strong></td>
                            <td>Farhan Ariyanto</td>
                            <td>ariyanto@gmail.com</td>
                            <td>worker12</span></td>
                            <td>03 Oktober 2003</span></td>
                            <td>Probolinggo</td>
                            <td>
                                <button type="button" class="btn btn-icon btn-outline-warning">
                                    <i class='bx bxs-pencil'></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-danger">
                                    <i class="bx bx-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-secondary">
                                    <i class="bx bx-info-circle"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>2.</strong></td>
                            <td>Farhan Ariyanto</td>
                            <td>ariyanto@gmail.com</td>
                            <td>worker12</span></td>
                            <td>03 Oktober 2003</span></td>
                            <td>Probolinggo</td>
                            <td>
                                <button type="button" class="btn btn-icon btn-outline-warning">
                                    <i class='bx bxs-pencil'></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-danger">
                                    <i class="bx bx-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-secondary">
                                    <i class="bx bx-info-circle"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>3.</strong></td>
                            <td>Farhan Ariyanto</td>
                            <td>ariyanto@gmail.com</td>
                            <td>worker12</span></td>
                            <td>03 Oktober 2003</span></td>
                            <td>Probolinggo</td>
                            <td>
                                <button type="button" class="btn btn-icon btn-outline-warning">
                                    <i class='bx bxs-pencil'></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-danger">
                                    <i class="bx bx-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-secondary">
                                    <i class="bx bx-info-circle"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
