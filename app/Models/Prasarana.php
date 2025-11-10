<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prasarana extends Model
{
     use HasFactory, HasUuids, SoftDeletes;

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

}