<div>
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Keuangan</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('wali.dashboard')}}"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Keuangan</li>
                            <li class="breadcrumb-item active" aria-current="page">Keranjang Bayar</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <section class="content">

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="box">
                    <div class="box-header bg-primary">
                        <h4 class="box-title">Order Pembarayan ({{$datadetailtempinvoice->count()}} Item)</h4>
                    </div>

                    <div class="box-body">
                        <x-flash-message/>

                        @if ($datadetailtempinvoice->count())
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                    <tr>
                                        <th>Nama / NISN</th>
                                        <th>Tagihan / Periode</th>
                                        <th>Nilai Tagihan</th>
                                        <th style="text-align:center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $total = 0;
                                    @endphp
                                    @foreach ($datadetailtempinvoice as $no =>  $item)
                                    <tr >
                                        <td>
                                            {{$item->tagihansiswa->pesertadidik->nama}}<br/>
                                            {{$item->tagihansiswa->pesertadidik->nisn}}<br/>

                                        </td>
                                        <td>
                                            {{ !empty($item->tagihansiswa_id) ? $item->tagihansiswa->jenistagihan->nama:'' }}<br/>
                                            bulan ke {{ $item->periode_bulan }}
                                        </td>
                                        <td>
                                            <span class="fw-bold">
                                                {{ $item->nilai_tagihan }}
                                            </span>
                                        </td>
                                        <td align="center">
                                            <button wire:click="selectItem('{{ $item->id }}', 'delete')" class="btn btn-circle btn-danger btn-xs" title="" data-bs-toggle="tooltip" data-bs-original-title="Hapus">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @php
                                    $total = $total + $item->nilai_tagihan;
                                    @endphp
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        @else
                        <h2 class="text-danger">Belum ada data order bayar!</h2>
                        @endif

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="box">
                    <div class="box-header bg-info">
                        <h4 class="box-title">Rekap Keranjang</h4>
                    </div>

                    @if ($datadetailtempinvoice->count())
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table mb-0 simple">
                                <tbody>
                                    <tr>
                                        <td>Total</td>
                                        <td class="text-end fw-700">
                                            @php
                                            echo $total;
                                            @endphp
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Potongan</td>
                                        <td class="text-end fw-700">
                                            <span class="text-danger me-15">sesuai persyaratan</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="bt-1">Grand Total</th>
                                        <th class="bt-1 text-end fw-900 fs-18">
                                            @php
                                            echo $total;
                                            @endphp
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                         <div class="form-floating">
                                    <textarea class="form-control" placeholder="Catatan" id="floatingTextarea" wire:model='note'></textarea>
                                    <label for="floatingTextarea">Catatan</label>
                                </div>
                    </div>
                    <div class="box-footer">
                        {{-- <button class="btn btn-danger" wire:click='bataltransaksi'>Batal</button> --}}
                        <button class="btn btn-success pull-right" wire:click="checkout" ><i class="fa fa-shopping-cart"></i> Checkout</button>
                    </div>
                    @endif
                </div>

            </div>

        </div>

    </section>

    <div class="modal center-modal fade" id="modalFormDelete" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- Selected Item {{ $selectedItem }} --}}
                    <p><h3>Do you wish to continue?</h3></p>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click="delete" class="btn btn-primary float-end">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal center-modal fade" id="modalCheckout" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Chekout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><h3>Do you wish to continue?</h3></p>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click="prosescheckout" class="btn btn-primary float-end">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal center-modal fade" id="modalFormDeleteAll" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus transaksi</h5>
                </div>
                <div class="modal-body">
                    <p>
                        <h3>Apakah yakin membatalkan transaksi ini?</h3>
                    </p>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click="deleteRecords()" class="btn btn-primary float-end">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>
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
