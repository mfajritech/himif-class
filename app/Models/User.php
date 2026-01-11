<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $fillable = [
        'id',
        'email',
        'password',
        'role'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function student():HasOne{
        return $this->hasOne(Student::class, 'user_id', 'id');
    }
    public function coach():HasOne{
        return $this->hasOne(Coach::class, 'user_id', 'id');
    }
    public function attendances():HasMany{
        return $this->hasMany(Attendance::class, 'user_id', 'id');
    }
}
