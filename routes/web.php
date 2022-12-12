<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnqueteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VotationController;

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

Route::resource('enquetes', EnqueteController::class);

Route::resource('votation', VotationController::class);

Route::get('/get-votes/{id}', [VotationController::class, 'getVotes'])->name('getVotes');

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [UserController::class, 'login'])->name('user.login');

Route::post('/auth', [UserController::class, 'auth'])->name('user.auth');

Route::get('/cadastro', [UserController::class, 'cadastro'])->name('user.cadastro');

Route::post('/store', [UserController::class, 'store'])->name('user.store');

Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');