@extends('adminDev.layout')

@section('conten')
    <div class="col-xl-12">
        <div class="card mb-4">
            {{-- <div class="card-header d-flex justify-content-between align-items-center">
            </div> --}}
            <div class="card-body">
                <form action="{{ route('worker.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="full-name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="full-name"
                                    placeholder="Masukkan nama lengkap" name="nama_lengkap" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Masukkan alamat email" name="email" />
                            </div>
                        </div>
                    </div>
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Password</label>
                                <input type="text" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" name="password" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" name="tggl_lahir" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="email">No HP</label>
                                <input type="number" class="form-control" id="no_hp"
                                    placeholder="Masukkan alamat email" name="no_hp" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Foto</label>
                                <input type="file" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" name="foto" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">High Rank</label>
                                <input type="text" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" name="high_rank" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="exampleFormControlSelect1" class="form-label">Role</label>
                                <select class="form-select" id="exampleFormControlSelect1"
                                    aria-label="Default select example" name="role">
                                    <option selected><--- Pilih Role ---></option>
                                    <option value="All Roler">All Role</option>
                                    <option value="Jungler">Jungler</option>
                                    <option value="Roam">Roam</option>
                                    <option value="Mid Laner">Mid Laner</option>
                                    <option value="Exp laner">Exp laner</option>
                                    <option value="Gold Laner">Gold Laner</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('worker.index') }}" class="btn btn-danger"> Kembali </a>
                </form>
            </div>
        </div>
    </div>
@endsection
