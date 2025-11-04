@extends('layouts.appf')

@section('content')
<div class="container col-xl-12 col-xxl-10 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">
                Vertically centered hero sign-up form
            </h1>
            <p class="col-lg-10 fs-4">
                Below is an example form built entirely with Bootstrap’s form
                controls. Each required form group has a validation state that can
                be triggered by attempting to submit the form without completing
                it.
            </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <x-flash-message/>
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="POST" action="{{ route('login') }}" >
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" ><i class="bi bi-person-square"></i></span>
                    <input type="text" class="form-control @error('login') is-invalid @enderror py-2"  name="login" value="{{ old('login') }}" required autocomplete="login" placeholder="No HP/Email/Username" aria-label="login" aria-describedby="basic-addon1">
                    @error('login')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" ><i class="bi bi-file-lock2"></i></span>
                    <input type="password" class="form-control py-2 @error('password') is-invalid @enderror"  name="password" value="{{ old('password') }}" required  placeholder="Password" autocomplete="current-password" aria-label="email" aria-describedby="basic-addon1">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="checkbox mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">
                    Login
                </button>
                <hr class="my-4" />
                <small class="text-body-secondary">Gunakan No HP/Username/Email yang terdaftar</small>
            </form>
        </div>
    </div>
</div>
@endsection
