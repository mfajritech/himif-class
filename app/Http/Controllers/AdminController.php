<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    // COURSE
    public function manageCourse(){
        $courses = Course::where('end_date', null)->get();
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

    // COACH
    public function manageCoach(){
        $coaches = Coach::all();
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
        return redirect()->route('admin.get-admin-manage-coach');
    }
}
