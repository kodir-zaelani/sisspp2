@extends('layouts.appwali-pdf')

@section('content')
<section class="invoice printableArea">
    <div class="row">
        <div class="col-12">
            <div class="page-header">
                <h2 class="d-inline"><span class="fs-30">Invoice</span></h2>
                <p>#{{$invoice->invoice}}</p>
                <span><b>Tanggal Bayar:</b> {{$invoice->tanggalbayar}} | <b>ID:</b> {{$invoice->id}}</span>
                <div class="pull-right text-end">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table style="width: 100%;">
                <tr>
                    <td style="width=50%; align=left;">
                        <strong>Dari</strong>
                        <address>
                            <strong class="text-blue fs-18">{{$invoice->rombonganbelajar->sekolah->nama}}</strong><br>
                            <strong class="d-inline">{{$invoice->rombonganbelajar->sekolah->alamat}}, RT {{$invoice->rombonganbelajar->sekolah->rt}} </strong><br>
                            <strong>Phone: {{$invoice->rombonganbelajar->sekolah->no_telp}}  &nbsp;&nbsp;&nbsp;&nbsp; Email: {{$invoice->rombonganbelajar->sekolah->email}}</strong>
                        </address>
                    </td>
                    <td style="width=50%; align=right;">
                        <strong>Kepada</strong>
                        <address>
                            <strong class="text-blue fs-18">{{$invoice->pesertadidik->nama}}</strong><br>
                            {{$invoice->rombonganbelajar->tingkatpendidikan->nama}} / {{$invoice->rombonganbelajar->nama}}<br>
                            <strong>{{$invoice->semester->nama}}</strong>
                        </address>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr border: 1px solid >
                        <th scope="col" align="center">#</th>
                        <th scope="col" align="center">Nama Tagihan</th>
                        <th scope="col" align="center"> Periode bulan </th>
                        <th scope="col" align="center">Status</th>
                        <th scope="col" align="center">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoice->detailinvoices()->get() as $detail)
                    <tr>
                        <td align="right">
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $detail->tagihansiswa->jenistagihan->nama }}
                        </td>
                        <td align="center">
                            {{ $detail->periode_bulan }}
                        </td>
                        <td>
                            {{ $detail->tagihansiswa->statusbayar }}
                        </td>
                        <td align="right">
                            {{ $detail->nilai_tagihan }}
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" align="right"><h3><b>Total :</b> </h3></td>
                        <td align="right"><h3><b> {{$invoice->total_amount}}</b></h3></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        {{-- {{$qrcode}} --}}
        </div>
    </div>
</section>
@endsection
@push('styles')
<style>
    table {
        width: 80%;
        border-collapse: collapse;
        margin: 20px auto;
    }
    th, td {
        border: 1px solid #000;
        padding: 10px;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #d1e7dd;
    }
</style>
@endpush

