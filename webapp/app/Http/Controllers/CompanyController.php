<?php


namespace App\Http\Controllers;


use App\Models\Company;
use App\Models\Student;

class CompanyController extends Controller
{

    public function index() {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }

    public function single(Company $company) {
        return view('company.single', compact('company'));
    }

    public function cabinet () {

        $company = Company::first();

        return view('company.cabinet.pages.index', compact('company','vacancies'));

    }

    public function cabinetVacancies ()
    {
        //        $company = Company::first();

        return view('company.cabinet.pages.vacancies'
        );
    }

    public function cabinetApplications ()
    {
        //        $company = Company::first();

        return view('company.cabinet.pages.applications'
        );
    }
}