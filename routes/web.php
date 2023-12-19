<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;

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
    return view('index');
});

Route::get('/login',[ViewController::class,'viewLoginForm'])->name('login');

Route::get('/register', [ViewController::class,'viewRegistrationForm']);


Route::group(['middleware' => ['auth']], function () {
    Route::get('/student/home', [ViewController::class,'studentHome'])->name('student.home');

    Route::get('/guest/home', [GuestController::class,'index'])->name('guest.home');

    Route::get('/admin/dashboard', [ProjectController::class,'index'])->name('admin.home');
    // routes/web.php or routes/api.php
    Route::get('/projects/available-locations', [ProjectController::class, 'availableLocations']);
    Route::get('/projects/{project}', [ProjectController::class, 'show']);

    Route::post('/assign-location/{projectId}/{locationId}', [ProjectController::class, 'assignLocation']);

});

//Route for logging in
Route::post('/user/authenticate',[UserController::class,'authenticate']);
//Route for user Registeration
Route::post('/user/register',[UserController::class,'createUser']);
//Route for user logout
Route::post('/user/logout',[UserController::class,'logout']);