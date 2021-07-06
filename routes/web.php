<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/write', [BlogController::class, 'writeIndex']);
Route::post('/write/submit', [BlogController::class, 'submitBlog'])->name('write');

Route::get('/read', [BlogController::class, 'readIndex']);
Route::get('/read/{title}', [BlogController::class, 'showBlog']);

Route::get('/register', [UserController::class, 'registerIndex']);
Route::post('/register/submit', [UserController::class, 'registerUser']);

Route::get('/login', [UserController::class, 'loginIndex']);
