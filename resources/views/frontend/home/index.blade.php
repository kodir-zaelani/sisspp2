@extends('layouts.appf')

@section('title', 'Home')
@section('content')

<div class="container px-4 py-5 col-xxl-8">
    <div class="py-2 row flex-lg-row-reverse align-items-center g-5">
        <div class="col-12 col-sm-8 col-lg-6">
            <img src="{{ asset('') }}uploads/images/features/features-6.webp" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"/>
        </div>
        <div class="col-lg-6">
            <h1 class="mb-3 display-5 fw-bold text-body-emphasis lh-1">
                Sistem Informasi Layanan Pendidikan
            </h1>
            <p class="lead">
                Sistem ini dekembangkan dengan metode tumbuh, perancangannya diupayakan mudah untuk proses pengembangan. Sehingga tidak perlu melakukan perubahan besar pada saat penambahan fitur
            </p>
            <div class="gap-2 d-grid d-md-flex justify-content-md-start">
                <a href="{{asset('')}}uploads/files/doc/panduan.pdf" target="_blank" class="btn btn-lg btn-success">Dokumentasi</a>
                @guest
                @if (Route::has('login'))
                <a href="{{ route('login')}}" class="px-4 btn btn-primary btn-lg me-md-2">
                    Masuk
                </a>
                @endif
                @else
                <a href="{{ route('backend.dashboard')}}" class="px-4 btn btn-outline-success btn-lg">
                    Dashboard
                </a>
                @endguest
            </div>
        </div>
    </div>
    <div class="py-5 mt-5 row">
        <div class="col-md-6">
            <div class="mb-4 overflow-hidden border rounded shadow-sm row g-0 flex-md-row h-md-250 position-relative">
                <div class="p-4 col d-flex flex-column position-static">
                    <strong class="mb-2 d-inline-block text-primary-emphasis">Keuangan</strong>
                    <h3 class="mb-0">Pengelolaan Keuangan</h3>
                    <div class="mb-1 text-body-secondary">Des 2025</div>
                    <p class="mb-auto card-text">
                       Diantaranya SPP, Uang Program, Ekstrakurikuler, Uang Gedung.
                    </p>
                    <a href="#" class="gap-1 icon-link icon-link-hover stretched-link">
                        Selengkapnya...
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img" height="250" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-4 overflow-hidden border rounded shadow-sm row g-0 flex-md-row h-md-250 position-relative">
                <div class="p-4 col d-flex flex-column position-static">
                    <strong class="mb-2 d-inline-block text-success-emphasis">Akademik</strong>
                    <h3 class="mb-0">Penelolaan Penilaian</h3>
                    <div class="mb-1 text-body-secondary">Nov 11</div>
                    <p class="mb-auto">
                        Fitur pengelolaan penilaian Peserta didik.
                    </p>
                    <a href="#" class="gap-1 icon-link icon-link-hover stretched-link" >
                        Selengkapnya...
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img" height="250" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
