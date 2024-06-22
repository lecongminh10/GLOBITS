<?php

use App\Exports\TasksExport;
use App\Http\Controllers\api\CountryController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// use App\Http\Controllers\TaskController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::post('/users-import', [TaskController::class, 'import']);
// Route::get('/users-export', [TaskController::class, 'export']);


Route::get('/task/export-excel', [TaskController::class, 'export'])->name('task.export.excel');

Route::resource('country', CountryController::class);
