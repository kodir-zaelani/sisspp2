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
                        <li class="breadcrumb-item" aria-current="page">Jurusan Satuan Pendidikan</li>
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
            <h4>Tambah Jurusan Satuan Pendidikan</h4>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 col-12">
                    <form enctype="multipart/form-data" action="{{ route('backend.jurusansp.store')}}" method="POST">
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
                                <div class="form-group @error('jurusan_id') has-error @enderror">
                                    <h5 >Jurusan <span class="text-danger">*</span></h5>
                                    <select class="form-control select2" style="width: 100%;" name="jurusan_id" id="jurusan_id">
                                        <option value="" holder>Pilih Jurusan</option>
                                        @foreach ($jurusan as $item)
                                        <option value="{{ $item->id }}"  {{ old('jurusan_id') == $item->id ? 'selected' : '' }}>
                                            {{ $item->jurusanid }}|{{ $item->nama_jurusan }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('jurusan_id')
                                    <div class="form-control-feedback"><small>
                                        <code>{{ $message }}</code> </small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <h5>Nama Jurusan <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Nama Jururan SP" readonly id="nama_jurusansp" disabled>
                            </div>
                            @error('nama')
                            <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
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

    const inputElement = document.getElementById("nama_jurusansp");

    $(document).ready(function() {
        $('select[name="jurusan_id"]').on('change', function() {
            var jurusan_id = $(this).val();
            if (jurusan_id) {
                $.ajax({
                    url: "{{ url('backend/get/jurusan/') }}/"+ jurusan_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $("#nama_jurusansp").removeAttr("disabled");
                        inputElement.value = data;
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

