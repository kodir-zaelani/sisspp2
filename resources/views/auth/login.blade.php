@extends('layouts.appf')

@section('content')
<div class="container px-4 py-5 col-xl-12 col-xxl-10">
    <div class="py-5 row align-items-center g-lg-5">
        <div class="text-center col-lg-6 text-lg-start k">
            <h1 class="mb-3 display-4 fw-bold lh-1 text-body-emphasis d-none d-lg-block d-md-block d-xl-block">
                Sistem Informasi Layanan Pendidikan
            </h1>
            <h5 class="mb-3 display-4 fw-bold lh-1 text-body-emphasis d-block d-lg-none d-md-none d-xl-none">
                Sistem Informasi Layanan Pendidikan
            </h5>
            <p class="col-lg-10 fs-4 d-none d-lg-block d-md-block d-xl-block">
                Below is an example form built entirely with Bootstrap’s form
                controls. Each required form group has a validation state that can
                be triggered by attempting to submit the form without completing
                it.
            </p>
        </div>
        <div class="mx-auto col-md-10 col-lg-6">
            <x-flash-message/>
            <form class="p-4 border p-md-5 rounded-3 bg-body-tertiary" method="POST" action="{{ route('login') }}" >
                @csrf
                <div class="mb-3 input-group ">
                    <span class="input-group-text" ><i class="bi bi-person-square"></i></span>
                    <input type="text" class="form-control @error('login') is-invalid @enderror py-2"  name="login" value="{{ old('login') }}" required autocomplete="login" placeholder="No HP/Email/Username" aria-label="login" aria-describedby="basic-addon1">
                    {{-- <small class="text-body-secondary">Gunakan No HP/Username/Email yang terdaftar</small> --}}
                    @error('login')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text" ><i class="bi bi-file-lock2"></i></span>
                    <input type="password" class="form-control py-2 @error('password') is-invalid @enderror"  name="password" value="{{ old('password') }}" required  placeholder="Password" autocomplete="current-password" aria-label="email" aria-describedby="basic-addon1">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3 checkbox">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">
                    Login
                </button>
                <hr class="my-4" />
                <small>Sudah punya akun orang tua / wali peserta didik? <a href="/wali-signup"> Daftar</a></small>
            </form>
        </div>
    </div>
</div>
@endsection
