<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravolt\Indonesia\Models\District as DistrictLaravolt;

class District extends DistrictLaravolt
{
    use HasFactory;

     public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('name', 'like', $term);
        });
    }
}
