<div>
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Invoice</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('wali.dashboard')}}"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Invoice</li>
                            <li class="breadcrumb-item active" aria-current="page">Invoice Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <section class="invoice printableArea">
        <div class="row">
            <div class="col-12">
                <div class="bb-1 clearFix">
                    <div class="text-end pb-15">
                        <button class="btn btn-success" type="button"> <span><i class="fa fa-print"></i> Save</span> </button>
                        <button id="print2" class="btn btn-warning" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="page-header">
                    <h2 class="d-inline"><span class="fs-30">Invoice</span></h2>
                    <div class="pull-right text-end">
                        {{-- <h3>{{$invoice->tanggalbayar}}</h3> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row invoice-info">
            <div class="col-md-6 invoice-col">
                <strong>Dari</strong>
                <address>
                    <strong class="text-blue fs-24">{{$invoice->rombonganbelajar->sekolah->nama}}</strong><br>
                    <strong class="d-inline">{{$invoice->rombonganbelajar->sekolah->alamat}}, RT {{$invoice->rombonganbelajar->sekolah->rt}} </strong><br>
                    <strong>Phone: {{$invoice->rombonganbelajar->sekolah->no_telp}}  &nbsp;&nbsp;&nbsp;&nbsp; Email: {{$invoice->rombonganbelajar->sekolah->email}}</strong>
                </address>
            </div>
            <div class="col-md-6 invoice-col text-end">
                <strong>Kepada</strong>
                <address>
                    <strong class="text-blue fs-24">{{$invoice->pesertadidik->nama}}</strong><br>
                    {{$invoice->rombonganbelajar->tingkatpendidikan->nama}} / {{$invoice->rombonganbelajar->nama}}<br>
                    <strong>{{$invoice->semester->nama}}</strong>
                </address>
            </div>
            <div class="col-sm-12 invoice-col mb-15">
                <div class="invoice-details row no-margin">
                    <div class="col-md-6 col-lg-3"><b>Invoice: </b>#{{$invoice->invoice}}</div>
                    <div class="col-md-6 col-lg-3"><b>Tanggal Bayar:</b> {{$invoice->tanggalbayar}}</div>
                    <div class="col-md-6 col-lg-6"><b>ID:</b> {{$invoice->id}}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama Tagihan</th>
                            <th scope="col"> Periode bulan </th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice->detailinvoices()->get() as $detail)
                        <tr>
                            <td>
                                {{ $detail->tagihansiswa->jenistagihan->nama }}
                            </td>
                            <td>
                                {{ $detail->periode_bulan }}
                            </td>
                            <td>
                                {{ $detail->nilai_tagihan }}
                            </td>
                            <td>
                                {{ $detail->tagihansiswa->statusbayar }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-8 text-start">
                <p>{{$invoice->note}}</p>
            </div>
            <div class="col-4 text-end">
                <div class="total-payment">
                    <h3><b>Total :</b> {{$invoice->total_amount}}</h3>
                </div>
            </div>
        </div>
    </section>
</div>
