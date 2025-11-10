<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusansp extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded    = [];
    protected $primaryKey = 'id';

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('nama', 'like', $term);
        });
    }

    /**
     * Get the sekolah that owns the Jurusansp
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sekolah(): BelongsTo
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id');
    }

    /**
     * Get the jurusan that owns the Jurusansp
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}