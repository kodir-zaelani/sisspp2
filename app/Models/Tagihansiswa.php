<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tagihansiswa extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded    = [];
    protected $primaryKey = 'id';

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($q) use ($term) {
            $q->whereHas('pesertadidik', function ($qr) use ($term) {
                $qr->where('nama', 'LIKE', $term);
            });
            // $q->orWhereRaw('LOWER(title) LIKE ?', [$term]);
            // $q->orWhereRaw('LOWER(content) LIKE ?', [$term]);
        });
    }

    /**
     * Get the pesertadidik that owns the Anggotarombel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pesertadidik(): BelongsTo
    {
        return $this->belongsTo(Pesertadidik::class, 'pesertadidik_id');
    }

    /**
     * Get the jenistagihan that owns the Tagihansiswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenistagihan(): BelongsTo
    {
        return $this->belongsTo(Jenistagihan::class);
    }

    /**
     * Get the semester that owns the Tagihansiswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }
}
