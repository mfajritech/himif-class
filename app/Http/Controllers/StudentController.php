<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        $user = Auth::user();
        $courses = $user->course
        return view('student.dashboard');
    }
}
