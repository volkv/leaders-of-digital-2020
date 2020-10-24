<?php


namespace App\Http\Controllers;


use App\Models\Company;

class CompanyController extends Controller
{

    public function index() {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }

    public function single(Company $company) {
        return view('company.single', compact('company'));
    }

}