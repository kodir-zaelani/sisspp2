<div>
    <div class="mb-4 row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="form-group @error('sekolahId') has-error @enderror">
                <label class="form-label">Nama Sekolah <span class="text-danger">*</span></label>
                <select class="form-select @error('sekolahId') has-error @enderror"  wire:model.live='sekolahId' wire:key="sekolahId" required name="sekolahId" id="sekolahId" >
                    <option value="" holder>Nama Sekolah </option>
                    @foreach ($sekolah as $item)
                    <option value="{{ $item->id }}" {{ old('sekolahId') == $item->id ? 'selected' : '' }}>
                        {{ $item->nama }}
                    </option>
                    @endforeach
                </select>
                @error('sekolahId')
                <div class="form-control-feedback"><small>
                    <code>{{ $message }}</code> </small>
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="mb-4 row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="form-group @error('tahunajaranId') has-error @enderror">
                <label class="form-label">Tahun Ajaran Masuk <span class="text-danger">*</span></label>
                <select class="form-select  @error('tahunajaranId') has-error @enderror"  wire:model.live='tahunajaranId' required name="tahunajaranId" id="tahunajaranId" >
                    <option value="" holder>Tahun Ajaran</option>
                    @foreach ($tahunajarans as $item)
                    <option value="{{ $item->id }}" {{ old('tahunajaranId') == $item->id ? 'selected' : '' }}>
                        {{ $item->nama }}
                    </option>
                    @endforeach
                </select>
                @error('tahunajaranId')
                <div class="form-control-feedback"><small>
                    <code>{{ $message }}</code> </small>
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="mb-4 row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="form-group  @error('pesertadidikId') has-error @enderror">
                <label class="form-label">Peserta Didik <span class="text-danger">*</span></label>
                <select class="form-select @error('pesertadidikId') has-error @enderror" style="width: 100%;" wire:model.live='pesertadidikId' required name="pesertadidikId" id="pesertadidikId" >
                    <option value="" holder>Pilih Peserta Didik</option>
                    @forelse ($pesertadidik as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->nisn }} | {{ $item->nama }}
                    </option>
                    @empty
                    <option value="" disabled >Pilih Peserta Didik</option>
                    @endforelse
                </select>
                @error('pesertadidikId')
                <div class="form-control-feedback"><small>
                    <code>{{ $message }}</code> </small>
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="mb-4 row">
        <div class="col-lg-12 col-md-12 col-12">
            <label for="" class="me-3">Sebagai</label>
            @if (!empty($pesertadidikId))
            <div class="form-check form-check-inline">
                <input class="form-check-input @error('pilihan') has-error @enderror" type="radio" wire:model.live='pilihan' required name="pilihan" id="inlineRadio1" value="ayah" >
                <label class="form-check-label" for="inlineRadio1">Ayah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input @error('pilihan') has-error @enderror" type="radio" wire:model.live='pilihan' required name="pilihan" id="inlineRadio2" value="ibu" >
                <label class="form-check-label" for="inlineRadio2">Ibu</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input @error('pilihan') has-error @enderror" type="radio" wire:model.live='pilihan' required name="pilihan" id="inlineRadio3" value="wali" >
                <label class="form-check-label" for="inlineRadio3">Wali</label>
            </div>
            @else
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio1a" disabled>
                <label class="form-check-label" for="inlineRadio1a">Ayah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio2b" disabled>
                <label class="form-check-label" for="inlineRadio2b">Ibu</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio3c" disabled>
                <label class="form-check-label" for="inlineRadio3c">Wali</label>
            </div>
            @endif
            @error('pilihan')
                <div class="form-control-feedback"><small>
                    <code>{{ $message }}</code> </small>
                </div>
                @enderror
        </div>
    </div>
    <div class="mb-4 row">
        <div class="form-group">
            @if (!empty($pilihan))
            @if ($namaorangtua_wali == '' )
            <label for="" class="text-danger">Nama Orang Tua/Wali tidak ada </label>
            @endif
            @endif
            <p for="">Nama Lengkap <span class="text-danger">*</span></p>
            <input type="text" class="form-control" required name="nameortu" value="{{$namaorangtua_wali}} " id="" aria-describedby="helpId" placeholder="Nama Orang Tua/Wali"
            @if ($namaorangtua_wali)
                readonly
            @else
                disabled
            @endif >
        </div>
    </div>
</div>
