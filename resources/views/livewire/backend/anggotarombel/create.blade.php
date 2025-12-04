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
                        <div class="col-lg-6 col-md-6 col-12">
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
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
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
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group @error('jenispendaftaranId') has-error @enderror">
                                <h5 >Nama Jenis Pendaftaran <span class="text-danger">*</span></h5>
                                <select class="form-control select2" style="width: 100%;" wire:model.live='jenispendaftaranId' name="rombonganbelajar_id" id="rombonganbelajar_id" >
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
                    </div>

                    @if ($jenispendaftaranId)
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group @error('pesertadidik_id') has-error @enderror">
                                <h5 >Nama Peserta Didik <span class="text-danger">*</span></h5>
                                <select class="form-control select2" style="width: 100%;" wire:model='pesertadidikId' name="pesertadidik_id" id="pesertadidik_id" >
                                    <option value="" holder>Pilih Peserta Didik</option>
                                    @if (!empty($pesertadidik))
                                    @forelse ($pesertadidik as $item)
                                    <option value="{{ $item->id }}" {{ old('pesertadidik_id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->tahunajaran->tahun_ajaran_id }} | {{ $item->nama }}
                                    </option>
                                    @empty
                                    <option value="" disabled >Pilih Peserta Didik</option>
                                    @endforelse
                                    @endif
                                </select>
                                @error('pesertadidik_id')
                                <div class="form-control-feedback"><small>
                                    <code>{{ $message }}</code> </small>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @endif
                    <button class="btn btn-sm btn-primary"  wire:click.prevent="store">
                        <i class="fa fa-save me-2" aria-hidden="true"></i> Save
                    </button>
                </form>
                    <div class="row">
                        <div class="col">
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
                                                <th width="10%" scope="col">NISN</th>
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
                                            @foreach ($listanggotarombel as $no =>  $item)
                                            <tr>
                                                <th class="text-right" scope="row">{{ $no + $listanggotarombel->firstItem() }}</th>
                                                <td>
                                                    {{ !empty($item->pesertadidik_id) ? $item->pesertadidik->nisn:'' }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->pesertadidik_id) ? $item->pesertadidik->nama:'' }}
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
    </div>
