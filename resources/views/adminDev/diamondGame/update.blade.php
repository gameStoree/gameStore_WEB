@extends('adminDev.layout')

@section('conten')
    <div class="col-xl-6">
        <div class="card mb-4">
            {{-- <div class="card-header d-flex justify-content-between align-items-center">
            </div> --}}
            <div class="card-body">
                <form action="{{ route('diamondGame.update', $data->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-4">
                        <label for="exampleFormControlSelect1" class="form-label">Nama Game</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="nama_game">
                            <option selected><--- Pilih Game ---></option>
                            <option value="Mobile Legend" {{ $data->nama_game == "Mobile Legend" ? 'selected' : '' }}>Mobile Legend</option>
                            <option value="Free Fire" {{ $data->nama_game == "Free Fire" ? 'selected' : '' }}>Free Fire</option>
                            <option value="PUBG" {{ $data->nama_game == "PUBG" ? 'selected' : '' }}>PUBG</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Jumlah Diamond</label>
                        <input type="text" class="form-control" id="basic-default-company" placeholder="Masukkan jumlah diamond" 
                        value="{{ $data->jumlah_diamond }}" name="jumlah_diamond"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-email">Harga Diamond</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" class="form-control" placeholder="Masukkan harga diamond"
                            value="{{ $data->harga_diamond }}" name="harga_diamond"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="{{ route('diamondGame.index') }}" class="btn btn-danger"> Kembali </a>
                </form>
            </div>
        </div>
    </div>
@endsection
