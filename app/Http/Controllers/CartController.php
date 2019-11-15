<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartFormatter;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->product_id;
        $selectedProduct = Product::getProduct($productId);
        if(!$selectedProduct)
            return $this->respondNotFound('Product not found');

        $cart = Cart::where('product_id', $productId)->first();

        if($cart) {
            $cart->increment('qty');
        } else {
            Cart::create([
                'order_id' => 1,
                'product_id' => $productId,
                'qty' => 1
            ]);
        }

        return $this->show();
    }

    public function delete(Request $request)
    {
        $productId = $request->product_id;
        $selectedProduct = Product::getProduct($productId);
        if(!$selectedProduct)
            return $this->respondNotFound('Product not found');

        Cart::where('product_id', $productId)->delete();

        return $this->show();
    }

    public function update(Request $request)
    {
        $productId = $request->product_id;
        $selectedProduct = Product::getProduct($productId);
        if(!$selectedProduct)
            return $this->respondNotFound('Product not found');

        $cart = Cart::where('product_id', $productId)->first();

        if($cart) {
            $cart->update(['qty' => $request->qty]);
        } else {
            Cart::create([
                'order_id' => 1,
                'product_id' => $productId,
                'qty' => $request->qty,
            ]);
        }

        return $this->show();
    }

    public function show()
    {
        $cart = Cart::get();

        return $this->respond(CartFormatter::format($cart));
    }
}
