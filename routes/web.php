<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\PdfController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('about', function () {
    return view('frontend.about');
});

// Route::get('ourservices', function () {
//     return view('frontend.services');
// });

Route::get('ourservices', [FrontendController::class, 'services'])->name('service.index');

Route::get('blog', function () {
    return view('frontend.blog');
});

// Route::get('packege', function () {
//     return view('frontend.packege');
// });

Route::get('packege', [FrontendController::class, 'packeges'])->name('packege.index');

Route::get('contact', function () {
    return view('frontend.contact');
});


// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/createservice', function () {
    return view('backend.services.create');
})->middleware(['auth', 'verified'])->name('create');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Cart
Route::get('cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [FrontendController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [FrontendController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [FrontendController::class, 'remove'])->name('remove.from.cart');

// Checkout
Route::get('checkout', [FrontendController::class, 'checkout'])->name('checkout.page');    
Route::post('order', [FrontendController::class, 'order'])->name('checkout.order');
Route::get('reports', [DashboardController::class, 'reports'])->name('reports');

// Invoice
Route::get('invoice',[PdfController::class,'generate_pdf']);
Route::get('invoice/{order_number}',[PdfController::class,'generate_pdf'])->name('invoiceperid');
Route::get('download-pdf',[PdfController::class,'download_pdf']);


require __DIR__.'/auth.php';
