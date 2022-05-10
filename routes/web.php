<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PDFController;

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


//Route::get('post', [PostController::class, 'create'])->name('post');
//Route::post('generate', [PostController::class, 'generate'])->name('generate');



//Route::get('pdf/preview', [PDFController::class, 'preview'])->name('pdf.preview');
Route::get('generate', [PDFController::class, 'create'])->name('generate');
Route::post('generate', [PDFController::class, 'store']);

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Кэш очищен.";
});
