<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function registerView(){
        return view('auth.student-register');
    }
    public function register(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'ver_password' => 'required',
            'name' => 'required',
            'nim' => 'required',
            'phone' => 'required'
        ]);

        $check = User::where('email', $data['email'])->first();
        if($check != null){
            return redirect()->back()->withErrors([
                'error' => 'Email telah terdaftar!'
            ]);
        }
        if($data['password'] != $data['ver_password']){
            return redirect()->back()->withErrors([
                'error' => 'Verifikasi password salah!'
            ]);
        }

        $data['role'] = 'student';
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $user->student()->create($data);

        return redirect()->route('get-login');
    }
    public function loginView(){
        return view('auth.login');
    }
    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $data['email'])->first();
        if($user == null){
            return redirect()->back()->withErrors([
                'error' => 'Email belum terdaftar. Silakan lakukan proses pendaftaran terlebih dahulu.'
            ]);
        }
        if(!Hash::check($data['password'], $user->password)){
            return redirect()->back()->withErrors([
                'error' => 'Password yang dimasukkan salah!'
            ])->withInput();
        }
        Auth::login($user, true);

        if($user->role == 'student') return redirect()->route('student-dashboard');
        else if($user->role == 'coach') return redirect()->route('coach-dashboard');
        else if($user->role == 'admin') return redirect()->route('admin-dashboard');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('get-login');
    }
}
