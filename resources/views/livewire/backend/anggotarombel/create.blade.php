<div>
    <x-flash-message/>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xl-12 col-12">
            <form enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group @error('tahunjaranId') has-error @enderror">
                            <h5 >Tahun Ajaran <span class="text-danger">*</span></h5>
                            <select class="form-select" style="width: 100%;" wire:model.live='tahunjaranId' name="tahunjaranId" id="tahunjaranId">
                                <option value="" holder>Pilih Tahun Ajaran</option>
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
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group @error('semesterId') has-error @enderror">
                            <h5 >Semester <span class="text-danger">*</span></h5>
                            <select class="form-select" style="width: 100%;" wire:model.live='semesterId' name="semesterId" id="semesterId">
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
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group @error('jenispendaftaranId') has-error @enderror">
                            <h5 >Nama Jenis Pendaftaran <span class="text-danger">*</span></h5>
                            <select class="form-select" style="width: 100%;" wire:model.live='jenispendaftaranId' name="jenispendaftaranId" id="jenispendaftaranId" >
                                <option value="" holder>Pilih Jenis Pendaftaran</option>
                                @foreach ($jenispendaftaran as $item)
                                <option value="{{ $item->id }}" {{ old('jenispendaftaranId') == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }}
                                </option>
                                @endforeach
                            </select>
                            @error('jenispendaftaranId')
                            <div class="form-control-feedback"><small>
                                <code>{{ $message }}</code> </small>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group @error('tigkatpendidikanId') has-error @enderror">
                            <h5 >Tingkat Pendidikan<span class="text-danger">*</span></h5>
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
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group @error('rombonganbelajarId') has-error @enderror">
                            <h5 >Nama Rombongan Belajar <span class="text-danger">*</span></h5>
                            <select class="form-select" style="width: 100%;" wire:model.live='rombonganbelajarId' name="rombonganbelajarId" id="rombonganbelajarId" >
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

                </div>

            </form>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="mt-4 box box-bordered border-primary">
                        <div class="box-header with-border">
                            Daftar Peserta Didik
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                                    <select wire:model.live="paginatepd" name="" id="" class="w-auto form-control-sm custom-select">
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
                                            <input type="search" wire:model.live.debounce.500ms="searchpd" class="form-control" wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch" class="float-right form-control" placeholder="Search by ...">
                                            <span class="input-group-text"><i class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                    @if ($pesertadidik->count())
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-hover">
                                            <tbody>
                                                <tr>
                                                    <th width="4%" scope="col">No</th>
                                                    @foreach ($headersTable as $key => $value)
                                                    <th scope="col" wire:click.prevent="sortBy('{{ $key }}')" style="cursor: pointer">
                                                        {{ $value }}
                                                        @if ($sortColumn == $key)
                                                        <span>{!! $sortDirection == 'asc' ? '&#8659':'&#8657' !!}</span>
                                                        @endif
                                                    </th>
                                                    @endforeach
                                                    <th scope="col">JK</th>
                                                    <th width="5%" scope="col">Action</th>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                @foreach ($pesertadidik as $no =>  $item)
                                                <tr>
                                                    <th class="text-right" scope="row">{{ $no + $pesertadidik->firstItem() }}</th>
                                                    <td>
                                                        {{ !empty($item->nama) ? $item->nama:'' }} <br/>
                                                        {{ !empty($item->nisn) ? $item->nisn:'' }}
                                                    </td>
                                                    <td>
                                                        {{ !empty($item->jenis_kelamin) ? $item->jenis_kelamin:'' }}
                                                    </td>
                                                    <td>
                                                        @if ($rombonganbelajarId)
                                                        <button wire:click="selectItem('{{ $item->id }}', 'addanggota')" class="btn btn-xs btn-success" title="Tambah Anggota Rombel"><span class="fw-bold"><i class="fa fa-plus"></i></span></button>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-3 row">
                                        <div class="col-xl-12 col-md-12 col-lg-12 col-12 ">
                                            @if ($pesertadidik->total() > 20)
                                            {{ $pesertadidik->links() }}
                                            @else
                                            Page : {{ $pesertadidik->currentPage() }} | Show {{ $pesertadidik->count() }} data
                                            of {{ $pesertadidik->total() }}
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
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="mt-4 box box-bordered border-primary">
                        <div class="box-header with-border">
                            Daftar Anggota Rombel
                        </div>
                        <div class="box-body">
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
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                    @if ($listanggotarombel->count())
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-hover">
                                            <tbody>
                                                <tr>
                                                    <th width="4%" scope="col">No</th>
                                                    @foreach ($headersTable as $key => $value)
                                                    <th scope="col" wire:click.prevent="sortBy('{{ $key }}')" style="cursor: pointer">
                                                        {{ $value }}
                                                        @if ($sortColumn == $key)
                                                        <span>{!! $sortDirection == 'asc' ? '&#8659':'&#8657' !!}</span>
                                                        @endif
                                                    </th>
                                                    @endforeach
                                                    <th scope="col">JK</th>
                                                    <th width="5%" scope="col">Action</th>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                @foreach ($listanggotarombel as $no =>  $item)
                                                <tr>
                                                    <th class="text-right" scope="row">{{ $no + $listanggotarombel->firstItem() }}</th>
                                                    <td>
                                                        {{ !empty($item->pesertadidik_id) ? $item->pesertadidik->nama:'' }}<br/>
                                                        {{ !empty($item->pesertadidik_id) ? $item->pesertadidik->nisn:'' }}
                                                    </td>
                                                    <td>
                                                        {{ !empty($item->pesertadidik_id) ? $item->pesertadidik->jenis_kelamin:'' }}
                                                    </td>
                                                    <td>
                                                        <button wire:click="selectItem('{{ $item->id }}', 'delete')" class="btn btn-xs btn-danger" title="Tambah Anggota Rombel"><span class="fw-bold"><i class="fa fa-trash"></i></span></button>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-3 row">
                                        <div class="col-xl-12 col-md-12 col-lg-12 col-12 ">
                                            @if ($listanggotarombel->total() > 10)
                                            {{ $listanggotarombel->links() }}
                                            @else
                                            Page : {{ $listanggotarombel->currentPage() }} | Show {{ $listanggotarombel->count() }} data
                                            of {{ $listanggotarombel->total() }}
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
</div>
