<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdectController;

Route::get('/', function () {
    return redirect()->route('prodect.index');
});

Route::get('/home', function () {
    return redirect()->route('prodect.index');
    

});


Auth::routes();
Route::resource('prodect', ProdectController::class);

// Route::get('/', [HomeController::class, 'index'])->name('home');
