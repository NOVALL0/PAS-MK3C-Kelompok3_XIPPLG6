<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', [ProductController::class, 'index']);

Route::get('/category/{id}', [ProductController::class, 'showByCategory'])->name('category.show');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/landingpage', function () {
    $products = Product::all(); 
    return view('landingpage', ['products' => $products]);  
})->name('landingpage');

Route::get('/sayur', function () {
    $products = Product::where('category_id', 6)->get(); 
    return view('sayur', ['products' => $products]);
})->name('sayur');

Route::get('/buah', function () {
    $products = Product::where('category_id', 5)->get(); 
    return view('buah', ['products' => $products]);
})->name('buah');

Route::get('/bahanpokok', function () {
    $products = Product::where('category_id', 7)->get(); 
    return view('bahanpokok', ['products' => $products]);
})->name('bahanpokok');

Route::get('/protein', function () {
    $products = Product::where('category_id', 8)->get(); 
    return view('protein', ['products' => $products]);
})->name('protein');