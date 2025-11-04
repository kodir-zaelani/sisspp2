<div>

    <div class="box-body">
         <div class="row">
            <div class="col-12">
                <div class="box ">
                    <div class="text-center box-body">
                        <div class="widget-user-image">
                            <img class="rounded-circle h-160" src="{{ $yayasan->logoyayasanThumbUrl ? $yayasan->logoyayasanThumbUrl : '/uploads/images/default/no_image.png' }}" alt="{{ $yayasan->nama }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="box box-bordered border-success">
                   <div class="box-body box-profile box-bordered border-success">
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <p>Pimpinan :</p>
                                    <p><span class="text-gray">{{$yayasan->nama}}</span> </p>
                                    <p>No SK Pendidiran : </p>
                                    <p><span class="text-gray">{{$yayasan->no_pendirian_yayasan}}</span> </p>
                                    <p>Tanggal SK Pendirian : </p>
                                    <p><span class="text-gray">{{$yayasan->tgl_pendirian_yayasan}}</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 col-xl-8">
                <ul class="nav nav-tabs customtab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#infoiew" role="tab"><span class="hidden-sm-up">
                            <i class="ion-home"></i></span> <span class="hidden-xs-down">Info</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="tab" href="#umumview" role="tab"><span class="hidden-sm-up">
                            <i class="ion-home"></i></span> <span class="hidden-xs-down">Kontak</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#mapsview" role="tab"><span class="hidden-sm-up">
                            <i class="ion-email"></i></span> <span class="hidden-xs-down">Peta</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="infoview" role="tabpanel">
                        <div class="p-15">
                            <div class="row">
                                <div class="box box-bordered border-success">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Pimpinan </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <label class="col-form-label">: {{$yayasan->pimpinan}}</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Akta Pendirian</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <label class="col-form-label">: {{$yayasan->no_pendirian_yayasan}}</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Tanggal Akta</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <label class="col-form-label">: {{ TanggalID('j M Y', $yayasan->tgl_pendirian_yayasan) }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="umumview" role="tabpanel">
                        <div class="pt-20 ps-5">
                            <div class="box box-bordered border-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Website</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->website}}</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Email</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->email}}</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Tel./Fax</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->no_telp}} / {{$yayasan->no_fax}}</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Alamat</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->alamat}}</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">RT/RW</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->rt}} / {{$yayasan->rw}}</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Nama Dusun</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->nama_dusun}}</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Kode Pos</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->kode_pos}}</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Provinsi</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->province->name}}</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Kab./Kota</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->city->name}}</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Kecamatan</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->district->name}}</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Desa/Kelurahan</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <label class="col-form-label">: {{$yayasan->village->name}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="mapsview" role="tabpanel">
                        <div class="p-15">
                            <div class="row">
                                <div class="box box-bordered border-success">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Lintang</h5>
                                                    <div class="controls">
                                                        <input type="text" name="lintang" class="form-control " value="{{ $yayasan->lintang }}" placeholder=" Lintang" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <h5>Bujur</h5>
                                                    <div class="controls">
                                                        <input type="text" name="bujur" class="form-control " value="{{ $yayasan->bujur }}" placeholder=" Bujur" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>Maps</h5>
                                            <div class="controls">
                                                <iframe src="{{$yayasan->maps}}" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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
    </div>
</div>
