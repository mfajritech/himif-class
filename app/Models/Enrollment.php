<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Enrollment extends Model
{
    protected $table = 'enrollments';

    protected $fillable = [
        'id',
        'course_id',
        'student_id',
        'status'
    ];

    public function course():BelongsTo{
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
    public function student():BelongsTo{
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
