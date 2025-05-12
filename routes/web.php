<?php

use App\Models\Classroom;
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
    // return 'astra';
    return view('welcome');
});
Route::get('dashboard', function () {
    $classrooms = Classroom::all();
    return view('dashboard', compact('classrooms'));
});

Route::get('/name/{name}', function ($name) {
    return $name;
});