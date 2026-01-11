<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseMeeting extends Model
{
    protected $table = 'course_meetings';
    protected $fillable = [
        'id',
        'course_id',
        'title',
        'description',
        'meeting_number',
        'meeting_date',
        'start_time'
    ];

    public function course():BelongsTo{
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
    public function attendances():HasMany{
        return $this->hasMany(Attendance::class,'courses_meeting_id','id');
    }
}
