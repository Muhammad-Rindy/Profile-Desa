<?php

use App\Http\Controllers\DesaController;
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

Route::get('/', [DesaController::class, 'index'])->name('index');
Route::get('/contact', [DesaController::class, 'indexContact'])->name('contact');
Route::get('/article', [DesaController::class, 'indexArticle'])->name('article');
Route::get('/sejarah-desa', [DesaController::class, 'indexSejarah'])->name('sejarah');
Route::get('/visi-misi', [DesaController::class, 'visiMisi'])->name('visi-misi');
Route::get('/aparatur-desa', [DesaController::class, 'aparatur'])->name('aparatur');
Route::get('/pembangunan', [DesaController::class, 'pembangunan'])->name('pembangunan');
Route::get('/produk', [DesaController::class, 'produk'])->name('produk');
Route::get('/agenda', [DesaController::class, 'agenda'])->name('agenda');
Route::get('/infografis', [DesaController::class, 'infografis'])->name('infografis');
Route::get('/article-1', [DesaController::class, 'indexArticle1'])->name('article-1');
Route::get('/article-2', [DesaController::class, 'indexArticle2'])->name('article-2');
Route::get('/article-3', [DesaController::class, 'indexArticle3'])->name('article-3');
Route::get('/article-4', [DesaController::class, 'indexArticle4'])->name('article-4');
Route::get('/article-5', [DesaController::class, 'indexArticle5'])->name('article-5');
Route::get('/article-6', [DesaController::class, 'indexArticle6'])->name('article-6');