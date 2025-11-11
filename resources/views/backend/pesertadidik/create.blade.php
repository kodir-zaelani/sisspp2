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
                        <li class="breadcrumb-item" aria-current="page">Rombongan Belajar</li>
                        <li class="breadcrumb-item active" aria-current="page">List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h4>Tambah Rombongan Belajar</h4>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 col-12">
                    <form enctype="multipart/form-data" action="{{ route('backend.rombonganbelajar.store')}}" method="POST">
                        @csrf
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
                                <div class="form-group @error('jurusansp_id') has-error @enderror">
                                    <h5 >Jurusan SP <span class="text-danger">*</span></h5>
                                    <select class="form-control select2" style="width: 100%;" name="jurusansp_id" id="jurusansp_id" disabled>
                                        <option value="" holder>Pilih Sekolah dahulu</option>
                                        {{-- @foreach ($jurusansp as $item)
                                        <option value="{{ $item->id }}"  {{ old('jurusansp_id') == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama }}
                                        </option>
                                        @endforeach --}}
                                    </select>
                                    @error('jurusansp_id')
                                    <div class="form-control-feedback"><small>
                                        <code>{{ $message }}</code> </small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group @error('semester_id') has-error @enderror">
                                    <h5 >Semester <span class="text-danger">*</span></h5>
                                    <select class="form-control select2" style="width: 100%;" name="semester_id" id="semester_id" disabled>
                                        <option value="" holder>Pilih Semester</option>
                                        @foreach ($semester as $item)
                                        <option value="{{ $item->id }}" {{ old('semester_id') == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('semester_id')
                                    <div class="form-control-feedback"><small>
                                        <code>{{ $message }}</code> </small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group @error('tingkatpendidikan_id') has-error @enderror">
                                    <h5 >Tingkat Pendidikan <span class="text-danger">*</span></h5>
                                    <select class="form-control select2" style="width: 100%;" name="tingkatpendidikan_id" id="tingkatpendidikan_id" disabled>
                                        <option value="" holder>Pilih Tingkat Pendidikan</option>
                                        @foreach ($tingkatpendidikan as $item)
                                        <option value="{{ $item->id }}" {{ old('tingkatpendidikan_id') == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('tingkatpendidikan_id')
                                    <div class="form-control-feedback"><small>
                                        <code>{{ $message }}</code> </small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Nama Rombongan Belajar <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Nama Yayasan" required>
                            </div>
                            @error('nama')
                            <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                            @enderror
                        </div>
                        <div class="form-group @error('ptk_id') has-error @enderror">
                            <h5 >Wali Kelas <span class="text-danger">*</span></h5>
                            <select class="form-control select2" style="width: 100%;" name="ptk_id" id="ptk_id" disabled>
                                <option value="" holder>Pilih Wali Kelas</option>
                                @foreach ($ptks as $item)
                                <option value="{{ $item->id }}" {{ old('ptk_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }}
                                </option>
                                @endforeach
                            </select>
                            @error('ptk_id')
                            <div class="form-control-feedback"><small>
                                <code>{{ $message }}</code> </small>
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="mt-3 btn btn-primary btn-sm">Save</button>

                    </form>
                </div>
            </div>
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

