<?php

use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\LessonsController;
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
})->name('home');

Route::get('/users/{user}/achievements', [AchievementsController::class, 'index']);

Route::name('lessons.')->prefix('lessons')->middleware('auth')->group(function() {
    Route::get('/lessons/{lesson}/view', [LessonsController::class, 'view'])->name('view');
});
