<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'id',
        'nim',
        'user_id',
        'name',
        'is_active',
        'phone'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function enrollments():HasMany{
        return $this->hasMany(Enrollment::class, 'student_id', 'id');
    }
}
