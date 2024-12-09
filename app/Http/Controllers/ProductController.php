<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel products
        $products = Product::all();

        // Kirim data ke view
        return view('index', ['products' => $products]); 
    }
    public function showByCategory($categoryId)
    {
        // Ambil kategori berdasarkan ID
        $category = Category::findOrFail($categoryId);

        // Ambil semua produk yang termasuk dalam kategori tersebut
        $products = $category->products;

        // Kirim data ke view
        return view('category', compact('products', 'category'));

}
}