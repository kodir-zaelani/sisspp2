<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    use HasUuids;

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
     * Get the pesertadidik that owns the Invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pesertadidik(): BelongsTo
    {
        return $this->belongsTo(Pesertadidik::class);
    }

    /**
     * Get the rombonganbelajar that owns the Invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rombonganbelajar(): BelongsTo
    {
        return $this->belongsTo(Rombonganbelajar::class);
    }

    /**
     * Get the semester that owns the Invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function semester(): BelongsTo
    {
        return $this->belongsTo(semester::class);
    }

    /**
     * Get all of the detailinvoices for the Invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailinvoices(): HasMany
    {
        return $this->hasMany(Detailinvoice::class);
    }
}