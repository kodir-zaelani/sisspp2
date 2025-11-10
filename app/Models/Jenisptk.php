<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenisptk extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded = [];

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('jenis_ptk', 'like', $term);
        });
    }

    /**
     * Get all of the ptk for the Jenisptk
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ptk(): HasMany
    {
        return $this->hasMany(Ptk::class, 'jenisptk_id');
    }
}
