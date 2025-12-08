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
                            <a href="{{route('backend.anggotarombel.index')}}">Anggota Rombongan Belajar</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="box-bordered box border-warning">
        <div class="box-header">
            <h4>Tambah Anggota Rombongan Belajar</h4>
        </div>
        <div class="box-body">
            @livewire('backend.anggotarombel.create')
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

