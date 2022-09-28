<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CompaniesController;
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

Route::get('/', [CompaniesController::class, 'index'])->middleware(['auth'])->name('welcome');
Route::get('/admin', [AdminController::class, 'index'])->middleware(['admin'])->name('admin');

Route::resource('companies', CompaniesController::class)->middleware(['auth']);

require __DIR__ . '/auth.php';
