<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'agency_name',
        'phone_number',
        'email',
        'address',  // Make sure this line is present
        'password',
        'bio',
        'profile_picture',
    ];

    protected $hidden = ['password', 'remember_token'];

    public function announces()
    {
        return $this->hasMany(Announce::class, 'user_id');
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
