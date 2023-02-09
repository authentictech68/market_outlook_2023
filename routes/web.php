<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\UserTable;
use App\Http\Controllers\Documentation;
use App\Http\Controllers\Material;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Dashboard::class, 'index']);

Route::get('/userTable', [UserTable::class, 'index']);

Route::get('/documentation', [Documentation::class, 'index']);

Route::get('/material', [Material::class, 'index']);
