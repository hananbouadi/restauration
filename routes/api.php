<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Models\Recipe;
use App\Models\User;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('categories', CategorieController::class);
Route::apiResource('recipes', RecipeController::class);
// Route::apiResource('user', UserController::class);
Route::get('/user', function () {
    $user = User::all();
    return response()->json($user);
});


// Route::middleware(['auth:api', 'admin'])->group(function () {
//     // Recipes routes
//     Route::get('/recipes', [AdminController::class, 'indexRecipes']);
//     Route::post('/recipes', [AdminController::class, 'storeRecipe']);
//     Route::get('/recipes/{id}', [AdminController::class, 'showRecipe']);
//     Route::put('/recipes/{id}', [AdminController::class, 'updateRecipe']);
//     Route::delete('/recipes/{id}', [AdminController::class, 'destroyRecipe']);
// });

// Define other API routes

