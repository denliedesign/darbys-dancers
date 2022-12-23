<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
})->middleware(['auth', 'verified', 'subscribed'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/volunteer-information', function () {
    return view('/volunteer-information');
});
Route::get('/darbys-dancers-memberships', function () {
    return view('/darbys-dancers-memberships');
});
Route::get('/darbys-studio-memberships', function () {
    return view('/darbys-studio-memberships');
});
Route::get('/about', function () {
    return view('/about');
});
Route::get('/donations', function () {
    return view('/donations');
});

Route::get('parent-resources', function () {
    return view('parent-resources');
});

Route::post('parent-resources', function () {
    return view('parent-resources');
});
Route::get('teacher-resources', function () {
    return view('teacher-resources');
});

Route::post('teacher-resources', function () {
    return view('teacher-resources');
});
Route::get('volunteer-resources', function () {
    return view('volunteer-resources');
});

Route::post('volunteer-resources', function () {
    return view('volunteer-resources');
});


//Route::get('register-studio', function () {
//    return view('register-studio');
//});

Route::resource('articles', ArticleController::class);
Route::resource('people', PersonController::class)->middleware(['auth', 'verified', 'subscribed']);
//Route::resource('people', PersonController::class)->middleware(['auth', 'verified']);
//Route::resource('users', UserController::class);

Route::get('volunteer', 'App\Http\Controllers\VolunteerController@create')->name('volunteer.create');
Route::post('volunteer', 'App\Http\Controllers\VolunteerController@store')->name('volunteer.store');

Route::get('enroll', 'App\Http\Controllers\EnrollController@create')->name('enroll.create');
Route::post('enroll', 'App\Http\Controllers\EnrollController@store')->name('enroll.store');

Route::get('inquire', 'App\Http\Controllers\InquireController@create')->name('inquire.create');
Route::post('inquire', 'App\Http\Controllers\InquireController@store')->name('inquire.store');

