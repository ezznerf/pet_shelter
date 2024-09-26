<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShelterNeed extends Model
{
    use HasFactory;

    protected $fillable = [
        'need_id',
        'count',
        'brand',
        ];

    public function needs(): HasMany {
        return $this->hasMany(Need::class, 'need_id', 'id');
    }
}
