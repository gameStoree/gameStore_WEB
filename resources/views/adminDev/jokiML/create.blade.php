@extends('adminDev.layout')

@section('conten')
    <div class="col-xl-6">
        <div class="card mb-4">
            {{-- <div class="card-header d-flex justify-content-between align-items-center">
            </div> --}}
            <div class="card-body">
                <form>
                    <div class="mb-4">
                        <label for="exampleFormControlSelect1" class="form-label">Nama Paket</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option selected><--- Pilih Paket ---></option>
                            <option value="1">Joki satuan</option>
                            <option value="2">Joki Paketan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Joki Rank</label>
                        <input type="text" class="form-control" id="basic-default-company" placeholder="Masukkan jumlah diamond" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-email">Harga Paket</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" class="form-control" placeholder="Masukkan harga diamond"
                                aria-label="john.doe" aria-describedby="basic-default-email2" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                    <a href="{{ route('diamondGame.index') }}" class="btn btn-danger"> Kembali </a>
                </form>
            </div>
        </div>
    </div>
@endsection
