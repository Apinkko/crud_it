<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategorySubController;
use App\Http\Controllers\ProductController;
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


Route::resource('categories', CategoryController::class);
Route::resource('category_subs', CategorySubController::class);
Route::resource('products', ProductController::class);

Route::get('getSubCategory/{id}', function ($id) {
    $category_sub = App\Models\CategorySub::where('category_id', $id)->get();

    return response()->json($category_sub);
});
