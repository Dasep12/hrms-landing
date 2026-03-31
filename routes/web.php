<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/database-employee', [App\Http\Controllers\HomeController::class, 'database_employee'])->name('database.employee');
Route::get('/struktur-employee', [App\Http\Controllers\HomeController::class, 'struktur_employee'])->name('struktur.employee');
Route::get('/grading-upah', [App\Http\Controllers\HomeController::class, 'gradingupah_employee'])->name('gradingupah.employee');
Route::get('/dashboard-analytic', [App\Http\Controllers\HomeController::class, 'dashboard_employee'])->name('dashboard.employee');
Route::get('/apps-employee', [App\Http\Controllers\HomeController::class, 'apps_employee'])->name('apps.employee');
Route::get('/schedule-employee', [App\Http\Controllers\HomeController::class, 'schedule_employee'])->name('schedule.employee');
Route::get('/permit-employee', [App\Http\Controllers\HomeController::class, 'permit_employee'])->name('permit.employee');
Route::get('/payroll-employee', [App\Http\Controllers\HomeController::class, 'payroll_employee'])->name('payroll.employee');
Route::get('/pph-employee', [App\Http\Controllers\HomeController::class, 'pph_employee'])->name('pph.employee');
Route::get('/benefit-employee', [App\Http\Controllers\HomeController::class, 'benefit_employee'])->name('benefit.employee');

Route::get('/price', [App\Http\Controllers\HomeController::class, 'price'])->name('price.index');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about.index');
Route::get('/contact-demo', [App\Http\Controllers\HomeController::class, 'demo'])->name('demo.index');
