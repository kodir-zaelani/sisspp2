<?php

namespace App\Models;

use Laravolt\Indonesia\Models\Province as ProvenceLaravolt;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provence extends ProvenceLaravolt
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
