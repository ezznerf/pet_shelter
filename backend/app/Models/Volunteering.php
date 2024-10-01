<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Volunteering extends Model
{
    protected $table = 'volunteering';
    use HasFactory;
}
