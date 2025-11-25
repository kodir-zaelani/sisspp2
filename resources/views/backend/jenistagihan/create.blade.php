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
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h4>Tambah Jenis Tagihan</h4>
            <div class="box-controls pull-right">
                <a href="{{route('backend.jenistagihan.index')}}" class="btn btn-sm btn-warning me-3" title="Import">
                    <i class="bi bi-arrow-left"></i>
                    Kembali
                </a>
                <a href="{{route('backend.jenistagihan.formimport')}}" class="btn btn-sm btn-info me-3" title="Form Import">
                    Import
                </a>
            </div>
        </div>
            <div class="box-body">
                <form action="{{ route('backend.jenistagihan.store') }}" method="POST" enctype="multipart/form-data">
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
                            <select class="form-control select2" style="width: 100%;" name.live="tahunajaran_id" id="selcetprovince_code">
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

                        <div class="form-group">
                            <h5>Nama Tagihan <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder=" Nama Tagihan">
                            </div>
                            @error('nama')
                            <div class="form-control-feedback"><small>
                                <code>{{ $message }}</code> </small>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Periodik :</label>
                            <div class="demo-radio-button">
                                <input value="Ya" name="periodik" type="radio" id="radio_30_ya" class="with-gap radio-col-success" />
                                <label for="radio_30_ya">Ya</label>
                                <input value="Tida" name="periodik" type="radio" id="radio_32_tidak" class="with-gap radio-col-success"  />
                                <label for="radio_32_tidak">Tidak</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Type Periodik :</label>
                            <div class="demo-radio-button">
                                <input value="bulan" name="jenis_periodik"
                                type="radio" id="radio_33" class="with-gap radio-col-success" />
                                <label for="radio_33">Bulan</label>
                                <input value="tahun_ajaran" name="jenis_periodik"
                                type="radio" id="radio_34" class="with-gap radio-col-success"  />
                                <label for="radio_34">Tahun Masuk</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Perlu Tagihan :</label>
                            <div class="demo-radio-button">
                                <input value="Ya" name="perlu_tagihan"
                                type="radio" id="radio_30perlu_tagihan" class="with-gap radio-col-success" />
                                <label for="radio_30perlu_tagihan">Ya</label>
                                <input value="Tidak" name="perlu_tagihan"
                                type="radio" id="radio_32perlu_tagihan" class="with-gap radio-col-success"  />
                                <label for="radio_32perlu_tagihan">Tidak</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Besaran<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="number" name="besaran" class="form-control @error('besaran') is-invalid @enderror" value="{{ old('besaran') }}" placeholder="Besaran" required>
                            </div>
                            @error('besaran')
                            <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                            @enderror
                        </div>
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
                    <div class="box-footer">
                        <input type="text" name="status_sekolah_update" value="1" hidden>
                        <button class="btn btn-sm btn-primary"  type="submit">
                            <i class="fa fa-save me-2" aria-hidden="true"></i> Save
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

