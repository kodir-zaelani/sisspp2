@extends('layouts.appf')

@section('content')
<div class="container px-4 py-4 col-xl-12 col-xxl-10">
    <div class="py-2 row align-items-center g-lg-5">
        <div class="text-center col-lg-6 text-lg-start">
            <h3 class="mb-3 fw-bold lh-1 text-body-emphasis">
                Sistem Informasi Layanan Pendidikan
            </h3>
            <p class="col-lg-10 fs-4">
                Sistem pengelolaan layanan pendidikan Yayasan Baitul Muttaqin
            </p>
        </div>
        <div class="mx-auto col-md-10 col-lg-6">
            <x-flash-message/>
            <form class="p-4 border p-md-5 rounded-3 bg-body-tertiary" method="POST" action="{{ route('register') }}" >
                @csrf
                <div class="mb-3 form-group @error('email') is-invalid @enderror">
                    <label for="formGroupName" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" required name="email" value="{{ old('email') }}"  autocomplete="email"  placeholder="Alamat Email">
                    @error('email')
                    <div class="form-control-feedback"><small>
                        <code>{{ $message }}</code> </small>
                    </div>
                    @enderror
                </div>
                <div class="mb-3 form-group @error('username') is-invalid @enderror">
                    <label for="formGroupName" class="form-label">Nama Pengguna </label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username"  placeholder="Username">
                    @error('username')
                    <div class="form-control-feedback"><small>
                        <code>{{ $message }}</code> </small>
                    </div>
                    @enderror
                </div>
                <div class="mb-3 form-group @error('phone') is-invalid @enderror">
                    <label for="formGroupName" class="form-label">No HP </label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone"  placeholder="No HP">
                    @error('phone')
                    <div class="form-control-feedback"><small>
                        <code>{{ $message }}</code> </small>
                    </div>
                    @enderror
                </div>
                <div class="mb-3 form-group @error('password') is-invalid @enderror">
                    <label class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control py-2 @error('password') is-invalid @enderror"  required name="password" value="{{ old('password') }}"  placeholder="Password" autocomplete="current-password" aria-label="email" aria-describedby="basic-addon1">
                    <small class="text-muted fs-8">Min 8 Caracter: Min 1 Uppercase, min 1 Symbol, min 1 Number </small>
                    @error('password')
                    <div class="form-control-feedback"><small>
                        <code>{{ $message }}</code> </small>
                    </div>
                    @enderror
                </div>
                <div class="mb-3 form-group @error('password_confirmation') is-invalid @enderror">
                    <label class="form-label">Konfirmasi Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control py-2 @error('password_confirmation') is-invalid @enderror"  required name="password_confirmation" value="{{ old('password_confirmation') }}"  placeholder="Konfirmasi Password" autocomplete="current-password_confirmation" aria-label="email" aria-describedby="basic-addon1">
                    @error('password_confirmation')
                    <div class="form-control-feedback"><small>
                        <code>{{ $message }}</code> </small>
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">
                    Daftar
                </button>
                <hr class="my-4" />
                <small>Sudah memiliki akun? <a href="{{ route('login') }}"> Login</a></small>
            </form>
        </div>
    </div>
</div>
@endsection
