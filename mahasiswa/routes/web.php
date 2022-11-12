<?php

use App\Http\Controllers\mahasiswaController0;
use App\Http\Controllers\Admin\mahasiswaController;
use App\Http\Controllers\Admin\DosenController;
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
    return view('welcome');
});

Route::controller(mahasiswaController::class)->group(function () {
    Route::get('/', 'index');
    //Route::get('/mahasiswa/{id}', 'show');
    Route::post('/mahasiswa/store', 'store');
    Route::get('/mahasiswa/new', 'create');
    //Route::delete('/mahasiswa/{id}', 'destroy');
    //Route::get('/mahasiswa/{id}', 'edit');
    //Route::put('/mahasiswa/{id}', 'update');
});
Route::resource('admin/dosen', 'App\Http\Controllers\Admin\DosenController');
Route::resource('admin/mahasiswa', 'App\Http\Controllers\Admin\mahasiswaController');