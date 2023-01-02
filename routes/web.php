<?php

use App\Http\Controllers\BlogTrashController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', [BlogTrashController::class, 'index'])->name('blogs.index');
Route::post('/blogs', [BlogTrashController::class, 'store'])->name('blogs.store');
Route::get('/blogs/create', [BlogTrashController::class, 'create'])->name('blogs.create');
Route::put('/blogs/{id}', [BlogTrashController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{id}', [BlogTrashController::class, 'destroy'])->name('blogs.destroy');
Route::get('/blogs/{id}/edit', [BlogTrashController::class, 'edit'])->name('blogs.edit');

Route::get('/blogs-trashData', [BlogTrashController::class, 'trashData'])->name('blogs.trashData');
Route::get('/blogs-restore/{id}', [BlogTrashController::class, 'restore'])->name('blogs.restore');
Route::get('/blogs-permanent-delete/{id}', [BlogTrashController::class, 'permanentDelete'])->name('blogs.delete');