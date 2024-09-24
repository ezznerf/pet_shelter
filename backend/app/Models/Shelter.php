<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shelter extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'location',
        'phone_number',
    ];

    public function pets(): HasMany
    {
        return $this->hasMany(Pets::class, 'shelter_id', 'id');
    }

    public function photos()
    {
        return $this->hasManyThrough(Pets::class, Photos::class, 'pet_id', 'id', 'id');
    }
}
