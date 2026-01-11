<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'nim', 
        'user_id',
        'name',
        'is_active',
        'phone'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
