<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;


Route::get('/',[RegController::class,"index"]);
Route::get('/edit/{id}',[RegController::class, "edit"]);
Route::get('/show/{id}',[RegController::class, "show"]);
Route::get('/create',[RegController::class, "create"]);
Route::post('/store',[RegController::class, "store"]);
Route::post('/update/{id}',[RegController::class, "update"]);
Route::get('/view',[RegController::class,"view"]);
// Route::get('/create',"RegController@create") ;