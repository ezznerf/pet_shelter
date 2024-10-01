<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use mysql_xdevapi\Table;

class Volunteering extends Model
{
    protected $table = 'volunteering';
    use HasFactory;

    protected $fillable = [
        'type_help_id',
        'shelter_id',
        'type_of_car',
        'distance',
        'duration_of_walk',
    ];

    public function type_help(): HasMany
    {
        return $this->hasMany(TypeHelp::class, 'id', 'type_help_id');
    }

    public function shelter(): HasMany
    {
        return $this->hasMany(Shelter::class, 'id', 'shelter_id');
    }
}
