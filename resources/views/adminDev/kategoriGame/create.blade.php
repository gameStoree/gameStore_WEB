@extends('adminDev.layout')

@section('conten')
    <div class="col-xl-6">
        <div class="card mb-4">
            {{-- <div class="card-header d-flex justify-content-between align-items-center">
            </div> --}}
            <div class="card-body">
                <form action="{{ route('kategoriGame.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Nama Game</label>
                        <input type="text" class="form-control" id="basic-default-company" placeholder="Masukkan jumlah diamond" name="nama_game" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Poster Game</label>
                        <input type="file" class="form-control" id="basic-default-company" placeholder="Masukkan jumlah diamond" name="poster_game" />
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('kategoriGame.index') }}" class="btn btn-danger"> Kembali </a>
                </form>
            </div>
        </div>
    </div>
@endsection
