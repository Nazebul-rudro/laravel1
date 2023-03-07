<?php

use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');
Route::get('/category/index', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::get('/category/edit', [CategoryController::class, 'edit']);
Route::get('/category/update', [CategoryController::class, 'update']);
Route::post('/category/store', [CategoryController::class, 'store']);



?>