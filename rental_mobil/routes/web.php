<?php

use App\Http\Controllers\SekolahController;
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

Route::get('template', function () {
    return view('template');
});

Route::get('add', function () {
    return view('add');
});

// Route ::get('siswa', [SekolahController::class,'index']);
// Route ::get('siswa/create', [SekolahController::class,'create']);
Route::resource('siswa', SekolahController::class);

Route::get('/edit/{id}', [SekolahController::class, 'edit']);
Route::post('/update', [SekolahController::class, 'update']);
Route::get('/delete/{id}', [SekolahController::class, 'destroy']);

