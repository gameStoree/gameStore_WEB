@extends('adminDev.layout')

@section('conten')
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
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1.</strong></td>
                        <td>Mobile Legend</td>
                        <td>86 Diamond</td>
                        <td><span class="badge bg-label-primary me-1">20.000</span></td>
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
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>2</strong></td>
                        <td>Mobile Lengend</td>
                        <td>150 Diamond</td>
                        <td><span class="badge bg-label-success me-1">30.000</span></td>
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
                        <td>Free Fire</td>
                        <td>140 Diamond</td>
                        <td><span class="badge bg-label-info me-1">20.000</span></td>
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
                        <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>4.</strong>
                        </td>
                        <td>PUBG</td>
                        <td>50 UC</td>
                        <td><span class="badge bg-label-warning me-1">15.000</span></td>
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
@endsection
