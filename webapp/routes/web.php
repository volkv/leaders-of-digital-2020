<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/students',  [StudentController::class, 'index'])->name('students');
Route::get('/students/{student}',  [StudentController::class, 'single'])->name('students.single');

Route::get('/company', function () {
    return view('company.single');
})->name('home');

Route::get('/university', function () {
    return view('university.single');
})->name('home');

Route::get('/vacancies', function () {
    return view('vacancies.index');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/companies/{company}', [CompanyController::class, 'single'])->name('companies.single');
