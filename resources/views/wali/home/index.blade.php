@extends('layouts.appwali')

@section('content')
<section class="content">
    <div class="row align-items-end">
        <div class="col-xl-12 col-12">
            <div class="box bg-primary">
                <div class="box-body p-xl-0">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-3"><img src="{{asset('')}}assets/images/svg-icon/color-svg/custom-14.svg" alt=""></div>
                        <div class="col-12 col-lg-9">
                            <h2>Halo, Selamat datang!</h2>
                            <p class="mb-0 text-white-80 fs-16">
                                Sistem pengelolaan layanan pendidikan Yayasan Baitul Muttaqin
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Peserta Didik</h4>
                </div>
                <div class="box-body">
                <h3>{{$datapeseradidik->nama}} | {{$datapeseradidik->nisn}}</h3>
                    <p>{{$datapeseradidik->sekolah->nama}}</p>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')

@endpush
