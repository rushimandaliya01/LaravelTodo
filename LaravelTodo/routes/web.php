<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;
use PHPUnit\Framework\Attributes\Group;

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

Route::get('/login', [IndexController::class, 'index']) -> name('index');
Route::get('/', [IndexController::class, 'index']) -> name('index');

Route::post('/login',[UserController::class,'login'])-> name('login');
Route::get('/logout',[UserController::class,'logout'])-> name('logout');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home',[UserController::class,'homePage'])-> name('homePage');
    Route::post('/home',[UserController::class,'homePage'])-> name('homePage');
    Route::get('/addtodo',[TodoController::class,'addTodo'])-> name('addTodo');
    Route::post('/addtodo',[TodoController::class,'addTodo'])-> name('addTodo');
    Route::get('/edittodo/{id?}',[TodoController::class,'edittodo'])-> name('edittodo');
    Route::post('/store',[TodoController::class,'store'])-> name('store');
    Route::post('/edit',[TodoController::class,'edit'])-> name('edit');
    
    
    Route::get('/view/{id?}',[TodoController::class,'show'])-> name('show');
    Route::get('/delete/{id?}',[TodoController::class,'delete'])-> name('delete');
});


