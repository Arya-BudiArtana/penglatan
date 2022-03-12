<?php

use \Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\MitraController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('pages.index');
// });
Route::get('/kontak', [ContactController::class, 'contact'])->name('kontak');
Route::post('/send', [ContactController::class, 'sendEmail'])->name('contact.send');
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/tentang', [MainController::class, 'about'])->name('tentang');
Route::get('/produk', [MainController::class, 'product'])->name('produk');

//mitra controller
//dwi
Route::get('mitra/dwi', [MitraController::class, 'dwi'])->name('dwisurya');
Route::get('mitra/dwi/produk', [MitraController::class, 'produkdwi'])->name('produkdwi');

//mariasmi
Route::get('mitra/mariasmi', [MitraController::class, 'mariasmi'])->name('mariasmi');
Route::get('mitra/mariasmi/produk', [MitraController::class, 'produkmariasmi'])->name('produkmariasmi');

//rati
Route::get('mitra/rati', [MitraController::class, 'rati'])->name('rati');
Route::get('mitra/rati/produk', [MitraController::class, 'produkrati'])->name('produkrati');

//wardi
Route::get('mitra/wardi', [MitraController::class, 'wardi'])->name('wardi');
Route::get('mitra/wardi/produk', [MitraController::class, 'produkwardi'])->name('produkwardi');

Route::get('sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'text/xml');
});
