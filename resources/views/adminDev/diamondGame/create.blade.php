@extends('adminDev.layout')

@section('conten')
    <div class="col-xl-6">
        <div class="card mb-4">
            {{-- <div class="card-header d-flex justify-content-between align-items-center">
            </div> --}}
            <div class="card-body">
                <form action="{{ route('diamondGame.store')}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="exampleFormControlSelect1" class="form-label">Nama Game</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="nama_game">
                            <option selected><--- Pilih Game ---></option>
                            <option value="Mobile Legend">Mobile Legend</option>
                            <option value="Free Fire">Free Fire</option>
                            <option value="PUBG">PUBG</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Jumlah Diamond</label>
                        <input type="text" class="form-control" id="basic-default-company" placeholder="Masukkan jumlah diamond" name="jumlah_diamond" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-email">Harga Diamond</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" class="form-control" placeholder="Masukkan harga diamond" name="harga_diamond" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('diamondGame.index') }}" class="btn btn-danger"> Kembali </a>
                </form>
            </div>
        </div>
    </div>
@endsection
