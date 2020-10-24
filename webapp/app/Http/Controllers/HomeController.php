<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Student;
use App\Models\University;
use App\Models\Vacancy;
use App\Models\WorkArea;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $students = Student::limit(3)->get();
        $companies = Company::limit(3)->get();
        $universities = University::limit(3)->get();
        $vacancies = Vacancy::limit(3)->get();

        return view('home.index', compact('students','companies','universities','vacancies'));
    }

    public function login(Request $request)
    {
        $mapping = [
            'student'    => 'student.cabinet.index',
            'company'    => 'company.cabinet.index',
            'university' => 'company.cabinet.index',
        ];
        \Session::put('logged_as', $request->input('login-as'));

        if (isset($mapping[$request->input('login-as')])) {
            return redirect()->route($mapping[$request->input('login-as')]);
        }

        return redirect()->home();
    }

    public function logout(Request $request)
    {
        \Session::forget('logged_as');

        return redirect()->back();
    }
}
