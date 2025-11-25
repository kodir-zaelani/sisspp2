@extends('layouts.appb')
@section('content')
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
                            <a href="{{ route('backend.jenistagihan.index')}}">Jenis Tagihan</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Import</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h4>Import Jenis Tagihan</h4>
            <div class="box-controls pull-right">
                <a href="{{route('backend.jenistagihan.index')}}" class="btn btn-sm btn-warning me-3" title="Import">
                    <i class="bi bi-arrow-left"></i>
                    Kembali
                </a>
            </div>
        </div>
        <div class="box-body">
            <form action="{{ route('backend.jenistagihan.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group @error('sekolah_id') has-error @enderror">
                                <h5 >Sekolah <span class="text-danger">*</span></h5>
                                <select class="form-control select2" style="width: 100%;" name="sekolah_id" id="sekolah_id">
                                    <option value="" holder>Pilih Sekolah</option>
                                    @foreach ($sekolah as $item)
                                    <option value="{{ $item->id }}" {{ old('sekolah_id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('sekolah_id')
                                <div class="form-control-feedback"><small>
                                    <code>{{ $message }}</code> </small>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group @error('tahunajaran_id') has-error @enderror">
                                <h5 >Tahun Ajaran <span class="text-danger">*</span></h5>
                                <select class="form-control select2" style="width: 100%;" name="tahunajaran_id" id="selcetprovince_code">
                                    <option value="" holder>Pilih Tahun Ajaran</option>
                                    @foreach ($dataptahunajaran as $item)
                                    <option value="{{ $item->id }}" {{ old('id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('tahunajaran_id')
                                <div class="form-control-feedback"><small>
                                    <code>{{ $message }}</code> </small>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <h5>Tanggal Berlaku <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror" value="{{ old('tanggal_mulai') }}" placeholder="Tanggal Berlaku" required>
                                </div>
                                <div class="form-control-feedback">
                                    <small><code>Tangal/bulan/Tahun | 30/01/2000</code></small>
                                </div>
                                @error('tanggal_mulai')
                                <div class="form-control-feedback"><small>
                                    <code>{{ $message }}</code> </small>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <h5>Tanggal Berakhir <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" value="{{ old('tanggal_selesai') }}" placeholder="Tanggal Berlaku" required>
                                </div>
                                <div class="form-control-feedback">
                                    <small><code>Tangal/bulan/Tahun | 30/01/2000</code></small>
                                </div>
                                @error('tanggal_selesai')
                                <div class="form-control-feedback"><small>
                                    <code>{{ $message }}</code> </small>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>File sumber</h5>
                        <input type="file" name="importfile" class="form-control @error('importfile') is-invalid @enderror" required>
                        @error('importfile')
                        <div class="form-control-feedback">
                            <small> <code>{{ $message }}</code> </small>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="box-footer">
                    <button class="btn btn-sm btn-primary"  type="submit">
                        <i class="fa fa-save me-2" aria-hidden="true"></i> Import
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script type="text/javascript">

    $(document).ready(function() {
        $('select[name="sekolah_id"]').on('change', function() {
            var sekolah_id = $(this).val();
            if (sekolah_id) {
                $.ajax({
                    url: "{{ url('backend/get/jurusansp') }}/"+ sekolah_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $("#jurusansp_id").removeAttr("disabled");
                        $("#jurusansp_id").html('<option value="">-- Pilih Jurusan SP --</option>');
                        // $("#semester_id").prop("disabled", true);
                        // $("#semester_id").html('<option value="">Pilih Jurusan SP dahulu</option>');
                        $("#semester_id").removeAttr("disabled");
                        $("#tingkatpendidikan_id").removeAttr("disabled");
                        $("#ptk_id").removeAttr("disabled");
                        $.each(data, function(key, value) {
                            $("#jurusansp_id").append('<option value="' +
                            value.id + '">' + value.nama + '</option>');
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

