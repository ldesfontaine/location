<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\MainController;

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

 Route::get('/welcome', function () {
     return view('welcome');
 });

Route::get('/', [MainController::class, 'index'])->name('home') ;

Route::get('/vehicule/{id}', [MainController::class, 'vehicule'])->name('voir_plus');

Route::get('/type/{id}', [MainController::class, 'ShowType'])->name('voir_type_categorie');

Route::get('/create', [MainController::class, 'create'])->name('create');
Route::post('/create', [MainController::class, 'store'])->name('store');

Route::get('/edit/{id}', [MainController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [MainController::class, 'update'])->name('update');

Route::get('/delete/{id}', [MainController::class, 'destroy'])->name('delete');
