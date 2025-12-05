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

}
