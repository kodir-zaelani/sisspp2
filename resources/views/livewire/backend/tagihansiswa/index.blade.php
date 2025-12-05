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
                            <li class="breadcrumb-item" aria-current="page">Tagihan Siswa</li>
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
                            <div class="mb-2 col-xl-1 col-lg-1 col-md-1 col-12">
                                <a class="btn btn-sm btn-primary"  href="{{ route('backend.transaksi.index')}}" style="pointer='cursor'; width: 100%;">
                                    Bayar
                                </a>
                            </div>
                            <div class="mb-2 col-xl-2 col-lg-2 col-md-2 col-12">
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
                            <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                                <div class="form-group @error('semesterId') has-error @enderror">
                                    <select class="form-select"  wire:model.live='semesterId' wire:key="{{ $tahunjaranId }} name="semesterId" id="semesterId">
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
                            <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
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
                            <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                                <div class="form-group @error('rombonganbelajarId') has-error @enderror">
                                    <select class="form-select"  wire:model.live='rombonganbelajarId' name="rombonganbelajarId" id="rombonganbelajarId" >
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
                            {{-- <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <select class="form-select"  wire:model.live='filter'>
                                        <option value="" holder>Semua Jenis Tagihan</option>
                                        @foreach ($jenistagihans as $item)
                                        <option value="{{ $item->nama }}" >
                                            {{ $item->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
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
                        @if (!empty($rombonganbelajarId))
                        @if ($datatagihansiswa->count())
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover">
                                        <tbody>
                                            <tr>
                                                <th width="4%" scope="col">#</th>
                                                <th width="10%" scope="col">NISN</th>
                                                @foreach ($headersTable as $key => $value)
                                                <th scope="col" wire:click.prevent="sortBy('{{ $key }}')" style="cursor: pointer">
                                                    {{ $value }}
                                                    @if ($sortColumn == $key)
                                                    <span>{!! $sortDirection == 'asc' ? '&#8659':'&#8657' !!}</span>
                                                    @endif
                                                </th>
                                                @endforeach
                                                <th width="5%" scope="col">Jenis Tagihan</th>
                                                <th scope="col">Periode Bulan</th>
                                                <th width="5%" scope="col">Besaran</th>
                                                <th width="5%" scope="col">Status</th>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            @foreach ($datatagihansiswa as $no =>  $item)
                                            <tr>
                                                <th class="text-right" scope="row">{{ $no + $datatagihansiswa->firstItem() }}</th>
                                                <td>
                                                    {{ $item->pesertadidik->nisn }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->pesertadidik_id) ? $item->pesertadidik->nama:'' }}
                                                </td>
                                                <td>
                                                    {{ $item->jenistagihan->nama }}
                                                </td>
                                                <td>
                                                    {{ $item->periode_bulan }}
                                                </td>
                                                <td>
                                                    {{ $item->nilai_tagihan }}
                                                </td>
                                                <td>
                                                    {!! $item->statuslabel !!}
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
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
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
