<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'shelter_id',
        'volunteering_id',
        'name',
        'surname',
        'patronymic',
        'time',
        'date',
        'car',
        'about_yourself',
    ];

    public function shelter(): BelongsTo{
        return $this->belongsTo(Shelter::class, 'shelter_id', 'id');
    }

    public function volunteering(): BelongsTo{
        return $this->belongsTo(Volunteering::class, 'volunteering_id', 'id');
    }
}
