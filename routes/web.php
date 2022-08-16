<?php

use App\Http\Controllers\mailController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Bus;
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
// 97054e07-c16b-4718-8897-3d9d5ecd1217

Route::get('/b', function () {
    return session()->get('batchId');
});
Route::get('/batch', function () {
    return response(Bus::findBatch(session()->get('batchId')));
});


Route::get('/', [mailController::class, 'home'])->name('home');
Route::get('/table', [mailController::class, 'table'])->name('table');
Route::get('/upload', [mailController::class, 'show'])->name('show');
Route::post('/upload', [mailController::class, 'store'])->name('store');
