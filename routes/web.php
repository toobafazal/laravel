<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;

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
    return view('welcome');
});

Route::get('/students', [studentsController::class, 'view']);
Route::get('/students/delete/{id}', [studentsController::class, 'delete']);

Route::view('/students/add','students.add');

Route::post('/students/add',[studentsController::class, 'add']);
Route::get('/students/update/{id}', [studentsController::class, 'update']);
Route::post('/students/update' , [ studentsController::class, 'change']);
