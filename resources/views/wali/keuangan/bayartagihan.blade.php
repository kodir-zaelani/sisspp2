@extends('layouts.appwali')

@section('content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">Bayar Tagihan</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('wali.dashboard') }}">
                                <i class="fa fa-home"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Transaksi</li>
                        <li class="breadcrumb-item active" aria-current="page">Bayar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Peserta Didik</h4>
                </div>
                <div class="box-body">
                    @if($bayarmidtrans->status == 'PENDING')
                    <button onclick="payment('{{ $bayarmidtrans->snap_token }}');" class="border-0 shadow-sm btn btn-lg btn-success fw-bold" title="Via Midtrans">Bayar Tagihan</button>
                    @endif
                    <h3>{{$bayarmidtrans->pesertadidik->nama}} | {{$bayarmidtrans->pesertadidik->nisn}}</h3>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
    function payment(n) {
        snap.pay(n, {
            onSuccess: function () {
                window.location = "/keuangan/pembayaran"
            },
            onPending: function () {
                window.location = "/keuangan/pembayaran"
            },
            onError: function () {
                window.location = "/keuangan/pembayaran"
            }
        })
    }
</script>
@endpush
