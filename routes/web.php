<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShowProfileController;
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



//Route::get('/category', [CategoryController::class,'index']);
//Route::get('/category/create', [CategoryController::class,'create']);
//Route::post('/category', [CategoryController::class,'store']);
//Route::get('/category/show/{id}', [CategoryController::class,'show']);
//Route::get('/category/edit/{id}', [CategoryController::class,'edit']);
//Route::put('/category/{id}', [CategoryController::class,'update']);
//Route::delete('/category/delete/{id}', [CategoryController::class,'destroy']);


Route::resource('/category',CategoryController::class);


//Route::get('user/{id}', ShowProfileController::class);



//Route::get('redirect-with-helper',function (){
//    return redirect()->to('category');
//});
//
//Route::get('redirect-with-helper-shortcut',function (){
//    return redirect('category');
//});
//
//
//Route::redirect('redirect-by-route','category');


Route::get('redirect',function (){
    return redirect()->action([CategoryController::class,'create ']);
});
//Route::get('redirect',function (){
//    return redirect()->route('category.create');
//});
