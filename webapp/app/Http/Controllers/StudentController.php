<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Student;
use App\Models\University;
use App\Models\Vacancy;

class StudentController extends Controller
{
    public function index () {
        $students = Student::limit(15)->get();

        return view('student.index', compact('students'));
    }
    public function single (Student $student) {

        return view('student.single', compact('student'));

    }

    public function cabinet () {

        $student = Student::first();

        return view('student.cabinet.pages.index', compact('student'));

    }

    public function cabinetCompanies () {

        $student = Student::first();
        $companies = Company::limit(5)->get();

        return view('student.cabinet.pages.companies', compact('student', 'companies'));

    }

    public function cabinetSettings () {

        $student = Student::first();

        return view('student.cabinet.pages.settings', compact('student'));

    }

    public function cabinetVacancies () {

       $vacancies = Vacancy::limit(3)->get();


        return view('student.cabinet.pages.vacancies', compact('vacancies'));

    }
}
