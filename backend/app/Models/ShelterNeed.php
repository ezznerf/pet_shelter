<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShelterNeed extends Model
{
    use HasFactory;

    protected $fillable = [
        'shelter_id',
        'count',
        'brand',
        'need',
        'unit'
        ];

    public function shelter(): BelongsTo
    {
        return $this->belongsTo(Shelter::class, 'shelter_id', 'id');
    }
}
