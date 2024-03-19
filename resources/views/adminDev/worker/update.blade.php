@extends('adminDev.layout')

@section('conten')
    <div class="col-xl-12">
        <div class="card mb-4">
            {{-- <div class="card-header d-flex justify-content-between align-items-center">
            </div> --}}
            <div class="card-body">
                <form action="{{ route('worker.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="full-name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="full-name"
                                    placeholder="Masukkan nama lengkap" value="{{ $data->nama_lengkap }}"
                                    name="nama_lengkap" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Masukkan alamat email" value="{{ $data->email }}" name="email" />
                            </div>
                        </div>
                    </div>
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Password</label>
                                <input type="text" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" value="{{ $data->password }}" name="password" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" value="{{ $data->tggl_lahir }}"
                                    name="tggl_lahir" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat">{{ $data->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Foto</label>
                                <input type="file" class="form-control" id="basic-default-company" name="foto"/>
                                @if ($data->foto)
                                    <img src="{{ url('storage/' . $data->foto) }}" style="max-width: 150px; margin-top: 10px;">
                                @else
                                    <p>Foto belum diunggah.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">High Rank</label>
                                <input type="text" class="form-control" id="basic-default-company"
                                    placeholder="Masukkan jumlah diamond" value="{{ $data->high_rank }}" name="high_rank" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="exampleFormControlSelect1" class="form-label">Role</label>
                                <select class="form-select" id="exampleFormControlSelect1"
                                    aria-label="Default select example" name="role">
                                    <option value="All Role" {{ $data->role == 'All Role' ? 'selected' : '' }}>All Role
                                    </option>
                                    <option value="Jungle" {{ $data->role == 'Jungle' ? 'selected' : '' }}>Jungler</option>
                                    <option value="Roam" {{ $data->role == 'Roam' ? 'selected' : '' }}>Roam</option>
                                    <option value="Mid Laner" {{ $data->role == 'Mid Laner' ? 'selected' : '' }}>Mid Laner
                                    </option>
                                    <option value="Exp Laner" {{ $data->role == 'Exp Laner' ? 'selected' : '' }}>Exp Laner
                                    </option>
                                    <option value="Gold Laner" {{ $data->role == 'Gold Laner' ? 'selected' : '' }}>Gold
                                        Laner</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="{{ route('worker.index') }}" class="btn btn-danger"> Kembali </a>
                </form>
            </div>
        </div>
    </div>
@endsection
