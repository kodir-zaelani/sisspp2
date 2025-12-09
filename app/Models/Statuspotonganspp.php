<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Statuspotonganspp extends Model
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
    * Get all of the users for the Jenistinggal
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function pesertadidiks(): HasMany
    {
        return $this->hasMany(Pesertadidik::class);
    }
}
