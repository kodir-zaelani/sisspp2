<div>
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">{{ $title}}</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="fa fa-home">
                                <span class="path1"></span><span class="path2"></span></i></a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Transasi</li>
                            <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-xl-8 col-md-8 col-lg-8 col-12">
                <div class="box box-bordered border-primary">
                    <div class="pb-0 mb-0 box-header with-border">
                        <div class="row">
                            <div class="mb-2 col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="form-group @error('tahunjaranId') has-error @enderror">
                                    <select class="form-select"  wire:model.live='tahunjaranId' name="tahunjaranId" id="tahunjaranId">
                                        <option value="" holder>Tahun Ajaran</option>
                                        @foreach ($tahunjarans as $item)
                                        <option value="{{ $item->id }}" {{ old('tahunjaranId') == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('tahunjaranId')
                                    <div class="form-control-feedback"><small>
                                        <code>{{ $message }}</code> </small>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-2 col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="form-group @error('semesterId') has-error @enderror">
                                    <select class="form-select"  wire:model.live='semesterId' wire:key="{{ $tahunjaranId }}" name="semesterId" id="semesterId">
                                        <option value="" holder>Semester</option>
                                        @foreach ($semester as $item)
                                        <option value="{{ $item->id }}" {{ old('semesterId') == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('semesterId')
                                    <div class="form-control-feedback"><small>
                                        <code>{{ $message }}</code> </small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-2 col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="form-group @error('tigkatpendidikanId') has-error @enderror">
                                    <select class="form-select"  wire:model.live='tigkatpendidikanId' name="tigkatpendidikanId" id="tigkatpendidikanId">
                                        <option value="" holder>Tingkat Pendidikan</option>
                                        @foreach ($tigkatpendidikan as $item)
                                        <option value="{{ $item->id }}" {{ old('tigkatpendidikanId') == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('tigkatpendidikanId')
                                    <div class="form-control-feedback"><small>
                                        <code>{{ $message }}</code> </small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2 col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="form-group @error('rombonganbelajarId') has-error @enderror">
                                    <select class="form-select"  wire:model.live='rombonganbelajarId' name="rombonganbelajarId" id="rombonganbelajarId">
                                        <option value="" holder>Rombongan Belajar</option>
                                        @foreach ($rombonganbelajar as $item)
                                        <option value="{{ $item->id }}" {{ old('rombonganbelajarId') == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('rombonganbelajarId')
                                    <div class="form-control-feedback"><small>
                                        <code>{{ $message }}</code> </small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @if ($rombonganbelajarId)
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group  @error('pesertadidikId') has-error @enderror">
                                    <h5 >Nama Peserta Didik <span class="text-danger">*</span></h5>
                                    <select class="form-select" style="width: 100%;" wire:model.live='pesertadidikId' name="pesertadidikId" id="pesertadidikId" >
                                        <option value="" holder>Pilih Peserta Didik</option>
                                        @if (!empty($anggotarombels))
                                        @forelse ($anggotarombels as $item)
                                        <option value="{{ $item->pesertadidik->id }}">
                                            {{ $item->pesertadidik->nisn }} | {{ $item->pesertadidik->nama }}
                                        </option>
                                        @empty
                                        <option value="" disabled >Pilih Peserta Didik</option>
                                        @endforelse
                                        @endif
                                    </select>
                                    @error('pesertadidikId')
                                    <div class="form-control-feedback"><small>
                                        <code>{{ $message }}</code> </small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                                <select wire:model.live="paginate" name="" id="" class="w-auto form-select-sm custom-select">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="mb-2 ms-auto col-md-5 col-lg-5 col-12 ">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="search" wire:model.live.debounce.500ms="search" class="form-control" wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch" class="float-right form-control" placeholder="Search by ...">
                                        <span class="input-group-text"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <x-flash-message/>
                        @if ($datatagihansiswa->count())
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover">
                                        <tbody>
                                            <tr>
                                                <th width="4%" scope="col">#</th>
                                                @foreach ($headersTable as $key => $value)
                                                <th scope="col" wire:click.prevent="sortBy('{{ $key }}')" style="cursor: pointer">
                                                    {{ $value }}
                                                    @if ($sortColumn == $key)
                                                    <span>{!! $sortDirection == 'asc' ? '&#8659':'&#8657' !!}</span>
                                                    @endif
                                                </th>
                                                @endforeach
                                                <th scope="col">Tagihan | Periode</th>
                                                <th scope="col">Besaran</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            @foreach ($datatagihansiswa as $no =>  $item)
                                            <tr>
                                                <th class="text-right" scope="row">{{ $no + $datatagihansiswa->firstItem() }}</th>
                                                <td>
                                                    {{ !empty($item->pesertadidik_id) ? $item->pesertadidik->nama:'' }}<br/>
                                                    {{ $item->pesertadidik->nisn }}
                                                </td>
                                                <td>
                                                    {{ $item->jenistagihan->nama }} |  {{ $item->periode_bulan }} <br/>
                                                    {!! $item->statuslabel !!}
                                                </td>
                                                <td>
                                                    {{ $item->nilai_tagihan }}
                                                </td>
                                                <td>
                                                    <button wire:click="selectItem('{{ $item->id }}', 'bayartagihan')" class="btn btn-xs btn-primary" title="Tambah Pembayaran">
                                                        <span class="fw-bold"><i class="fa fa-plus"></i> Tambah</span>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12 ">
                                @if ($datatagihansiswa->total() > 10)
                                {{ $datatagihansiswa->links() }}
                                @else
                                Page : {{ $datatagihansiswa->currentPage() }} | Show {{ $datatagihansiswa->count() }} data
                                of {{ $datatagihansiswa->total() }}
                                @endif
                            </div>
                        </div>
                        @else
                        <h2 style="color: red" class="text-center">Data not available</h2>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-lg-4 col-12">
                <div class="box box-bordered border-success">
                    <div class="box-header with-border">
                        <h4>Transaksi Tagihan</h4>
                    </div>
                    @if ($datadetailtempinvoice->count())
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover">
                                        <tbody>
                                            @php
                                            $total = 0;
                                            @endphp
                                            @foreach ($datadetailtempinvoice as $no =>  $item)
                                            <tr >
                                                <td colspan='2'>
                                                    {{$item->tagihansiswa->pesertadidik->nama}}<br/>
                                                    {{ !empty($item->tagihansiswa_id) ? $item->tagihansiswa->jenistagihan->nama:'' }} | bulan ke {{ $item->periode_bulan }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">
                                                        {{ $item->nilai_tagihan }}
                                                    </span>
                                                </td>
                                                <td width="4%" class="text-end">
                                                    <button wire:click="selectItem('{{ $item->id }}', 'delete')" class="btn btn-xs btn-danger" title="Hapus">
                                                        <span class="fw-bold"><i class="fa fa-trash"></i></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            @php
                                            $total = $total + $item->nilai_tagihan;
                                            @endphp
                                            @endforeach
                                            <tr>
                                                <td colspan="2">
                                                    <h4 class="fw-bold"> Total : </h4>
                                                    <h2 class="fw-bold">
                                                        @php
                                                        echo $total;
                                                        @endphp
                                                    </h2>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Catatan" id="floatingTextarea" wire:model='note'></textarea>
                                    <label for="floatingTextarea">Catatan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-end no-border">
                        <button wire:click="checkout" class="btn btn-primary" title="Check Out">
                            <span class="fw-bold">Check Out</span>
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
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
    </section>

</div>
@push('scripts')
<script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
    function payment(n) {
        snap.pay(n, {
            onSuccess: function () {
                window.location = "/backend/transaksi"
            },
            onPending: function () {
                window.location = "/backend/transaksi"
            },
            onError: function () {
                window.location = "/backend/transaksi"
            }
        })
    }
</script>
@endpush
