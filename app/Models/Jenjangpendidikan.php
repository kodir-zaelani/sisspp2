<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenjangpendidikan extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'id';

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('nama', 'like', $term);
        });
    }

    /**
     * Get all of the tingkatpendidikan for the Jenjangpendidikan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   
    public function tingkatpendidikan(): HasMany
    {
        return $this->hasMany(Tingkatpendidikan::class, 'jenjangpendidikan_id');
    }
}