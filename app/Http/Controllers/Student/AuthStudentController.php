<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthStudentController extends Controller
{
    public function login(Request $request){

        $request->validate([
            'matricula'=>['required', 'exists:students,matricula'],
            'password'=>['required']
        ]);

        $credentials = $request->only('matricula','password');
        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->intended(route('student.dashboard'));
        }

        return back()->withErrors([
            'matricula'=>'Matricula o contraseña incorrectos'
        ]);

    }

    public function logout(Request $request){
        auth()->guard('student')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
