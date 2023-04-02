<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\solictyController;

use App\Http\Controllers\pointController;

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
    return view('welcome');
});

Route::get('/dashboard',[pointController::class,'index'], function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/forum', function () {
    return view('forum');
})->middleware(['auth', 'verified'])->name('forum');


Route::get('/conteudoaula', function () {
    return view('conteudoaula');
})->middleware(['auth', 'verified'])->name('conteudoaula');

// Route::get('/point',[pointController::class, 'index']);





Route::prefix('solicties')->group(function(){
  Route::get('/solicty',[solictyController::class, 'index'])->name('solicty-index');
  Route::get('/create',[solictyController::class, 'create'])->name('solicty-create');
  Route::post('/',[solictyController::class, 'store'])->name('solicty-store');
  Route::delete('/{id}',[solictyController::class, 'destroy'])->where('id','[0-9]+')->name('solicty-destroy');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
