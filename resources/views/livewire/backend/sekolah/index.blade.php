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
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="{{ route('backend.sekolah.index') }}">
                                    Satuan Pendidikan
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <x-flash-message/>
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        @if ($statusCreate == true)
                        <h4 class="box-tile">Tambah Data</h4>
                        <div class="box-controls pull-right">
                            <button class="btn btn-sm btn-info" wire:click='cancelEdit'>Batal</button>
                        </div>
                        @elseif ($statusUpdate == true)
                        <h4 class="box-tile">Edit Data</h4>
                        <div class="box-controls pull-right">
                            <button class="btn btn-sm btn-info" wire:click='cancelEdit'>Batal</button>
                        </div>
                        @elseif ($statusView == true)
                        <h4 class="box-tile">{{$sekolah->nama}}</h4>
                        <div class="box-controls pull-right">
                            <button class="btn btn-sm btn-info" wire:click='cancelEdit'>Batal</button>
                            <button wire:click="edit('{{ $sekolah->id }}')" class="btn btn-sm btn-warning me-3" title="Edit"><i class="fa fa-edit "></i> Edit</button>
                            <a href="{{route('backend.sekolah.export')}}" class="btn btn-sm btn-success me-3" title="Export"><i class="fa fa-file "></i> Export</a>
                        </div>
                        @else
                        <div class="row">
                            <div class=" col-xl-3 col-lg-3 col-md-3 col-12">
                                <select wire:model.live="paginate" name="" id="" class="w-auto form-control-sm custom-select">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <a class="btn btn-sm btn-primary ms-3"  href="{{ route('backend.sekolah.create')}}" style="pointer='cursor';">
                                    <i class="bi bi-plus me-2 fw-bold"></i>
                                    Tambah Data
                                </a>
                            </div>
                            <div class=" ms-auto col-md-5 col-lg-5 col-12">
                                <div class="form-group">
                                    <div class="mb-3 input-group">
                                        <input type="search" wire:model.live.debounce.500ms="search" class="form-control" wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch" class="float-right form-control" placeholder="Search by ...">
                                        <span class="input-group-text"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    {{-- @if ($statusCreate == true)
                    @include('livewire.backend.sekolah.create')
                    @elseif ($statusUpdate == true)
                    @include('livewire.backend.sekolah.edit')
                    @else
                    @include('livewire.backend.sekolah.list')
                    @endif --}}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                @if ($datasekolah->count())
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
                                                <th>Action</th>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            @foreach ($datasekolah as $no =>  $item)
                                            <tr>
                                                <th class="text-right" scope="row">{{ $no + $datasekolah->firstItem() }}</th>
                                                <td>
                                                    {{ !empty($item->npsn) ? $item->npsn:'' }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->nama) ? $item->nama:'' }}
                                                </td>
                                                <td>
                                                    @if ($item->status_sekolah == 1)
                                                    <span class="text-primary">Negeri</span>
                                                    @elseif ($item->status_sekolah == 2)
                                                    <span class="text-success">Swasta</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ !empty($item->city_code) ? $item->city->name:'' }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->bentukpendidikan_id) ? $item->bentukpendidikan->nama:'' }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->statuskepemilikan_id) ? $item->statuskepemilikan->nama:'' }}
                                                </td>
                                                <td class="text-center align-midle">
                                                    <button wire:click="edit('{{ $item->id }}')" class="btn btn-xs btn-warning me-2" title="Edit"><i class="fa fa-edit "></i></button>
                                                    <button wire:click="selectItem('{{ $item->id }}' , 'delete')" class="mx-1 my-1 btn btn-xs btn-danger" title="Send to Trash">
                                                        <i class="fa fa-trash "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3 row">
                                    <div class="col-xl-12 col-md-12 col-lg-12 col-12 ">
                                        @if ($datasekolah->total() > 10)
                                        {{ $datasekolah->links() }}
                                        @else
                                        Page : {{ $datasekolah->currentPage() }} | Show {{ $datasekolah->count() }} data
                                        of {{ $datasekolah->total() }}
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
            </div>
        </div>
    </section>
    <div class="modal center-modal fade" id="modalFormDelete" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send to Trash Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        <h3>Do you wish to continue?</h3>
                    </p>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button wire:click="delete" class="btn btn-primary float-end">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('styles')
<link rel="stylesheet"
href="{{ asset('') }}assets/vendor_plugins/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
@endpush
@push('scripts')
<script src="{{ asset('') }}assets/vendor_plugins/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
<script src="{{ asset('') }}assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="{{ asset('') }}assets/vendor_components/select2/dist/js/select2.full.js"></script>
@endpush
