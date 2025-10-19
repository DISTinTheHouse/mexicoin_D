<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


// General routes
Route::get('/', [PriceController::class, 'index'])->name('main');
Route::get('/tienda', [ProductController::class, 'store'])->name('store');
Route::get('/contacto', function () {return view('contact');})->name('contact');
Route::get('/politicas', function () {return view('client-help.privacy');})->name('policies');
Route::get('/terminos', function () {  return view('terms');   })->name('terms');
Route::get('/faq', function () {  return view('client-help.faq');   })->name('faq');
Route::get('/producto/{id}', [ProductController::class, 'show'])->name('product.detail');

// Colecciones
Route::get('/colecciones', [ProductController::class, 'displayCollections'])->name('collections');
Route::get('/colecciones/oro', [ProductController::class, 'displayGold'])->name('collections-gold');
Route::get('/colecciones/plata', [ProductController::class, 'displaySilver'])->name('collections-silver');
Route::get('/colecciones/billetes', [ProductController::class, 'displayBucks'])->name('collections-bucks');
Route::get('/colecciones/numismatica', [ProductController::class, 'displayNumis'])->name('collections-numis');

// Para secciones en construcción
Route::get('/muy-pronto', function () {return view('users.com-soon');})->name('usr-comsoon');

// Proceso de carrito
Route::post('/cart/add', [OrderController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [OrderController::class, 'view'])->name('cart.view');
Route::delete('/cart/{id}', [OrderController::class, 'deleteFromCart'])->name('cart.remove');

// Cierre de compra y pedidos
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/mi-pedido/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::post('/mi-pedido/{order}/proof', [OrderController::class, 'uploadProof'])->name('orders.uploadProof');

Route::get('/tst-checkout-pass', function () {return view('store.chkout-pass');})->name('checkout-pass');
Route::get('/tst-checkout-fail', function () {return view('store.chkout-fail');})->name('checkout-fail');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/mis-datos', function () { return view('profile.show'); })->name('profile');
    Route::get('/mi-pagina', [UserController::class, 'index'])->name('dashboard');
    Route::get('/historial-compras', [UserController::class, 'purchases'])->name('purchase-history');
    Route::get('/mis-opiniones', [UserController::class, 'opinions'])->name('opinions');
    Route::get('/mis-tarjetas', [UserController::class, 'cards'])->name('cards');

    Route::get('/administracion/productos', [ProductController::class, 'index'])->name('admin-products');
    Route::post('/administracion/productos', [ProductController::class, 'save'])->name('admin-products.store');
    Route::put('/administracion/productos/{id}', [ProductController::class, 'update'])->name('admin-products.update');
    Route::delete('/administracion/productos/{id}', [ProductController::class, 'destroy']);

    Route::get('/administracion/historial-ventas', [UserController::class, 'sales'])->name('admin-sales');
    Route::get('/administracion/reportes', [UserController::class, 'reports'])->name('admin-reports');

    Route::get('/mis-pedidos', function () { 
        $user = auth()->user();
        return view('users.com-soon', compact('user')); 
    })->name('my-orders');


    Route::get('/checkout', function () {
        return view('checkout');
    })->name('checkout');
});
