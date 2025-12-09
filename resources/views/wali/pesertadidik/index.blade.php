@extends('layouts.appwali')

@section('content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">Peserta Didik</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('wali.dashboard')}}"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Peserta Didik</li>
                        <li class="breadcrumb-item active" aria-current="page">List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="content">

    <div class="row">
        <div class="col-12 col-lg-7 col-xl-8">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li><a class="active" href="#identitas-pd" data-bs-toggle="tab">Identitas</a></li>
                    <li><a href="#tmpattinggal-pd" data-bs-toggle="tab">Tempat Tinggal</a></li>
                    <li><a href="#orangtuawli-pd" data-bs-toggle="tab">Orang Tua / Wali</a></li>
                    <li><a href="#kepemilikankartu-pd" data-bs-toggle="tab">Kepemilikan Kartu</a></li>
                    <li><a href="#bank-pd" data-bs-toggle="tab">Bank</a></li>
                </ul>

                <div class="tab-content">
                    <div class="active tab-pane" id="identitas-pd">
                        <div class="box b-1 no-shadow">
                            <div class="box-body bb-1 border-fade">
                                <div class="table-responsive">
                                    <table class="table table-striped table-vcenter">
                                        <tbody>
                                            <tr> <td style="width:25%;"><strong>Nama Lengkap</strong></td><td style="width:5px;">:</td> <td>{{strtoupper($datapeseradidik->nama)}}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>NISN</strong></td><td style="width:5px;">:</td> <td>{{$datapeseradidik->nisn}}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Tempat Lahir</strong></td><td style="width:5px;">:</td> <td>{{$datapeseradidik->tempat_lahir}}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Tanggal Lahir</strong></td><td style="width:5px;">:</td> <td>{{$datapeseradidik->tanggal_lahir}}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Reg. Akta Lahir</strong></td><td style="width:5px;">:</td> <td>{{$datapeseradidik->reg_akta_lahir}}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Jenis Kelamin</strong></td><td style="width:5px;">:</td> <td>{{$datapeseradidik->jenis_kelamin}}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Agama</strong></td><td style="width:5px;">:</td> <td> {{ !empty($datapeseradidik->agama_id) ? $datapeseradidik->agama->nama :'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Kebutuhan Khusus</strong></td><td style="width:5px;">:</td> <td> {{ !empty($datapeseradidik->kebutuhankhusus_id) ? $datapeseradidik->kebutuhankhusus->nama:'' }}</td> </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tmpattinggal-pd">
                        <div class="box no-shadow">
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-vcenter">
                                        <tbody>
                                            <tr> <td style="width:25%;"><strong>Jenis Tinggal</strong></td><td style="width:5px;">:</td> <td> {{ !empty($datapeseradidik->jenistinggal_id) ? $datapeseradidik->jenistinggal->nama:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Alat Transportasi</strong></td><td style="width:5px;">:</td> <td> {{ !empty($datapeseradidik->alattransportasi_id) ? $datapeseradidik->alattransportasi->nama:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Alamat</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->alamat_jalan) ? $datapeseradidik->alamat_jalan:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>RT</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->rt) ? $datapeseradidik->rt:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>RW</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->rw) ? $datapeseradidik->rw:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Dusun</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->nama_dusun) ? $datapeseradidik->nama_dusun:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Desa/Kelurahan</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->village_code) ? $datapeseradidik->village->nama:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Kode Pos</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->kode_pos) ? $datapeseradidik->kode_pos:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Propinsi</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->province_code) ? $datapeseradidik->province->nama:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Kabupaten/Kota</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->city_code) ? $datapeseradidik->city->nama:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Kecamatan</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->district_code) ? $datapeseradidik->district->nama:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>No.Telp Rumah</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->no_telepon_rumah) ? $datapeseradidik->no_telepon_rumah:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>No.HP</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->no_telepon_seluler) ? $datapeseradidik->no_telepon_seluler:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Email</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->email) ? $datapeseradidik->email:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Lintang</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->lintang) ? $datapeseradidik->lintang:'' }}</td> </tr>
                                            <tr> <td style="width:25%;"><strong>Bujur</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->bujur) ? $datapeseradidik->bujur:'' }}</td> </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="orangtuawli-pd">
                        <div class="box no-shadow">
                            <div class="table-responsive">
                               <table class="table table-striped table-vcenter">
										<tbody>
											<tr> <td style="width:25%;"><strong>Nama Ayah</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->nama_ayah) ? $datapeseradidik->nama_ayah:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Tahun Lahir Ayah</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->tahun_lahir_ayah) ? $datapeseradidik->tahun_lahir_ayah:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Jenjang Pendidikan Ayah</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->jenjangpendidikan_ayah_id) ? $datapeseradidik->jenjangpendidikan_ayah->nama:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Pekerjaan Ayah</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->pekerjaan_ayah_id) ? $datapeseradidik->pekerjaan_ayah->nama:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Penghasilan Ayah</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->penghasilan_ayah_id) ? $datapeseradidik->penghasilan_ayah->nama:'' }}</td> </tr>
											<tr> <td colspan="2"></td></tr>
											<tr> <td style="width:25%;"><strong>Nama Ibu</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->nama_ibu) ? $datapeseradidik->nama_ibu:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Tahun Lahir Ibu</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->tahun_lahir_ibu) ? $datapeseradidik->tahun_lahir_ibu:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Jenjang Pendidikan Ibu</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->jenjangpendidikan_ibu_id) ? $datapeseradidik->jenjangpendidikan_ibu->nama:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Pekerjaan Ibu</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->pekerjaan_ibu_id) ? $datapeseradidik->pekerjaan_ibu->nama:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Penghasilan Ibu</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->penghasilan_ibu_id) ? $datapeseradidik->penghasilan_ibu->nama:'' }}</td> </tr>
											<tr> <td colspan="2"></td></tr>
											<tr> <td style="width:25%;"><strong>Nama Wali</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->nama_wali) ? $datapeseradidik->nama_wali:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Tahun Lahir Wali</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->tahun_lahir_wali) ? $datapeseradidik->tahun_lahir_wali:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Jenjang Pendidikan Wali</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->jenjangpendidikan_wali_id) ? $datapeseradidik->jenjangpendidikan_wali->nama:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Pekerjaan Wali</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->pekerjaan_wali_id) ? $datapeseradidik->jenistinggal->nama:'' }}</td> </tr>
											<tr> <td style="width:25%;"><strong>Penghasilan Wali</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->penghasilan_wali_id) ? $datapeseradidik->penghasilan_wali->nama:'' }}</td> </tr>
										</tbody>
									</table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kepemilikankartu-pd">
                        <div class="box no-shadow">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <tbody>
                                        <tr> <td style="width:25%;"><strong>Penerima KPS</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->penerima_kps) ? $datapeseradidik->penerima_kps:'' }}</td> </tr>
                                        <tr> <td style="width:25%;"><strong>Nomor KPS</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->no_kps) ? $datapeseradidik->no_kps:'' }}</td> </tr>
                                        <tr> <td style="width:25%;"><strong>Layak PIP</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->layak_pip) ? $datapeseradidik->layak_pip:'' }}</td> </tr>
                                        <tr> <td style="width:25%;"><strong>ID PIP</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->alasanlayakpip_id) ? $datapeseradidik->alasanlayakpip->nama:'' }}</td> </tr>
                                        <tr> <td style="width:25%;"><strong>Penerima KIP</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->penerima_kip) ? $datapeseradidik->penerima_kip:'' }}</td> </tr>
                                        <tr> <td style="width:25%;"><strong>Nomor KIP</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->no_kip) ? $datapeseradidik->no_kip:'' }}</td> </tr>
                                        <tr> <td style="width:25%;"><strong>Nama KIP</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->nama_kip) ? $datapeseradidik->nama_kip:'' }}</td> </tr>
                                        <tr> <td style="width:25%;"><strong>Nomor KKS</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->no_kks) ? $datapeseradidik->no_kks:'' }}</td> </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="bank-pd">
                        <div class="box no-shadow">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <tbody>
                                        <tr> <td style="width:25%;"><strong>Nama Bank</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->bank_id) ? $datapeseradidik->bank->nama:'' }}</td> </tr>
                                        <tr> <td style="width:25%;"><strong>Nomor Rekening</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->rek_bank) ? $datapeseradidik->rek_bank:'' }}</td> </tr>
                                        <tr> <td style="width:25%;"><strong>Rekening Atas Nama</strong></td><td style="width:5px;">:</td> <td>{{ !empty($datapeseradidik->rek_atas_nama) ? $datapeseradidik->rek_atas_nama:'' }}</td> </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 col-lg-5 col-xl-4">
            <div class="box box-widget widget-user">
                <div class="widget-user-header bg-img bbsr-0 bber-0" style="background: url('{{ asset('') }}assets/images/gallery/full/10.jpg') center center;" data-overlay="5">
                    <h3 class="text-white widget-user-username">{{ !empty($datapeseradidik->nama) ? $datapeseradidik->nama:'' }}</h3>
                    <h6 class="text-white widget-user-desc">{{ !empty($datapeseradidik->nisn) ? $datapeseradidik->nisn:'' }}</h6>
                </div>
                <div class="widget-user-image">
                    <img class="rounded-circle" src="{{ asset('') }}assets/images/user3-128x128.jpg" alt="User Avatar">
                </div>
            </div>
            <div class="box">
                <div class="box-body box-profile">
                    <div class="row">
                        <div class="col-12">
                            <div>
                                <p>Email :<span class="text-gray ps-10">{{ !empty($datapeseradidik->email) ? $datapeseradidik->email:'' }}</span> </p>
                                <p>Phone :<span class="text-gray ps-10">{{ !empty($datapeseradidik->no_telepon_seluler) ? $datapeseradidik->no_telepon_seluler:'' }}</span></p>
                                <p>Address :<span class="text-gray ps-10">{{ !empty($datapeseradidik->alamat_jalan) ? $datapeseradidik->alamat_jalan:'' }}</span></p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div>
                                <div class="map-box">
                                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805244.1745767146!2d-86.32675167439648!3d29.383165774894163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C+USA!5e0!3m2!1sen!2sin!4v1501665415329" width="100%" height="100" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@endsection
