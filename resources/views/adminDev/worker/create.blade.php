@extends('adminDev.layout')

@section('conten')
    <div class="col-xl-12">
        <div class="card mb-4">
            {{-- <div class="card-header d-flex justify-content-between align-items-center">
            </div> --}}
            <div class="card-body">
                <form>
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="full-name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="full-name"
                                    placeholder="Masukkan nama lengkap" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Masukkan alamat email" />
                            </div>
                        </div>
                    </div>
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Password</label>
                                <input type="text" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Foto</label>
                                <input type="file" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">High Rank</label>
                                <input type="text" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="exampleFormControlSelect1" class="form-label">Role</label>
                                <select class="form-select" id="exampleFormControlSelect1"
                                    aria-label="Default select example">
                                    <option selected><--- Pilih Role ---></option>
                                    <option value="1">All Role</option>
                                    <option value="2">Jungler</option>
                                    <option value="3">Roam</option>
                                    <option value="3">Mid Laner</option>
                                    <option value="3">Exp laner</option>
                                    <option value="3">Gol Laner</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                    <a href="{{ route('worker.index') }}" class="btn btn-danger"> Kembali </a>
                </form>
            </div>
        </div>
    </div>
@endsection
