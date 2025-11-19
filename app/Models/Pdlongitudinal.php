<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pdlongitudinal extends Model
{
    use HasUuids, SoftDeletes;

    protected $primaryKey   = 'id';
    protected $guarded      = [];
    protected $dateFormat    = 'Y-m-d H:i:s';

    /**
     * Get the pesertadidik that owns the Pdlongitudinal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pesertadidik(): BelongsTo
    {
        return $this->belongsTo(Pesertadidik::class, 'pesertadidik_id');
    }

    /**
     * Get the semester that owns the Pdlongitudinal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }
}
