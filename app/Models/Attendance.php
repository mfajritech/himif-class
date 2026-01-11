<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    protected $table = 'attendances';
    protected $fillable = [
        'id',
        'courses_meeting_id',
        'user_id',
        'status'
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function course_meeting():BelongsTo{
        return $this->belongsTo(CourseMeeting::class, 'courses_meeting_id', 'id');
    }
}
