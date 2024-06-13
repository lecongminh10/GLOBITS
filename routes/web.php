<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('dasborad');
});


Route::prefix('country')->group(function(){
    Route::get('/' , [CountryController::class, 'index'])->name('country.index');
    Route::get('/create' , [CountryController::class , 'create']) ->name('country.create');
    Route::post('/store' , [CountryController::class , 'store'])->name('country.store');
    Route::get('/{country}' , [CountryController::class, 'edit'])->name('country.edit');
    Route::put('/{country}/update' , [CountryController::class, 'update'])->name('country.update');
    Route::delete('/{country}/destroy' , [CountryController::class , 'destroy'])->name('country.destroy');
});

Route::prefix('user')->group(function(){
    Route::get('/' , [UserController::class, 'index'])->name('user.index');
    Route::get('/create' , [UserController::class , 'create']) ->name('user.create');
    Route::post('/store' , [UserController::class , 'store'])->name('user.store');
    Route::get('/{user}' , [UserController::class, 'edit'])->name('user.edit');
    Route::post('/{user}/update' , [UserController::class, 'update'])->name('user.update');
    Route::delete('/{user}/destroy' , [UserController::class , 'destroy'])->name('user.destroy');
});
Route::prefix('person')->group(function(){
    Route::get('/' , [PersonController::class, 'index'])->name('person.index');
    Route::get('/create' , [PersonController::class , 'create']) ->name('person.create');
    Route::post('/store' , [PersonController::class , 'store'])->name('person.store');
    Route::get('/{person}' , [PersonController::class, 'edit'])->name('person.edit');
    Route::post('/{person}/update' , [PersonController::class, 'update'])->name('person.update');
    Route::delete('/{person}/destroy' , [PersonController::class , 'destroy'])->name('person.destroy');
});
Route::prefix('company')->group(function(){
    Route::get('/' , [CompanyController::class, 'index'])->name('company.index');
    Route::get('/create' , [CompanyController::class , 'create']) ->name('company.create');
    Route::post('/store' , [CompanyController::class , 'store'])->name('company.store');
    Route::get('/{company}' , [CompanyController::class, 'edit'])->name('company.edit');
    Route::post('/{company}/update' , [CompanyController::class, 'update'])->name('company.update');
    Route::delete('/{company}/destroy' , [CompanyController::class , 'destroy'])->name('company.destroy');

    //department
    Route::get('/{company}/department', [DepartmentController::class, 'index'])->name('company.id.department.index');
    Route::get('/{company}/department/create', [DepartmentController::class, 'create']);
    Route::post('/{company}/department/store', [DepartmentController::class, 'store']);
    Route::get('/{company}/department/{department}', [DepartmentController::class, 'edit']);
    Route::post('/{company}/department/{department}/update', [DepartmentController::class, 'update'])  ->name('company.department.update');
    Route::delete('/{company}/department/{department}/destroy', [DepartmentController::class, 'destroy']);
});

Route::prefix('role')->group(function(){
    Route::get('/' , [RoleController::class, 'index'])->name('role.index');
    Route::get('/create' , [RoleController::class , 'create']) ->name('role.create');
    Route::post('/store' , [RoleController::class , 'store'])->name('role.store');
    Route::get('/{role}' , [RoleController::class, 'edit'])->name('role.edit');
    Route::post('/{role}/update' , [RoleController::class, 'update'])->name('role.update');
    Route::delete('/{role}/destroy' , [RoleController::class , 'destroy'])->name('role.destroy');
});

//Project
Route::prefix('project')->group(function(){
    Route::get('/' , [ProjectController::class, 'index'])->name('project.index');
    Route::get('/create' , [ProjectController::class , 'create']) ->name('project.create');
    Route::post('/store' , [ProjectController::class , 'store'])->name('project.store');
    Route::get('/{project}' , [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/{project}/update' , [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/{project}/destroy' , [ProjectController::class , 'destroy'])->name('project.destroy');
});

Route::prefix('task')->group(function(){
    Route::get('/' , [TaskController::class, 'index'])->name('task.index');
    Route::get('/create' , [TaskController::class , 'create']) ->name('task.create');
    Route::post('/store' , [TaskController::class , 'store'])->name('task.store');
    Route::get('/{task}' , [TaskController::class, 'edit'])->name('task.edit');
    Route::post('/{task}/update' , [TaskController::class, 'update'])->name('task.update');
    Route::delete('/{task}/destroy' , [TaskController::class , 'destroy'])->name('task.destroy');
   
});

