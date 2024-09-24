<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pets extends Model
{
    use HasFactory;

    protected $fillable = [
        'breed',
        'shelter_id',
        'breed',
        'name',
        'age',
        'description',
    ];

    public function photos(): HasMany
    {
        return $this->hasMany(Photos::class, 'pet_id', 'id');
    }

    public function shelter()
    {
        return $this->belongsTo(Shelter::class, 'shelter_id', 'id');
    }
}
