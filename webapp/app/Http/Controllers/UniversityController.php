<?php


namespace App\Http\Controllers;


use App\Models\Student;
use App\Models\University;

class UniversityController extends Controller
{
    public function index() {
        $universities = University::limit(15)->get();
        return view('university.index', compact('universities'));
    }

    public function single(University $university) {
        $students = Student::whereUniversityId($university->id)->get();
        return view('university.single', compact('students','university'));
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