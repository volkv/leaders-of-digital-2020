<?php

namespace App\Http\Controllers;

use App\Helpers\NCFU;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $students = Student::limit(3)->get();

        return view('home.index', compact('students'));
    }

    public function login(Request $request)
    {
        \Session::put('logged_as', $request->input('login-as'));

        if ($request->input('login-as') === 'student') {
            return redirect()->route('student.cabinet.index');
        }

        return redirect()->home();
    }

    public function logout(Request $request)
    {
        \Session::forget('logged_as');


        return redirect()->back();
    }
}
