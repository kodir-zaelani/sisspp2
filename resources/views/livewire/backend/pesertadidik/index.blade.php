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
                                <a href="{{ route('backend.pesertadidik.index')}}">Peserta Didik</a>
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
        @if (isset($errors) && $errors->any())
        <div class="row">
            <div class="col">
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <select wire:model.live="paginate" name="" id="" class="w-auto form-control-sm custom-select">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <div class="box-controls pull-right">
                            <div class="box-header-actions">
                                <div class="lookup lookup-sm lookup-right d-lg-block">
                                    <input type="search" wire:model.live.debounce.500ms="search" wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch" placeholder="Search">
                                </div>
                                <a class="btn btn-sm btn-primary ms-2 d-lg-block d-none" title="Import data"  href="{{ route('backend.pesertadidik.create')}}" style="pointer='cursor';">
                                    <i class="bi bi-plus fw-bold"></i>
                                    Import Data
                                </a>
                                <a class="btn btn-sm btn-primary ms-2 d-block d-lg-none" title="Import data"  href="{{ route('backend.pesertadidik.create')}}" style="pointer='cursor';">
                                    <i class="bi bi-plus fw-bold"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="mb-2 row">
                            <div class="col-xl-4 col-md-4 col-lg-4 col-12">
                                @if ($checked)
                                <div class="mb-5 btn-group">
                                    <button type="button" class="waves-effect waves-light btn btn-info">
                                        With Checked ({{ count($checked) }})
                                    </button>
                                    <button type="button" class="waves-effect waves-light btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalFormDeleteAll">
                                            Delete Selected
                                        </a>
                                        {{-- <a href="#" class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalFormExportExcel">
                                            Export Excel
                                        </a>
                                        <a href="#" class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalFormExportPDF">
                                            Export PDF
                                        </a> --}}
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="col-xl-8 col-md-8 col-lg-8 col-12">
                                @if ($selectPage)
                                @if ($selectAll)
                                <div>
                                    You have selected all <strong>{{ $datapesertadidik->total() }}</strong>
                                    items.
                                </div>
                                @else
                                <div>
                                    You have selected <strong>{{ count($checked) }}</strong> items, Do you
                                    want to Select All
                                    <strong>{{ $datapesertadidik->total() }}</strong>?
                                    <a href="#" class="ml-2" wire:click="selectAll">Select All</a>
                                </div>
                                @endif
                                @endif

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                @if ($datapesertadidik->count())
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover b-1 border-success">
                                        <thead class="bg-success">
                                            <tr>
                                                <th width="4%" scope="col">#</th>
                                                <th width="4%" scope="col"></th>
                                                @foreach ($headersTable as $key => $value)
                                                <th scope="col" wire:click.prevent="sortBy('{{ $key }}')" style="cursor: pointer">
                                                    {{ $value }}
                                                    @if ($sortColumn == $key)
                                                    <span>{!! $sortDirection == 'asc' ? '&#8659':'&#8657' !!}</span>
                                                    @endif
                                                </th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datapesertadidik as $no =>  $item)
                                            <tr>
                                                <th class="text-right" scope="row">{{ $no + $datapesertadidik->firstItem() }}</th>
                                                <td>
                                                    <a href="#" class="btn btn-xs btn-primary"><i class="bi bi-search"></i></a>
                                                </td>
                                                <td>
                                                    {{ Str::title(!empty($item->nama) ? $item->nama:'') }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->nisn) ? $item->nisn:'' }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->nipd) ? $item->nipd:'' }}
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3 row">
                                    <div class="col-xl-12 col-md-12 col-lg-12 col-12 ">
                                        @if ($datapesertadidik->total() > 10)
                                        {{ $datapesertadidik->links() }}
                                        @else
                                        Page : {{ $datapesertadidik->currentPage() }} | Show {{ $datapesertadidik->count() }} data
                                        of {{ $datapesertadidik->total() }}
                                        @endif
                                    </div>

                                </div>
                                @else
                                <hr>
                                <h2 style="color: red" class="text-center">@yield('title') not available</h2>
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
                    <h5 class="modal-title">Delete Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- Selected Item {{ $selectedItem }} --}}
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
    <div class="modal center-modal fade" id="modalFormDeleteAll" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Selected Item</h5>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body">
                    <p>
                        <h3>Are you sure you want to delete these Selected Records?</h3>
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
