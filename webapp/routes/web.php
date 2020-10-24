<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UniversityController;
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

Route::get('/',  [HomeController::class, 'index'])->name('home');

Route::get('/students',  [StudentController::class, 'index'])->name('students');
Route::get('/students/{student}',  [StudentController::class, 'single'])->name('students.single');

Route::get('/universities',  [UniversityController::class, 'index'])->name('universities');
Route::get('/universities/{university}',  [UniversityController::class, 'single'])->name('universities.single');

Route::get('/company', function () {
    return view('company.single');
})->name('company.single');

Route::get('/university', function () {
    return view('university.single');
})->name('university.single');

Route::get('/vacancies', function () {
    return view('vacancies.index');
})->name('vacancies');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/companies', [CompanyController::class, 'index'])->name('companies');
Route::get('/companies/{company}', [CompanyController::class, 'single'])->name('companies.single');
