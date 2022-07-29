<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
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

Route::get('/cls', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        $run = Artisan::call('view:clear');
        
        Session::flush();
        return 'FINISHED';
    });
Route::get('/migrate', function() {
     Artisan::call('migrate');

return 'FINISHED';
});



Route::get('/', function () {
    return view('welcome');
});
Route::get('/task',[\App\Http\Controllers\EmployeesController::class, 'index'])->name('employee.index');
Route::get('/create', [\App\Http\Controllers\EmployeesController::class,'create'])->name('employee.create');
Route::post('save',[\App\Http\Controllers\EmployeesController::class,'store'])->name('save');
Route::get('delete/{id}',[\App\Http\Controllers\EmployeesController::class,'destroy'])->name('delete');
Route::get('edit/{id}',[\App\Http\Controllers\EmployeesController::class,'edit'])->name('employee.edit');
Route::get('show/{id}',[\App\Http\Controllers\EmployeesController::class,'show'])->name('employee.show');
Route::post('update/{id}',[\App\Http\Controllers\EmployeesController::class,'update'])->name('employee.update');

// Route::resource('task', EmployeesController::class);

Route::get('/company', [\App\Http\Controllers\CompanyController::class, 'index']) ->name('company.index');
Route::get('/create', [\App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
Route::post('saves',[\App\Http\Controllers\CompanyController::class,'store'])->name('stores');
Route::get('delete/{id}',[\App\Http\Controllers\CompanyController::class,'destroy'])->name('delete');
Route::get('edit/{id}',[\App\Http\Controllers\CompanyController::class,'edit'])->name('company.edit');
Route::get('show/{id}',[\App\Http\Controllers\CompanyController::class,'show'])->name('company.shows');
Route::post('update/{id}',[\App\Http\Controllers\CompanyController::class,'update'])->name('company.update');

