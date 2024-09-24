<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photos extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'name',
        'size',
    ];

    public function pets(): BelongsTo
    {
        return $this->belongsTo(Pets::class, 'pet_id', 'id');
    }
}
