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
                            <li class="breadcrumb-item" aria-current="page">Anggota Rombongan Belajar</li>
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
                        <div class="row">
                            <div class="mb-2 col-xl-2 col-lg-2 col-md-2 col-12">
                                <a class="btn btn-sm btn-primary"  href="{{ route('backend.anggotarombel.create')}}" style="pointer='cursor'; width: 100%;">
                                    <i class="bi bi-plus me-2 fw-bold"></i>
                                    Tambah
                                </a>
                            </div>
                            <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                                <div class="form-group @error('tahunjaranId') has-error @enderror">
                                <h5 >Tahun Ajaran <span class="text-danger">*</span></h5>
                                <select class="form-control select2" style="width: 100%;" wire:model.live='tahunjaranId' name="tahunjaranId" id="tahunjaranId">
                                    <option value="" holder>Pilih Tahun Ajaran</option>
                                    @foreach ($tahunajaran as $item)
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
                            <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                                 <div class="form-group @error('semesterId') has-error @enderror">
                                <h5 >Semester <span class="text-danger">*</span></h5>
                                <select class="form-control select2" style="width: 100%;" wire:model.live='semesterId' name="semesterId" id="semesterId">
                                    <option value="" holder>Pilih Semester</option>
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
                            <div class="mb-2 col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="form-group @error('rombonganbelajarId') has-error @enderror">
                                <h5 >Nama Rombongan Belajar <span class="text-danger">*</span></h5>
                                <select class="form-control select2" style="width: 100%;" wire:model.live='rombonganbelajarId' name="rombonganbelajarId" id="rombonganbelajarId" >
                                    <option value="" holder>Pilih Rombongan Belajar</option>
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
                            <hr class="mt-2">
                        </div>
                        <div class="row">
                            <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                                <select wire:model.live="paginate" name="" id="" class="w-auto form-control-sm custom-select">
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
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                @if ($dataanggotarombel->count())
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
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            @foreach ($dataanggotarombel as $no =>  $item)
                                            <tr>
                                                <th class="text-right" scope="row">{{ $no + $dataanggotarombel->firstItem() }}</th>
                                                <td>
                                                    {{ !empty($item->pesertadidik_id) ? $item->pesertadidik->nama:'' }}
                                                </td>
                                                {{-- <td>
                                                    {{ !empty($item->semester_id) ? $item->semester->nama:'' }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->tingkatpendidikan_id) ? $item->tingkatpendidikan->nama:'' }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->ptk_id) ? $item->ptk->nama:'' }}
                                                </td> --}}
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3 row">
                                    <div class="col-xl-12 col-md-12 col-lg-12 col-12 ">
                                        @if ($dataanggotarombel->total() > 10)
                                        {{ $dataanggotarombel->links() }}
                                        @else
                                        Page : {{ $dataanggotarombel->currentPage() }} | Show {{ $dataanggotarombel->count() }} data
                                        of {{ $dataanggotarombel->total() }}
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
    @push('scripts')
	<script src="{{ asset('') }}assets/vendor_components/select2/dist/js/select2.full.js"></script>
    @endpush
</div>
