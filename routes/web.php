<?php

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
use  App\Http\Controllers\login_controler;
use  App\Http\Middleware\logAcessoMiddleware;

Route::get('/',function(){
    return view('site.site');
})->name('site');


/*ROTA DAHBOARD*/
//START DAHBOARD
Route::prefix('Admin')->middleware(['auth','IsAdmin'])->group(function(){
    Route::get('/dashboard',[usuario_controler::class,'dashboard'])->name('dash')->middleware('log.acesso');
});
//END DAHBOARD

/*ROTA CATEGORIA*/
//START CATEGORIA
Route::prefix('Admin')->middleware(['auth','IsAdmin'])->group(function(){
    Route::get('/dashboard/categoria',[categoriaController::class,'index'])->name('categoria');
    Route::get('/dashboard/categoria',[categoriaController::class,'criar'])->name('categoria_criar');
    Route::post('/dashboard/categoria',[categoriaController::class,'store'])->name('categoria_store');
    Route::get('/dashboard/categoria/editar/{id}',[categoriaController::class,'edit'])->name('categoria_edit');
    Route::post('/dashboard/categoria/update/{id}',[categoriaController::class,'update'])->name('categoria_update');
    Route::get('/dashboard/categoria/apagar{id}',[categoriaController::class,'delete'])->name('categoria_delete');
});
//END CATEGORIA





Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
