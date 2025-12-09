<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pesertadidik extends Model
{
    use HasUuids, SoftDeletes;

    protected $primaryKey   = 'id';
    protected $guarded      = [];
    protected $dateFormat    = 'Y-m-d H:i:s';

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('nama', 'like', $term);
        });
    }

    public function scopeSearchpd($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('nama', 'like', $term);
        });
    }

    // mutator

    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = Str::title($value);
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if (!is_null($this->image)) {
            $directory = config('cms.image.directoryUsers');
            $imagePath = public_path() . "/{$directory}" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("/{$directory}" . $this->image);
        }

        return $imageUrl;
    }

    public function getImageThumbUrlAttribute($value)
    {
        $imageThumbUrl = "";

        if (!is_null($this->image)) {
            $directory = config('cms.image.directoryUsers');
            $imagePath = public_path() . "/{$directory}/images_thumb/" . $this->image;
            if (file_exists($imagePath)) $imageThumbUrl = asset("/{$directory}/images_thumb/" . $this->image);
        }

        return $imageThumbUrl;
    }

    public function province()
    {
        return $this->belongsTo('Laravolt\Indonesia\Models\Province', 'province_code', 'code');
    }

    public function city()
    {
        return $this->belongsTo('Laravolt\Indonesia\Models\City', 'city_code', 'code');
    }

    public function district()
    {
        return $this->belongsTo('Laravolt\Indonesia\Models\District', 'district_code', 'code');
    }

    public function village()
    {
        return $this->belongsTo('Laravolt\Indonesia\Models\Village', 'village_code', 'code');
    }

    // Set slug auto with nama dengan muttator
    public function setNameAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
    * Get the sekolah that owns the Semester
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function sekolah(): BelongsTo
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id');
    }

    /**
    * Get the pdlongitudinal associated with the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function pdlongitudinal(): HasMany
    {
        return $this->hasMany(Pdlongitudinal::class, 'pesertadidik_id');
    }

    /**
    * Get all of the anggotarombels for the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function anggotarombels(): HasMany
    {
        return $this->hasMany(Anggotarombel::class);
    }

    /**
    * Get all of the anggotarombels for the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function tagihansiswas(): HasMany
    {
        return $this->hasMany(Tagihansiswa::class);
    }

    /**
    * Get the tahunajaran that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function tahunajaran(): BelongsTo
    {
        return $this->belongsTo(Tahunajaran::class);
    }


    /**
    * Get the agama that owns the User
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function agama(): BelongsTo
    {
        return $this->belongsTo(Agama::class, 'agama_id');
    }

    /**
    * Get the kebutuhankhusus that owns the User
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function kebutuhankhusus(): BelongsTo
    {
        return $this->belongsTo(Kebutuhankhusus::class);
    }

    /**
    * Get the jenistinggal that owns the User
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function jenistinggal(): BelongsTo
    {
        return $this->belongsTo(Jenistinggal::class);
    }

    /**
    * Get the jenispendaftaran that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function jenispendaftaran(): BelongsTo
    {
        return $this->belongsTo(Jenispendaftaran::class);
    }

    /**
    * Get the semester that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }

    /**
    * Get the tingkatpendidikan that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function tingkatpendidikan(): BelongsTo
    {
        return $this->belongsTo(Tingkatpendidikan::class);
    }

    /**
    * Get the alattransportasi that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function alattransportasi(): BelongsTo
    {
        return $this->belongsTo(Alattransportasi::class);
    }

    /**
    * Get the jenjangpendidikan_ayah that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function jenjangpendidikan_ayah(): BelongsTo
    {
        return $this->belongsTo(Jenjangpendidikan::class, 'jenjangpendidikan_ayah_id');
    }

    /**
    * Get the pekerjaan_ayah that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function pekerjaan_ayah(): BelongsTo
    {
        return $this->belongsTo(Pekerjaan::class, 'pekerjaan_ayah_id');
    }

    /**
    * Get the penghasilan_ayah that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function penghasilan_ayah(): BelongsTo
    {
        return $this->belongsTo(Penghasilanortu::class, 'penghasilan_ayah_id');
    }

    /**
    * Get the jenjangpendidikan_ibu that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function jenjangpendidikan_ibu(): BelongsTo
    {
        return $this->belongsTo(Jenjangpendidikan::class, 'jenjangpendidikan_ibu_id');
    }

    /**
    * Get the pekerjaan_ibu that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function pekerjaan_ibu(): BelongsTo
    {
        return $this->belongsTo(Pekerjaan::class, 'pekerjaan_ibu_id');
    }

    /**
    * Get the penghasilan_ibu that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function penghasilan_ibu(): BelongsTo
    {
        return $this->belongsTo(Penghasilanortu::class, 'penghasilan_ibu_id');
    }

    /**
    * Get the jenjangpendidikan_wali that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function jenjangpendidikan_wali(): BelongsTo
    {
        return $this->belongsTo(Jenjangpendidikan::class, 'jenjangpendidikan_wali_id');
    }

    /**
    * Get the pekerjaan_wali that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function pekerjaan_wali(): BelongsTo
    {
        return $this->belongsTo(Pekerjaan::class, 'pekerjaan_wali_id');
    }

    /**
    * Get the penghasilan_wali that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function penghasilan_wali(): BelongsTo
    {
        return $this->belongsTo(Penghasilanortu::class, 'penghasilan_wali_id');
    }

    /**
    * Get the statuspotonganspp that owns the Pesertadidik
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function statuspotonganspp(): BelongsTo
    {
        return $this->belongsTo(Statuspotonganspp::class);
    }
}