<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\MembroController;
use App\Http\Controllers\IgrejaController;

Route::resource('igrejas', IgrejaController::class);
Route::resource('pessoas', PessoaController::class);
Route::resource('membros', MembroController::class);

Route::get('/', function () {
    return view('/layouts/inicial');
})->name('home');

//Route::get('/clear', function() {
//    Artisan::call('config:cache');
//    Artisan::call('route:cache');
//    Artisan::call('view:cache');
//    return 'Cache Cleared';
//});;
