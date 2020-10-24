<?php


namespace App\Http\Controllers;


use App\Models\Application;
use App\Models\Company;
use App\Models\Student;
use App\Models\Vacancy;

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
        $vacancies = Vacancy::whereCompanyId($company->id)->get();

        return view('company.cabinet.pages.index', compact('company','vacancies'));

    }

    public function cabinetVacancies ()
    {
        $company = Company::first();
        $vacancies = Vacancy::whereCompanyId($company->id)->get();
        return view('company.cabinet.pages.vacancies', compact('vacancies')
        );
    }

    public function cabinetApplications ()
    {
                $company = Company::first();
                $vacancies = Vacancy::whereCompanyId($company->id)->get();
                $vacanciesIds = [];
                foreach ($vacancies as $vacancy) {
                    $vacanciesIds[] = $vacancy->id;
                }
                $applications = Application::query()->whereIn('vacancy_id', $vacanciesIds)->get();
        return view('company.cabinet.pages.applications', compact('applications')
        );
    }
}