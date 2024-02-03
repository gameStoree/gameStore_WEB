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
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1. </strong></td>
                            <td>Joki satuan</td>
                            <td>Elite - legend</td>
                            <td><span class="badge bg-label-primary me-1">40.000</span></td>
                            <td>
                                <button type="button" class="btn btn-icon btn-outline-warning">
                                    <i class='bx bxs-pencil'></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-danger">
                                    <i class="bx bx-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>2.</strong></td>
                            <td>Joki Paketan</td>
                            <td>Epic - Mytich Honor</td>
                            <td><span class="badge bg-label-success me-1">200.000</span></td>
                            <td>
                                <button type="button" class="btn btn-icon btn-outline-warning">
                                    <i class='bx bxs-pencil'></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-danger">
                                    <i class="bx bx-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>3.</strong></td>
                            <td>Joki Satuan</td>
                            <td>legend 5 - mytich grading</td>
                            <td><span class="badge bg-label-info me-1">60.000</span></td>
                            <td>
                                <button type="button" class="btn btn-icon btn-outline-warning">
                                    <i class='bx bxs-pencil'></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-outline-danger">
                                    <i class="bx bx-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
