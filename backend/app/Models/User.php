<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Achivment;
{

}

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'phone_number',
        'user_pic_path',
        'is_active',
        'role_id',
        'level',
        'balance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function user_achivments(): HasMany
    {
        return $this->hasMany(UserAchivment::class, 'user_id', 'id');
    }

    public function achivments()
    {
        return $this->hasManyThrough(Achivment::class, UserAchivment::class, 'user_id', 'id', 'id', 'achivment_id');
    }

    public function user_forms()
    {
        return $this->hasManyThrough(Form::class, UserForm::class, 'user_id', 'id', 'id', 'form_id');
    }
}
