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
                            <a href="{{ route('backend.pesertadidik.index')}}">Peserta Didik</a>
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
            <h4>Import Peserta Didik</h4>
        </div>
        <div class="box-body">

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

            @if (session()->has('failures'))
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4>Daftar Data Duplikat </h4>
                            <small class="text-muted">Perbaiki data duplikat tersebut atau data sudah ada dalam database</small>
                            <div class="box-controls pull-right">
                                <a href="{{route('backend.pesertadidik.cleanupload')}}" class="btn btn-sm btn-success me-3" title="Import"><i class="fa fa-file "></i> Import Ulang</a>
                            </div>
                        </div>
                        <div class="box-body">
                            <table class="table table-danger">
                                <tr>
                                    <th>Row</th>
                                    <th>Attribute</th>
                                    <th>Errors</th>
                                    <th>Values</th>
                                </tr>
                                @foreach (session()->get('failures') as $validation)
                                <tr>
                                    <td>{{ $validation->row()}}</td>
                                    <td>{{ $validation->attribute()}}</td>
                                    <td>
                                        <ul>
                                            @foreach ($validation->errors() as $e)
                                            <li>{{ $e }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{ $validation->values() [$validation->attribute()]}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="box box-bordered border-success">
                        <div class="box-body">
                            <div class="pb-5 row">
                                <div class="col-12">
                                    Silahkan <a class="text-decoration-none" href="{{asset('')}}uploads/files/templates/3_template_peserta_didik.xlsx" style="pointer='cursor';">Unduh Template</a>   file spreadsheet terlebih dahulu!
                                </div>
                            </div>
                            <hr>
                            <form action="{{ route('backend.pesertadidik.import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group @error('sekolah_id') has-error @enderror">
                                            <h5 >Sekolah <span class="text-danger">*</span></h5>
                                            <select class="form-control select2" style="width: 100%;" name="sekolah_id" id="sekolah_id" required>
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
                                            <select class="form-control select2" style="width: 100%;" name="tahunajaran_id" id="tahunajaran_id" required>
                                                <option value="" holder >Pilih Tahun Ajaran</option>
                                                @foreach ($tahunajaran as $item)
                                                <option value="{{ $item->id }}"  {{ old('tahunajaran_id') == $item->id ? 'selected' : '' }}>
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
                                        <div class="form-group @error('semester_id') has-error @enderror">
                                            <h5 >Semester <span class="text-danger">*</span></h5>
                                            <select class="form-control select2" style="width: 100%;" name="semester_id" id="semester_id" required>
                                                <option value="" holder >Pilih semester</option>
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
                                        <div class="form-group @error('tanggal_diterima') has-error @enderror">
                                            <h5 >Tanggal diterima<span class="text-danger">*</span></h5>
                                            <input type="date" name="tanggal_diterima" value="{{ old('tanggal_diterima')}}" class="form-control datepicker @error('tanggal_diterima') is-invalid @enderror" required>
                                            @error('tanggal_diterima')
                                            <div class="form-control-feedback"><small>
                                                <code>{{ $message }}</code> </small>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group @error('tingkatpendidikan_id') has-error @enderror">
                                            <h5 >Diterima di Kelas <span class="text-danger">*</span></h5>
                                            <select class="form-control select2" style="width: 100%;" name="tingkatpendidikan_id" id="tingkatpendidikan_id" required>
                                                <option value="" holder >Pilih Kelas</option>
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
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group @error('jenispendaftaran_id') has-error @enderror">
                                            <h5 >Jenis Pendaftaran<span class="text-danger">*</span></h5>
                                            <select class="form-control select2" style="width: 100%;" name="jenispendaftaran_id" id="jenispendaftaran_id" required>
                                                <option value="" holder >Pilih Jenis Pendaftaran</option>
                                                @foreach ($jenispendaftaran as $item)
                                                <option value="{{ $item->id }}" {{ old('jenispendaftaran_id') == $item->id ? 'selected' : '' }}>
                                                    {{ $item->nama }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('jenispendaftaran_id')
                                            <div class="form-control-feedback"><small>
                                                <code>{{ $message }}</code> </small>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group @error('tahunajaran_id') has-error @enderror">
                                    <h5 >File Sumber <span class="text-danger">*</span></h5>
                                    <input type="file" name="importfile" class="form-control @error('importfile') is-invalid @enderror" required>
                                    @error('importfile')
                                    <div class="form-control-feedback">
                                        <small> <code>{{ $message }}</code> </small>
                                    </div>
                                    @enderror
                                </div>
                                <button type="submit" class="mt-3 btn btn-primary btn-sm">Import</button>
                            </form>

                        </div>
                    </div>
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

