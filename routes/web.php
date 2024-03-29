<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminConrroller;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogsController;
use App\Models\Blog;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', [BlogsController::class,'index']);
Route::get('/detail/{id}', [BlogsController::class,'detail']);

Route::fallback(function () {
    return '<h4>ERROR 404</h4>';
});

Route::prefix('author')->group(function(){
    Route::get('/blogs', [AdminConrroller::class, 'index'])->name('blogs');;
    Route::get('/form', [AdminConrroller::class, 'form'])->name('form');;
    Route::post('/insert', [AdminConrroller::class, 'insert']);
    Route::get('/delete/{id}', [AdminConrroller::class, 'delete'])->name('delete');
    Route::get('/change/{id}', [AdminConrroller::class, 'change'])->name('change');
    Route::get('/edit/{id}', [AdminConrroller::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [AdminConrroller::class, 'update'])->name('update');
});


Auth::routes();

Route::get('/Home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');
