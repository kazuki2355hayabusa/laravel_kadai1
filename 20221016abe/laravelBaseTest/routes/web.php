<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[TodoListController::class,'index']);
Route::post('/add',[TodoListController::class,'add']);
Route::post('/update',[TodoListController::class,'update']);
Route::post('/delete',[TodoListController::class,'delete']);