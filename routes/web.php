<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth','admin'])->group(function(){

    Route::get('/create', [MainController::class, 'create'])->name('create');;
    Route::post('/create', [MainController::class, 'store'])->name('store');

    Route::get('/edit/{id}', [MainController::class, 'edit'])->name('edit');
    Route::post('/edit/{id}', [MainController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [MainController::class, 'destroy'])->name('delete');

    Route::get('/createUser', [AdminController::class, 'createUser'])->name('createUser');
    Route::post('/createUser', [AdminController::class, 'storeUser'])->name('storeUser');
    Route::get('/editUser/{id}', [AdminController::class, 'edit'])->name('UserEdit');
    Route::post('/editUser/{id}', [AdminController::class, 'update'])->name('updateUser');
    Route::get('/deleteUser/{id}', [AdminController::class, 'destroy'])->name('deleteUser');


    Route::get('/createType', [AdminController::class, 'create'])->name('createType');
    Route::post('/createType', [AdminController::class, 'store'])->name('storeType');
    Route::get('/editType/{id}', [AdminController::class, 'editType'])->name('editType');
    Route::post('/editType/{id}', [AdminController::class, 'updateType'])->name('updateType');
    Route::get('/deleteType/{id}', [AdminController::class, 'destroyType'])->name('deleteType');

    Route::get('/uploadfile', [ImageController::class,'index']);
    Route::post('/uploadfile', [ImageController::class,'store']);
});




Route::get('/', [MainController::class, 'index'])->name('home') ;

Route::get('/vehicule/{id}', [MainController::class, 'vehicule'])->name('voir_plus');

Route::get('/type/{id}', [MainController::class, 'ShowType'])->name('voir_type_categorie');


require __DIR__.'/auth.php';

