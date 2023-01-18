<?php

use App\Http\Controllers\ContectsController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::controller(ContectsController::class)->group(function(){
    Route::get('/','index')->name('contacts.index');
    Route::get('/create','create')->name('contacts.create');
    Route::post('/store','store')->name('contacts.store');
    Route::get('/show/{id}','show')->name('contacts.show');
    Route::get('/edit/{id}','edit')->name('contacts.edit');
    Route::put('/update/{id}','update')->name('contacts.update');
    Route::get('/delete/{id}','delete')->name('contacts.delete');
});
