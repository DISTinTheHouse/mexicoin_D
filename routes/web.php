<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', [PriceController::class, 'coins'])->name('main');
Route::get('/index-new', function () {return view('index-new'); })->name('new-index');

Route::get('/colecciones', function () {return view('collections');})->name('collections');
Route::get('/tienda', function () {return view('store');})->name('store');
Route::get('/contacto', function () {return view('contact');})->name('contact');

Route::get('/politicas', function () {return view('client-help.privacy');})->name('policies');
Route::get('/terminos', function () {  return view('terms');   })->name('terms');
Route::get('/faq', function () {  return view('client-help.faq');   })->name('faq');

Route::get('/muy-pronto', function () {return view('coming-soon');})->name('coming-soon');

Route::get('/precios', [PriceController::class, 'index'])->name('price.form');
Route::post('/precios', [PriceController::class, 'get'])->name('price.get');
//Route::get('/monedas', [PriceController::class, 'coins'])->name('coins');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/mis-datos', function () { return view('profile.show'); })->name('profile');
    Route::get('/mi-pagina', [UserController::class, 'index'])->name('dashboard');
    Route::get('/historial-compras', [UserController::class, 'purchases'])->name('purchase-history');
    Route::get('/mis-opiniones', [UserController::class, 'opinions'])->name('opinions');
    Route::get('/mis-tarjetas', [UserController::class, 'cards'])->name('cards');

    Route::get('/administracion/productos', [ProductController::class, 'index'])->name('admin-products');
    Route::post('/administracion/productos', [ProductController::class, 'store'])->name('admin-products.store');
    Route::put('/administracion/productos/{id}', [ProductController::class, 'update'])->name('admin-products.update');
    Route::delete('/administracion/productos/{id}', [ProductController::class, 'destroy']);

    Route::get('/administracion/historial-ventas', [UserController::class, 'sales'])->name('admin-sales');
    Route::get('/administracion/reportes', [UserController::class, 'reports'])->name('admin-reports');

    Route::get('/checkout', function () {
        return view('checkout');
    })->name('checkout');
});
