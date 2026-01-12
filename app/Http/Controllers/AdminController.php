<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    // COURSE
    public function manageCourse(){
        $courses = Course::with('coach')->where('end_date', null)->get();
        return view('admin.course.manage', [
            'courses' => $courses
        ]);
    }
    public function addCourseView(){
        $coaches = Coach::all();
        return view('admin.course.add', [
            'coaches' => $coaches
        ]);
    }
    public function addCourse(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'coach_id' => 'required',
            'description' => 'required',
            'total_meetings' => 'required',
            'meeting_duration' => 'required',
            'schedule_day' => 'required'
        ]);
        $data['is_active'] = false;

        Course::create($data);
        return redirect()->route('get-admin-manage-course');
    }
    public function editCourseView(Request $request){
        $course = Course::find($request->id);
        $coaches = Coach::all();
        return view('admin.course.edit', [
            'course' => $course,
            'coaches' => $coaches
        ]);
    }
    public function editCourse(Request $request){
        $data = $request->validate([
            'id' => 'required',
            'is_active' => 'required',
            'title' => 'required',
            'coach_id' => 'required',
            'description' => 'required',
            'total_meetings' => 'required',
            'meeting_duration' => 'required',
            'schedule_day' => 'required'
        ]);
        $course = Course::find($data['id']);
        $course->update($data);
        return redirect()->route('get-admin-detail-course', [
            'id' => $course->id
        ]);
    }
    public function detailCourseView(Request $request){
        $course = Course::find($request->id);
        return view('admin.course.detail', [
            'course' => $course,
        ]);
    }

    // COACH
    public function manageCoach(){
        $coaches = Coach::with('user')->get();
        return view('admin.coach.manage', [
            'coaches' => $coaches
        ]);
    }
    public function addCoachView(){
        return view('admin.coach.add');
    }
    public function addCoach(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'name' => 'required',
            'phone' => 'required'
        ]);
        $data['password'] = 'coach';
        $data['role'] = 'coach';

        $user = User::create($data);
        $user->coach()->create($data);
        return redirect()->route('get-admin-manage-coach');
    }
    public function editCoachView(Request $request){
        $coach = Coach::find($request->id);
        return view('admin.coach.edit', [
            'coach' => $coach
        ]);
    }
    // public function editCoach(Request $request){
    //     $data = $request->validate([
    //         'id' => 'required',
    //         'email' => 'required',
    //         'name' => 'required',
    //         'phone' => 'required'
    //     ]);
    //     $coach = Coach::find($request->id);
    //     $coach->update($data);
    //     return redirect()->route('get-admin-detail-coach', [
    //         'id' => $coach->id
    //     ]);
    // }
    public function detailCoachView(Request $request){
        $coach = Coach::find($request->id);
        $courses = $coach->courses;
        return view('admin.coach.detail', [
            'coach' => $coach,
            'courses' => $courses
        ]);
    }
    public function deleteCoach(Request $request){
        Coach::find($request->id)->delete();
        return redirect()->route('get-admin-manage-coach');
    }

    // STUDENT
    public function manageStudent(){
        $students = Student::with(relations: 'user')->get();
        return view('admin.student.manage', [
            'students' => $students
        ]);
    }
    public function detailStudent(Request $request){
        $student = Student::where('nim', $request->nim)->first();
        return view('admin.student.detail', [
            'student' => $student
        ]);
    }
}
