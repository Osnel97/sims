<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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
    return view('login');
});
Route::get('osnel',function(){
    return"welcome osnel";
});
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('login', [AuthController::class, 'index'])->name('login'); 
Route::post('login_process', [AuthController::class, 'login_process'])->name('login.process'); 
Route::get('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('Registration_process', [AuthController::class, 'Registration_process'])->name('Registration.process'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');


