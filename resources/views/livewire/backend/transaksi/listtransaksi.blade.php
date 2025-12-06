<div>
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">{{ $title}}</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('backend.dashboard') }}">
                                    <i class="fa fa-home"><span class="path1"></span><span class="path2"></span></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
                            <li class="breadcrumb-item active" aria-current="page">List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                <div class="box box-bordered border-primary">
                    <div class="pb-0 mb-0 box-header with-border">
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
                    </div>
                    <div class="box-body">
                        <x-flash-message/>
                        @if ($datainvoice->count())
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
                                                <th scope="col">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            @foreach ($datainvoice as $no =>  $item)
                                            <tr>
                                                <th class="text-right" scope="row">{{ $no + $datainvoice->firstItem() }}</th>
                                                <td>
                                                    {{ !empty($item->invoice) ? $item->invoice :'' }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->pesertadidik_id) ? $item->pesertadidik->nama :'' }}<br/>
                                                    {{ $item->pesertadidik->nisn }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->total_amount) ? $item->formatRupiah('total_amount') :'' }}
                                                </td>
                                                <td>
                                                    {{ $item->tanggalbayar}}
                                                </td>
                                                <td>
                                                    <span class="fw-bold">
                                                        {{ !empty($item->status) ? $item->status :'' }}
                                                    </span>
                                                </td>
                                                <td>
                                                    @if($item->status == 'PENDING')
                                                    <button wire:click="selectItem('{{ $item->id }}', 'edit')" class="btn btn-sm btn-warning" title="Edit Transaksi">
                                                        <span class="fw-bold"><i class="fa fa-pencil"></i></span>
                                                    </button>
                                                    <button  class="border-0 shadow-sm btn btn-sm btn-info fw-bold" title="Pembayaran Tunai">Tunai</button>
                                                    <button onclick="payment('{{ $item->snap_token }}');" class="border-0 shadow-sm btn btn-sm btn-success fw-bold" title="Via Midtrans">Midtrans</button>
                                                    @endif
                                                    @can('delete Invoice  hahaha')
                                                    <button wire:click="selectItem('{{ $item->id }}' , 'delete')" class="mx-1 my-1 btn btn-xs btn-danger" title="Send to Trash">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    @endcan
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="accordion accordion-flush" id="accordionFlushExample-{{$item->id}}">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{$item->id}}" aria-expanded="false" aria-controls="flush-collapseOne-{{$item->id}}">
                                                                    Detail <span class="fw-bold ms-5 text-end"> Total : {{ !empty($item->total_amount) ? $item->formatRupiah('total_amount') :'' }}</span>
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne-{{$item->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample-{{$item->id}}">
                                                                <div class="accordion-body">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="table-responsive">
                                                                                <table class="table mb-0 table-hover">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th scope="col">Nama Tagihan</th>
                                                                                            <th scope="col"> Periode bulan </th>
                                                                                            <th scope="col">Nilai</th>
                                                                                            <th scope="col">Status</th>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                    <tbody>
                                                                                        @foreach ($item->detailinvoices()->get() as $detail)
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                @if ($datainvoice->total() > 10)
                                {{ $datainvoice->links() }}
                                @else
                                Page : {{ $datainvoice->currentPage() }} | Show {{ $datainvoice->count() }} data
                                of {{ $datainvoice->total() }}
                                @endif
                            </div>
                        </div>
                        @else
                        <h2 style="color: red" class="text-center">Data not available</h2>
                        @endif
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
                window.location = "/backend/transaksi/list"
            },
            onPending: function () {
                window.location = "/backend/transaksi/list"
            },
            onError: function () {
                window.location = "/backend/transaksi/list"
            }
        })
    }
</script>
@endpush
