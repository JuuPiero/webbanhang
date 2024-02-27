<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller {
    public function index() {
        $cart = Session::get('cart', []);
        $items = [];
        foreach ($cart as $productId => $quantity) {
            $product = Product::with('images')->find($productId);
            $items[$quantity] = $product;
        }
        // dd($items);
        return view('client.cart.cart')->with([
            'cart' => $cart,
            'items' => $items
        ]); 
    }

    public function add($productId, $quantity = 1) {
        if (!Session::has('cart')) {
            Session::put('cart', []);
        }
        $cart = Session::get('cart');
        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        if (array_key_exists($productId, $cart)) {
            // Nếu đã tồn tại, cập nhật số lượng
            $cart[$productId] += $quantity;
        } else {
            // Nếu chưa tồn tại, thêm mới sản phẩm vào giỏ hàng
            $cart[$productId] = $quantity;
        }
        // Lưu thông tin giỏ hàng mới vào session
        Session::put('cart', $cart);
        return redirect()->back()->with([
            'message' => 'thêm thành công'
        ]);
    }


}
