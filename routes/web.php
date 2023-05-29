<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HalamanController;


Route::get('/', function () {           //url
    return view('welcome');             //pamggil view
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/halaman1',[HalamanController::class,'index']);
Route::get('/halaman2',[HalamanController::class,'halaman2']);

Route::get('/selamatDatang',[HalamanController::class,'welcome']);

Route::get('/cobain',[HalamanController::class,'coba']);

Route::get('/tampil',[ArticleController::class,'index']);
Route::get('/tambah_data',[ArticleController::class,'tambah_data']);
Route::post('/tambah_data',[ArticleController::class,'input_data']);
Route::get('/tampil_data',[ArticleController::class,'tampil_data']);
Route::get('/edit_data/{id}',[ArticleController::class,'edit_data']);
Route::post('/edit_data/{id}',[ArticleController::class,'update_data']);

//---------------------------------------------------------------------------------------------------------------
Route::get('/tambah_data1',[MuridController::class,'tambah_data1']);
Route::post('/tambah_data1',[MuridController::class,'input_data1']);
Route::get('/tampil_data1',[MuridController::class,'tampil_data1']);
Route::get('/edit_data1/{id}',[MuridController::class,'edit_data1']);
Route::post('/edit_data1/{id}',[MuridController::class,'update_data1']);
Route::get('/hapus_data1/{id}',[MuridController::class,'hapus_data1']);














Route::get('/artikel', [ArticleController::class,'index']);
Route::get('/artikel/{slug}', [ArticleController::class,'show']);
 

