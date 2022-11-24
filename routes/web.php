<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LandingController;
 
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

Route::get('/landingPage', [PostsController::class, 'plantilla']);
Route::get('/imagenes', [PostsController::class, 'imag']);
Route::get('/LandingDos', [LandingController::class, 'create']);
Route::post('/Landing', [LandingController::class, 'store'])->name('post.store');
Route::get('/datos', [LandingController::class, 'index']);


Route::get('/cafePacas', [PostsController::class, 'cafePacas']);
Route::get('/cafePacas2', [PostsController::class, 'cafePacas2']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
