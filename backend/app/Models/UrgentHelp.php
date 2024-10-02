<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UrgentHelp extends Model
{
    use HasFactory;
    protected $table = 'urgent_help';
    protected $fillable=[
        'shelter_id',
        'name',
        'description',
        'phone_number',
        'status',
    ];

    public function shelter(): BelongsTo{
        return $this->belongsTo(Shelter::class, 'shelter_id', 'id');
    }

    public function photos(): HasMany
    {
        return $this->hasMany(Photos::class, 'pet_id', 'id');
    }
}
