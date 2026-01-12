<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'id',
        'title',
        'coach_id',
        'description',
        'is_active',
        'total_meetings',
        'meeting_duration',
        'end_date',
        'schedule_day',
    ];

    public function coach():BelongsTo{
        return $this->belongsTo(Coach::class, 'coach_id', 'id');
    }
    public function enrollment():HasMany{
        return $this->hasMany(Enrollment::class, 'course_id', 'id');
    }
    public function meetings():HasMany{
        return $this->hasMany(CourseMeeting::class, 'course_id', 'id');
    }
}
