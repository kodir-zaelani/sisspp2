<?php

namespace App\Models;

use Laravolt\Indonesia\Models\Village as VillageLaravolt;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Village extends VillageLaravolt
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