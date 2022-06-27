<?php

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
    return view('home');
});

Route::get('/gestion', [UserController::class, 'index'])->name('gestion.index');
Route::post('/gestion/store', [UserController::class, 'store'])->name('gestion.store');
Route::put('/gestion/update/{id}', [UserController::class, 'update'])->name('gestion.update');
Route::delete('/gestion/destroy', [UserController::class, 'destroy'])->name('gestion.destroy');


require __DIR__ . '/auth.php';
