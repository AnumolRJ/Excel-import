<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/account_categories', App\Http\Controllers\AccountCategoryController::class);

Route::resource('/excel_import', App\Http\Controllers\ExcelImportController::class);

Route::resource('/image_upload', App\Http\Controllers\ImageUploadController::class);

Route::resource('/mail', App\Http\Controllers\MailController::class);

Route::resource('/backup', App\Http\Controllers\BackupController::class);
