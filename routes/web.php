<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoTaskController;

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

route::get('/' , [TodoTaskController::class, 'index'])->name('home');

Route::post('/', [TodoTaskController::class, 'tambah']);

Route::delete('/{id}', [TodoTaskController::class, 'deleteTask']);