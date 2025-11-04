@extends('layouts.appf')

@section('title', 'Home')
@section('content')

 <div class="container px-4 py-5 col-xxl-8">
        <div class="py-5 row flex-lg-row-reverse align-items-center g-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{ asset('') }}assets/frontend/img/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"/>
          </div>
          <div class="col-lg-6">
            <h1 class="mb-3 display-5 fw-bold text-body-emphasis lh-1">
              Responsive left-aligned hero with image
            </h1>
            <p class="lead">
              Quickly design and customize responsive mobile-first sites with
              Bootstrap, the world’s most popular front-end open source toolkit,
              featuring Sass variables and mixins, responsive grid system,
              extensive prebuilt components, and powerful JavaScript plugins.
            </p>
            <div class="gap-2 d-grid d-md-flex justify-content-md-start">
              <a href="{{ route('login')}}" class="px-4 btn btn-primary btn-lg me-md-2">
                Login
              </a>
              {{-- <button type="button" class="px-4 btn btn-outline-secondary btn-lg">
                Default
              </button> --}}
            </div>
          </div>
        </div>
      </div>

@endsection
