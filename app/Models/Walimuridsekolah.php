<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Walimuridsekolah extends Model
{
     /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $primaryKey = 'id';

    // public function scopeSearch($query, $term)
    // {
    //     $term = "%$term%";
    //     $query->where(function ($query) use ($term) {
    //         $query->where('name', 'like', $term)
    //         ->orWhereHa('username','like',$term)
    //         ->orWhere('phone','like',$term)
    //         ->orWhere('email','like',$term);
    //     });
    // }

    /**
     * Get the user that owns the Walimuridsekolah
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the pesertadidik that owns the Walimuridsekolah
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pesertadidik(): BelongsTo
    {
        return $this->belongsTo(Pesertadidik::class);
    }

    /**
     * Get the sekolah that owns the Walimuridsekolah
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sekolah(): BelongsTo
    {
        return $this->belongsTo(Sekolah::class);
    }
}
