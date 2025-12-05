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
                                                <th scope="col">Aksi</th>
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
                                                    {{ $item->total_amount }}
                                                </td>
                                                <td>
                                                    {{ $item->status }}
                                                </td>
                                                <td>
                                                    @if($item->status == 'PENDING')
                                                    <button onclick="payment('{{ $item->snap_token }}');" class="border-0 shadow-sm btn btn-sm btn-success">Pay</button>
                                                    @endif
                                                    {{-- <button  class="btn btn-sm btn-success" title="Bayar ">
                                                        <span class="fw-bold"><i class="fa fa-plus"></i> Bayar Via Midtrans</span>
                                                    </button> --}}
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
