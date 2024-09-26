<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Need extends Model
{
    use HasFactory;
    protected $fillable = [
        'need',
        'unit',
        ];

    public function shelter_needs(): BelongsTo
    {
        return $this->belongsTo(ShelterNeed::class, 'need_id', 'id');
    }
}
