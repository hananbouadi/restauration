<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\SessionTimeoutMiddleware;
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
    return view('welcome');
});
// Route::get('/login',function(){
//     return view('login') ;
// });
// Route pour afficher le formulaire de connexion
Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');

// Route pour gérer l'authentification
Route::post('/login', [AdminController::class, 'login']);

// Route pour le tableau de bord
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('admin');

Route::middleware(['admin', SessionTimeoutMiddleware::class . ':5'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
Route::resource('/admin',AdminController::class);

Route::resource('/user',UserController::class);


