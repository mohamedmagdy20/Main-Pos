<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FabricsController;
use App\Http\Controllers\GumController;
use App\Http\Controllers\LineController;
use App\Http\Controllers\ProfileController;
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
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::group(['prefix'=>'admin','controller'=>AdminController::class],function(){
        Route::get('/','index')->name('admin.index');
        Route::get('create','create')->name('admin.create');
        Route::get('data','data')->name('admin.data');

        Route::get('edit/{id}','edit')->name('admin.edit');
        Route::post('store','store')->name('admin.store');
        Route::post('update/{id}','update')->name('admin.update');
        Route::get('delete','delete')->name('admin.delete');
    
    });


    
    Route::group(['prefix'=>'gum','controller'=>GumController::class],function(){
        Route::get('/','index')->name('gum.index');
        Route::get('create','create')->name('gum.create');
        Route::get('data','data')->name('gum.data');
        Route::get('edit/{id}','edit')->name('gum.edit');
        Route::post('store','store')->name('gum.store');
        Route::post('update/{id}','update')->name('gum.update');
        Route::get('delete','delete')->name('gum.delete');
    });


    Route::group(['prefix'=>'line','controller'=>LineController::class],function(){
        Route::get('/','index')->name('line.index');
        Route::get('create','create')->name('line.create');
        Route::get('data','data')->name('line.data');

        Route::get('edit/{id}','edit')->name('line.edit');
        Route::post('store','store')->name('line.store');
        Route::post('update/{id}','update')->name('line.update');
        Route::get('delete','delete')->name('line.delete');
    });

    // Type Of Fabrics  => انواع الاقمشه 
    Route::group(['prefix'=>'fabrics','controller'=>FabricsController::class],function(){
        Route::get('/','index')->name('fabrics.index');
        Route::get('create','create')->name('fabrics.create');
        Route::get('data','data')->name('fabrics.data');

        Route::get('edit/{id}','edit')->name('fabrics.edit');
        Route::post('store','store')->name('fabrics.store');
        Route::post('update/{id}','update')->name('fabrics.update');
        Route::get('delete','delete')->name('fabrics.delete');
    });


});

require __DIR__.'/auth.php';
