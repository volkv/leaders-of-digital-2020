<?php


namespace App\Http\Controllers;


use App\Models\Student;
use App\Models\University;

class UniversityController extends Controller
{
    public function index() {
        $universities = University::all();
        return view('university.index', compact('universities'));
    }

    public function single(University $university) {
        return view('university.single', compact('university'));
    }

    public function cabinet () {

        $university = University::first();

        return view('university.cabinet.pages.index', compact('university'));

    }
    public function cabinetStudents ()
    {
        $students = Student::whereUniversityId(1)->get();
        return view('university.cabinet.pages.students', compact('students')
        );
    }
    public function cabinetDashboard ()
    {
        return view('university.cabinet.pages.dashboard',
        );
    }
}