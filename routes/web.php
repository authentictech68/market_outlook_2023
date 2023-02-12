<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
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

// Admin

Route::get('/', [Admin::class, 'index']);

Route::post('admin/store', [Admin::class, 'store']);

Route::post('admin/update', [Admin::class, 'update']);

Route::post('admin/delete', [Admin::class, 'delete']);

Route::post('admin/get_rundown', [Admin::class, 'get_rundown']);

Route::post('admin/export_rundown', [Admin::class, 'exportRundown'])->name('export-rundown');

Route::get('admin/userTable', [Admin::class, 'userTable']);

Route::get('/documentation', [Documentation::class, 'index']);

Route::get('/material', [Material::class, 'index']);

// User
