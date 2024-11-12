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
        'created_at',
        'updated_at',
        'img_path',
        'name',
        'description',
    ];

}
