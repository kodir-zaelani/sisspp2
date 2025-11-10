@extends('layouts.appb')
@section('content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">{{$title}}</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.dashboard') }}">
                                <i class="fa fa-home"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.ptk.index') }}">
                                PTK
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box box-bordered border-success">
                <div class="box-body">
                    <form action="{{ route('backend.ptk.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="importfile" class="form-control @error('importfile') is-invalid @enderror" required>
                        @error('importfile')
                        <div class="form-control-feedback">
                            <small> <code>{{ $message }}</code> </small>
                        </div>
                        @enderror
                        <button type="submit" class="mt-3 btn btn-primary btn-sm">Import</button>
                    </form>
                    <div class="py-20">
                        Silahkan unduh Template  file spreadsheet terlebih dahulu <a class="btn btn-info btn-sm ms-3" href="{{asset('')}}uploads/files/templates/1 data_sekolah.xlsx" >Template</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <form id="post-form" enctype="multipart/form-data" action="{{ route('backend.sekolah.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Tambah Data Sekolah</h4>
                        <div class="box-controls pull-right">
                            <input type="text" name="status_yayasan_update" id="status_yayasan_update" hidden>
                            <input type="text" name="fresh_site" id="fresh_site" hidden>
                            <button id="publish-btn" type="submit"class="btn btn-sm btn-primary">
                                Publish
                            </button>
                        </div>
                    </div>

                    <div class="box-body">

                        <ul class="nav nav-tabs customtab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up">
                                    <i class="ion-home"></i></span> <span class="hidden-xs-down">General</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#contacinfo" role="tab"><span class="hidden-sm-up">
                                    <i class="ion-email"></i></span> <span class="hidden-xs-down">Contac Info</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#logo7" role="tab"><span class="hidden-sm-up">
                                    <i class="ion-email"></i></span> <span class="hidden-xs-down">Logo</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#maps7" role="tab"><span class="hidden-sm-up">
                                    <i class="ion-email"></i></span> <span class="hidden-xs-down">Peta</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#bank-npwp" role="tab"><span class="hidden-sm-up">
                                    <i class="ion-email"></i></span> <span class="hidden-xs-down">Bank & NPWP</span>
                                </a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home7" role="tabpanel">
                                <div class="p-15">
                                    <div class="box">
                                        <div class="box-header">
                                            <h4 class="box-title">
                                                General
                                            </h4>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <h5>NSS <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="nss" class="form-control @error('nss') is-invalid @enderror" value="{{ old('nss') }}" placeholder="Nomor Statistik Sekolah" required>
                                                </div>
                                                @error('nss')
                                                <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <h5>NPSN <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="npsn" class="form-control @error('npsn') is-invalid @enderror" value="{{ old('npsn') }}" placeholder="NPSN" required>
                                                </div>
                                                @error('npsn')
                                                <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <h5>Nama Sekolah <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Nama Sekolah" required>
                                                </div>
                                                @error('nama')
                                                <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <h5>Nomor SK Pendirian <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="url" name="sk_pendirian_sekolah" class="form-control @error('sk_pendirian_sekolah') is-invalid @enderror" value="{{ old('sk_pendirian_sekolah') }}" placeholder="Nomor Sk Pendiriran" required>
                                                </div>
                                                @error('sk_pendirian_sekolah')
                                                <div class="form-control-feedback"><small>
                                                    <code>{{ $message }}</code> </small>
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <h5>Tanggal Pendirian <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="tanggal_pendirian_sekolah" class="form-control @error('tanggal_pendirian_sekolah') is-invalid @enderror" value="{{ old('tanggal_pendirian_sekolah') }}" placeholder="Tanggal Pendirian" required>
                                                </div>
                                                <div class="form-control-feedback"><small><code>Tangal/bulan/Tahun | 30/01/2000</code></small>
                                                </div>
                                                @error('tanggal_pendirian_sekolah')
                                                <div class="form-control-feedback"><small>
                                                    <code>{{ $message }}</code> </small>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="form-group @error('bentukpendidikan_id') has-error @enderror">
                                                        <h5 >Bentuk Pendidikan <span class="text-danger">*</span></h5>
                                                        <select class="form-control select2" style="width: 100%;" name="bentukpendidikan_id" id="bentukpendidikan_id">
                                                            <option value="" holder>Pilih Bentuk Pendidikan</option>
                                                            @foreach ($databentukpendidikan as $item)
                                                            <option value="{{ $item->id }}" {{ old('bentukpendidikan_id') == $item->id ? 'selected' : '' }}>
                                                                {{ $item->nama }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('bentukpendidikan_id')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="form-group @error('jenjangpendidikan_id') has-error @enderror">
                                                        <h5 >Jenjang Pendidikan <span class="text-danger">*</span></h5>
                                                        <select class="form-control select2" style="width: 100%;" name="jenjangpendidikan_id">
                                                            <option value="" holder>Pilih Jenjang Pendidikan</option>
                                                            @foreach ($datajenjangpendidikan as $item)
                                                            <option value="{{ $item->id }}" {{ old('jenjangpendidikan_id') == $item->id ? 'selected' : '' }}>
                                                                {{ $item->nama }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('jenjangpendidikan_id')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <div class="form-group @error('statuskepemilikan_id') has-error @enderror">
                                                        <h5 >Status Kepemilikan <span class="text-danger">*</span></h5>
                                                        <select class="form-control select2" style="width: 100%;" name="statuskepemilikan_id">
                                                            <option value="" holder  >Pilih Status Kepemilikan</option>
                                                            @foreach ($datakepemilikan as $item)
                                                            <option value="{{ $item->id }}" {{ old('statuskepemilikan_id') == $item->id ? 'selected' : '' }}>
                                                                {{ $item->nama }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('statuskepemilikan_id')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <div class="form-group @error('status_sekolah') has-error @enderror">
                                                        <h5 >Status Sekolah <span class="text-danger">*</span></h5>
                                                        <select class="form-control select2" style="width: 100%;" name="status_sekolah">
                                                            <option value="" holder  >Pilih Status Sekolah</option>
                                                            <option value="1" {{ old('status_sekolah') == 1 ? 'selected' : '' }}>
                                                                Negeri
                                                            </option>
                                                            <option value="2" {{ old('status_sekolah') == 2 ? 'selected' : '' }}>
                                                                Swasta
                                                            </option>
                                                        </select>
                                                        @error('status_sekolah')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <div class="form-group @error('kebutuhankhusus_id') has-error @enderror">
                                                        <h5 >Kebutuhan Khusus dilayani <span class="text-danger">*</span></h5>
                                                        <select class="form-control select2" style="width: 100%;" name="kebutuhankhusus_id">
                                                            <option value="" holder  >Pilih Kebutuhan Khusus</option>
                                                            @foreach ($kebutuhankhusus as $item)
                                                            <option value="{{ $item->id }}" {{ old('kebutuhankhusus_id') == $item->id ? 'selected' : '' }}>
                                                                {{ $item->kebutuhan_khusus }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('kebutuhankhusus_id')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="contacinfo" role="tabpanel">
                                <div class="p-15">
                                    <div class="box">
                                        <div class="box-header">
                                            <h4 class="box-title">
                                                Contact Info
                                            </h4>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <h5>Website </h5>
                                                <div class="controls">
                                                    <input type="url" name="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website') }}" placeholder=" website">
                                                </div>
                                                <div class="form-control-feedback">
                                                    <small><code> Alamat Website </code></small>
                                                </div>
                                                @error('website')
                                                <div class="form-control-feedback"><small>
                                                    <code>{{ $message }}</code> </small>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <h5>Email </h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder=" email">
                                                </div>
                                                <div class="form-control-feedback">
                                                    <small><code> Email </code></small>
                                                </div>
                                                @error('email')
                                                <div class="form-control-feedback"><small>
                                                    <code>{{ $message }}</code> </small>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <h5>Nomor Telepon </h5>
                                                        <div class="controls">
                                                            <input type="number" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}" placeholder="Nomor Telepon/HP">
                                                        </div>
                                                        <div class="form-control-feedback">
                                                            <small><code> Nomor Telepon/HP </code></small>
                                                        </div>
                                                        @error('no_telp')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <h5>Nomor Fax </h5>
                                                        <div class="controls">
                                                            <input type="number" name="no_fax" class="form-control @error('no_fax') is-invalid @enderror" value="{{ old('no_fax') }}" placeholder="Nomor Fax">
                                                        </div>
                                                        <div class="form-control-feedback">
                                                            <small><code> Nomor Fax</code></small>
                                                        </div>
                                                        @error('no_fax')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Alamat Jalan </h5>
                                                <div class="controls">
                                                    <textarea rows="5" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="alamat">{{ old('alamat') }} </textarea>
                                                </div>
                                                <div class="form-control-feedback">
                                                    <small><code> Alamat jalan </code></small>
                                                </div>
                                                @error('alamat')
                                                <div class="form-control-feedback"><small>
                                                    <code>{{ $message }}</code> </small>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group @error('province_code') has-error @enderror">
                                                        <h5 >Provinsi <span class="text-danger">*</span></h5>
                                                        <select class="form-control select2" style="width: 100%;" name="province_code" id="selectprovince_code">
                                                            <option value="" holder>Pilih Provinsi</option>
                                                            @foreach ($dataprovinsi as $item)
                                                            <option value="{{ $item->code }}" {{ old('province_code') == $item->code ? 'selected' : '' }}>
                                                                {{ $item->name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('province_code')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group @error('city_code') has-error @enderror">
                                                        <h5 >Kab./Kota <span class="text-danger">*</span></h5>
                                                        <select class="form-control select2" style="width: 100%;" name="city_code" id="city_code" disabled>
                                                            <option value="" holder>Pilih Provinsi dahulu</option>
                                                        </select>
                                                        @error('city_code')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <h5>Kecamatan</h5>
                                                        <select class="form-control select2" style="width: 100%;" name="district_code" id="district_code" disabled>
                                                            <option value="" holder>Pilih Kab./Kota dahulu</option>
                                                        </select>
                                                        @error('district_code')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <h5>Desa / Kelurahan</h5>
                                                        <select class="form-control select2" style="width: 100%;" name="village_code" id="village_code" disabled>
                                                            <option value="" holder>Pilih Kecamatan dahulu</option>
                                                        </select>
                                                        @error('village_code')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Nama Dusun</h5>
                                                <div class="controls">
                                                    <input type="text" name="nama_dusun" class="form-control @error('nama_dusun') is-invalid @enderror" value="{{ old('nama_dusun') }}" placeholder=" Nama Dusun">
                                                </div>
                                                <div class="form-control-feedback">
                                                    <small><code> Nama Dusun </code></small>
                                                </div>
                                                @error('nama_dusun')
                                                <div class="form-control-feedback"><small>
                                                    <code>{{ $message }}</code> </small>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>RT</h5>
                                                        <div class="controls">
                                                            <input type="text" name="rt" class="form-control @error('rt') is-invalid @enderror" value="{{ old('rt') }}" placeholder=" RT">
                                                        </div>
                                                        <div class="form-control-feedback">
                                                            <small><code> RT 00000 </code></small>
                                                        </div>
                                                        @error('rt')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>RW</h5>
                                                        <div class="controls">
                                                            <input type="text" name="rw" class="form-control @error('rw') is-invalid @enderror" value="{{ old('rw') }}" placeholder=" RW">
                                                        </div>
                                                        <div class="form-control-feedback">
                                                            <small><code> RW 00000 </code></small>
                                                        </div>
                                                        @error('rw')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>Kode Pos</h5>
                                                        <div class="controls">
                                                            <input type="text" name="kode_pos" class="form-control @error('kode_pos') is-invalid @enderror" value="{{ old('kode_pos') }}" placeholder=" Kode Pos">
                                                        </div>
                                                        <div class="form-control-feedback">
                                                            <small><code> Kode Pos </code></small>
                                                        </div>
                                                        @error('kode_pos')
                                                        <div class="form-control-feedback"><small>
                                                            <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="logo7" role="tabpanel">
                                <div class="p-15">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="box h-300">
                                                <div class="box-header">
                                                    <h4 class="box-title">
                                                        Logo
                                                    </h4>
                                                </div>
                                                <div class="text-center box-body ">
                                                    <label class="form-label">Size : 600 pixel x 400 pixel</label>
                                                    <div class="form-group">
                                                        <div class=" fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new img-thumbnail" style="width: 200px;">
                                                                <img src="{{ asset('') }}assets/images/no_image.png" alt="...">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px;"></div>
                                                            <div>
                                                                <span class="btn btn-outline-secondary btn-file">
                                                                    <span class="fileinput-new">
                                                                        Select image
                                                                    </span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" class="@error('logo_sekolah') is-invalid @enderror" name="logo_sekolah" value="{{ old('logo_sekolah') }}">
                                                                </span>
                                                                <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                            </div>
                                                        </div>
                                                        @error('logo_sekolah')
                                                        <div class="form-control-feedback">
                                                            <small> <code>{{ $message }}</code> </small>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="maps7" role="tabpanel">
                                <div class="p-15">
                                    <div class="row">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <h5>Lintang</h5>
                                                            <div class="controls">
                                                                <input type="text" name="lintang" class="form-control @error('lintang') is-invalid @enderror" value="{{ old('lintang') }}" placeholder=" Lintang">
                                                            </div>
                                                            <div class="form-control-feedback">
                                                                <small><code> Lintang  </code></small>
                                                            </div>
                                                            @error('lintang')
                                                            <div class="form-control-feedback"><small>
                                                                <code>{{ $message }}</code> </small>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <h5>Bujur</h5>
                                                            <div class="controls">
                                                                <input type="text" name="bujur" class="form-control @error('bujur') is-invalid @enderror" value="{{ old('bujur') }}" placeholder=" Bujur">
                                                            </div>
                                                            <div class="form-control-feedback">
                                                                <small><code> Bujur  </code></small>
                                                            </div>
                                                            @error('bujur')
                                                            <div class="form-control-feedback"><small>
                                                                <code>{{ $message }}</code> </small>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>Maps Script</h5>
                                                    <div class="controls">
                                                        <textarea rows="5" name="maps" class="form-control @error('maps') is-invalid @enderror" placeholder="maps">{{ old('maps') }} </textarea>
                                                    </div>
                                                    <div class="form-control-feedback">
                                                        Contoh:
                                                        <small>
                                                            <code>
                                                                &lt;iframe
                                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6654873837024!2d117.11685557310669!3d-0.5015000352680353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67e561e3a94f5%3A0x3f7c190ac0acffd6!2sKB%20%26%20TK%20ISLAMIC%20CENTER%20SAMARINDA%20KALTIM!5e0!3m2!1sen!2sid!4v1761440771840!5m2!1sen!2sid" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"&gt;&lt;/iframe&gt;
                                                            </code>
                                                        </small>
                                                    </div>
                                                    @error('maps')
                                                    <div class="form-control-feedback">
                                                        <small> <code>{{ $message }}</code> </small>
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="bank-npwp" role="tabpanel">
                                <div class="p-15">
                                    <div class="box">
                                        <div class="box-header">
                                            <h4 class="box-title">
                                                Bank & NPWP
                                            </h4>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <h5>Nomor Rekening <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" name="no_rekening" class="form-control @error('no_rekening') is-invalid @enderror" value="{{ old('no_rekening') }}" placeholder="Nomor Statistik Sekolah" required>
                                                </div>
                                                @error('no_rekening')
                                                <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                                                @enderror
                                            </div>
                                            <div class="form-group @error('bank_id') has-error @enderror">
                                                <h5 >Nama Bank <span class="text-danger">*</span></h5>
                                                <select class="form-control select2" style="width: 100%;" name="bank_id" id="bank_id">
                                                    <option value="" holder>Pilih Nama Bank</option>
                                                    @foreach ($bank as $item)
                                                    <option value="{{ $item->id }}" {{ old('bank_id') == $item->id ? 'selected' : '' }}>
                                                        {{ $item->bank_id }} | {{ $item->nama }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('bank_id')
                                                <div class="form-control-feedback"><small>
                                                    <code>{{ $message }}</code> </small>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <h5>KCP Bank Unit <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="cabang_kcp_unit" class="form-control @error('cabang_kcp_unit') is-invalid @enderror" value="{{ old('cabang_kcp_unit') }}" placeholder="Nama Sekolah" required>
                                                </div>
                                                @error('cabang_kcp_unit')
                                                <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <h5>NPWP <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="url" name="npwp" class="form-control @error('npwp') is-invalid @enderror" value="{{ old('npwp') }}" placeholder="Nomor Sk Pendiriran" required>
                                                </div>
                                                @error('npwp')
                                                <div class="form-control-feedback"><small>
                                                    <code>{{ $message }}</code> </small>
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <h5>Nama di NPWP <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="nama_npwp" class="form-control @error('nama_npwp') is-invalid @enderror" value="{{ old('nama_npwp') }}" placeholder="Tanggal Pendirian" required>
                                                </div>
                                                @error('nama_npwp')
                                                <div class="form-control-feedback"><small>
                                                    <code>{{ $message }}</code> </small>
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form> --}}
</section>

@push('styles')

<link rel="stylesheet" href="{{ asset('') }}assets/vendor_plugins/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
@endpush

@push('scripts')
<script src="{{ asset('') }}assets/vendor_plugins/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
<script src="{{ asset('') }}assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="{{ asset('') }}assets/vendor_components/select2/dist/js/select2.full.js"></script>

<script>
    //Initialize Select2 Elements
    $('.select2').select2();

    //Save Draft
    $('#draft-btn').click(function(e) {
        e.preventDefault();
        $('#status_yayasan_update').val(0);
        $('#post-form').submit();
    });
    //Save Publish
    $('#publish-btn').click(function(e) {
        e.preventDefault();
        $('#status_yayasan_update').val(1);
        $('#fresh_site').val(1);
        $('#post-form').submit();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="province_code"]').on('change', function() {
            var province_code = $(this).val();
            if (province_code) {
                $.ajax({
                    url: "{{ url('backend/get/city/') }}/"+ province_code,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $("#city_code").removeAttr("disabled");
                        $("#district_code").prop("disabled", true);
                        $("#district_code").html('<option value="">Pilih Kab./Kota dahulu</option>');
                        $("#village_code").prop("disabled", true);
                        $("#village_code").html('<option value="">Pilih Kecamatan dahulu</option>');
                        $("#city_code").html('<option value="">-- Pilih Kab./Kota --</option>');
                        $.each(data, function(key, value) {
                            $("#city_code").append('<option value="' +
                            value.code + '">' + value.name + '</option>');
                        });
                        console.log(data)
                        // alert('danger')
                    },

                });
            } else {
                alert('danger');
            }
        });
    });

    $(document).ready(function() {
        $('select[name="city_code"]').on('change', function() {
            var city_code = $(this).val();
            if (city_code) {
                $.ajax({
                    url: "{{ url('backend/get/distric') }}/"+ city_code,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $("#district_code").removeAttr("disabled");
                        $("#district_code").html('<option value="">-- Pilih Kecamatan --</option>');
                        $("#village_code").prop("disabled", true);
                        $("#village_code").html('<option value="">Pilih Kecamatan dahulu</option>');
                        $.each(data, function(key, value) {
                            $("#district_code").append('<option value="' +
                            value.code + '">' + value.name + '</option>');
                        });
                        console.log(data)
                        // alert('danger')
                    },

                });
            } else {
                alert('danger');
            }
        });
    });

    $(document).ready(function() {
        $('select[name="district_code"]').on('change', function() {
            var district_code = $(this).val();
            if (district_code) {
                $.ajax({
                    url: "{{ url('backend/get/village') }}/"+ district_code,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $("#village_code").removeAttr("disabled")
                        $("#village_code").html('<option value="">-- Pilih Desa/Kelurahan --</option>');
                        $.each(data, function(key, value) {
                            $("#village_code").append('<option value="' +
                            value.code + '">' + value.name + '</option>');
                        });
                        console.log(data)
                        // alert('danger')
                    },

                });
            } else {
                alert('danger');
            }
        });
    });

</script>
@endpush
@endsection
