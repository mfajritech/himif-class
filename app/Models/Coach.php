<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coach extends Model
{
    protected $table = 'coaches';
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'phone'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function courses():HasMany{
        return $this->hasMany(Course::class, 'coach_id', 'id');
    }
}
