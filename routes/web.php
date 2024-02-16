<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

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

Route::get('/About Me', [AboutMeController::class, 'show']);
Route::get('/Skills', [SkillsController::class, 'show']);
Route::get('/Hobbies', [HobbiesController::class, 'show']);