<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        $user = Auth::user();
        $student = $user->student;
        $enrollments = $student->enrollments;
        $courses = Course::where('end_date', null)->get();

        return view('student.dashboard', [
            'student' => $student,
            'courses' => $courses,
            'enrollments' => $enrollments
        ]);
    }
    public function myCoursesView(){
        $user = Auth::user();
        $enrollments = $user->student->enrollments;
        $enrollments = Enrollment::where('student_id', $user->student->id)
                                        ->where('status', 'accepted')
                                        ->get();
        $enrollPending = Enrollment::where('student_id', $user->student->id)
                                        ->where('status', 'pending')
                                        ->get();
        $myCourses = [];
        foreach($enrollments as $enrollment){
            $myCourses[] = Course::with(['coach', 'enrollment'])->find($enrollment->course_id);
        }
        $myCoursesPending = [];
        foreach($enrollPending as $enrollment){
            $myCoursesPending[] = Course::with(['coach', 'enrollment'])->find($enrollment->course_id);
        }

        return view('student.course.myCourses', [
            'myCourses' => $myCourses,
            'myCoursesPending' => $myCoursesPending,
            'enrollments' => $enrollments
        ]);
    }
    public function coursesView(){
        $courses = Course::with('coach')->where('end_date', null)->get();
        return view('student.course.courses', [
            'courses' => $courses
        ]);
    }
    public function detailCourse(Request $request){
        $course = Course::find($request->id);
        return view('student.course.detail', [
            'course' => $course
        ]);
    }
    public function enrollView(Request $request){
        $course = Course::find($request->id);
        return view('student.course.enroll', [
            'course' => $course
        ]);
    }
    public function enroll(Request $request){
        $course = Course::find($request->id);
        $user = User::find(Auth::user()->id);
        $student = $user->student;

        $course->enrollment()->create([
            'student_id' => $student->id,
            'status' => 'pending'
        ]);

        return redirect()->route('get-student-my-courses');
    }
}
