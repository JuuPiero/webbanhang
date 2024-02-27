<?php 

// app/Services/Cart.php

namespace App\Services;

use Illuminate\Support\Facades\Session;

class Cart {
    protected $cartKey;
    private $userId;
    public function __construct($userId) {
        $this->$userId = $userId;
        $this->cartKey = 'cart.items.' . $userId;
    }

    public function addProduct($productId, $quantity = 1) {
        $cartItems = $this->getCartItems();

        if (isset($cartItems[$productId])) {
            $cartItems[$productId] += $quantity;
        } else {
            $cartItems[$productId] = $quantity;
        }

        $this->saveCartItems($cartItems);
    }

    public function removeProduct($productId) {
        $cartItems = $this->getCartItems();

        if (isset($cartItems[$productId])) {
            unset($cartItems[$productId]);
            $this->saveCartItems($cartItems);
        }
    }

    public function getCartItems() {
        return Session::get($this->cartKey, []);
    }

    protected function saveCartItems($cartItems)
    {
        Session::put($this->cartKey, $cartItems);
    }

    public function clearCart() {
        Session::forget($this->cartKey);
    }

    public function getTotalItemsInCart() {
        // Lấy thông tin giỏ hàng từ session
        $cart = Session::get('cart', []);
    
        // Tính toán tổng số lượng sản phẩm
        $totalItems = array_sum($cart);
    
        return $totalItems;
    }

    public function getCartContents() {
        // Bạn có thể thực hiện truy vấn CSDL để lấy thông tin chi tiết về sản phẩm từ $cartItems
        // Ở đây chỉ là ví dụ đơn giản

        return $this->getCartItems();
    }
}