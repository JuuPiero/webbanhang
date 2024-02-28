<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller {
    public function index() {
        // Session::put('cart', []);

        // $categories = Category::Where('is_active', 1)->get();
        $categories = Category::with('products')
        ->get();
        $products = Product::with('images')->join('categories', 'categories.id', '=', 'products.category_id')->select('products.*', 'categories.name as category_name')
        ->where('products.is_active', 1)
        ->where('categories.is_active', 1)
        ->get();

        return view('client.home.index')->with([
            'categories' => $categories,
            'products' =>  $products
        ]);
    }

    public function category($id) {
        return view('client.home.category');
    }
}
