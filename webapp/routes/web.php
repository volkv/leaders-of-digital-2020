<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/',  [HomeController::class, 'login']);
Route::get('/logout',  [HomeController::class, 'logout'])
;
Route::get('/',  [HomeController::class, 'index'])->name('home');


Route::get('/students',  [StudentController::class, 'index'])->name('students');
Route::get('/students/{student}',  [StudentController::class, 'single'])->name('students.single');

Route::get('/student-cabinet',  [StudentController::class, 'cabinet'])->name('student.cabinet.index');
Route::get('/student-cabinet/companies',  [StudentController::class, 'cabinetCompanies'])->name('student.cabinet.companies');
Route::get('/student-cabinet/settings',  [StudentController::class, 'cabinetSettings'])->name('student.cabinet.settings');

Route::get('/universities',  [UniversityController::class, 'index'])->name('universities');
Route::get('/universities/{university}',  [UniversityController::class, 'single'])->name('universities.single');

Route::get('/vacancies',  [VacancyController::class, 'index'])->name('vacancies');
Route::get('/vacancies/{vacancy}',  [VacancyController::class, 'single'])->name('vacancies.single');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/companies', [CompanyController::class, 'index'])->name('companies');
Route::get('/companies/{company}', [CompanyController::class, 'single'])->name('companies.single');
