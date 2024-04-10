@extends('adminDev.layout')

@section('conten')
    <div class="content-wrapper">
        <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img src="{{ asset('storage/' . $user->foto_user) }}" alt="user-avatar" class="d-block rounded" height="100"
                        width="100" id="uploadedAvatar" />
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" class="account-file-input" hidden
                                accept="image/png, image/jpeg" name="foto_user" />
                        </label>
                        <p class="text-muted mb-0">Diizinkan JPG, GIF atau PNG. Ukuran maksimal 800K</p>
                    </div>
                </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <form id="formAccountSettings" method="POST" onsubmit="return false">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap" value="{{ $user->nama_lengkap }}"
                                autofocus />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="email" name="email" id="email" name="email" value="{{ $user->email }}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="Password" class="form-label">Password</label>
                            <input class="form-control" type="password" id="password" name="password"  value="{{ $user->getOriginal('password') }}"/>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">No HP</label>
                            <input type="text" id="no_hp" name="no_hp" class="form-control" value="{{ $user->no_hp }}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $user->alamat }}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Role</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{ $user->role }}" disabled />
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection
