<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detailtempinvoice extends Model
{
    use HasFactory;
    use HasUuids;
    use HasFormatRupiah;


    protected $primaryKey = 'id';

    /**
     * Get the invoice that owns the Detailinvoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    /**
     * Get the tagihansiswa that owns the Detailinvoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tagihansiswa(): BelongsTo
    {
        return $this->belongsTo(Tagihansiswa::class);
    }

    /**
     * Get the pesertadidik that owns the Detailtempinvoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pesertadidik(): BelongsTo
    {
        return $this->belongsTo(Pesertadidik::class);
    }
}