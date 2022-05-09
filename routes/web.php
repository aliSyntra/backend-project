<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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
route::get('/layout', function () {
    return view('layout');
});

// massimo 
Route::get('/students',[StudentController::class,'showAll']);
Route::get('/student/{id}',[StudentController::class,'showStudent']);

// course
Route::get('/course', function () {
return view('course');
});

// about
Route::get('/about', function () {
    return view('about');
});
// home
Route::get('/home', function () {
    return view('home');
});

// Studenten,
Route::get('/student', function () {
    return view('student');
});
// Docenten,
Route::get('/docent', function () {
    return view('docent');
});
// Aanbod,
Route::get('/aanbod', function () {
    return view('aanbod');
});
// Locatie,
Route::get('/locatie', function () {
    return view('locatie');
});
// Contact
Route::get('/contact', function () {
    return view('contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
