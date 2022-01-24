<?php

use App\Http\Controllers\backend\BlogController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::get('/blog', [BlogController::class, 'index'])
    ->name('blog')
    ->middleware(['auth:sanctum', 'verified']);

Route::get('/blog/novo', [BlogController::class, 'create'])
    ->name('blog.create')
    ->middleware(['auth:sanctum', 'verified']);
