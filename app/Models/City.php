<?php

namespace App\Models;

use Laravolt\Indonesia\Models\City as CityLaravolt;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class City extends CityLaravolt
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
