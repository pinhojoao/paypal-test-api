<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartFormatter extends Model
{
    public static function format($cart)
    {
        $returnCart = [];
        foreach ($cart as $c) {
            $selectedProduct = Product::getProduct($c->product_id);
            $returnCart[] = [
                'id' => $c->product_id,
                'name' => $selectedProduct['name'],
                'price' => $selectedProduct['price'],
                'qty' => $c->qty
            ];
        }

        return $returnCart;
    }

    public static function getTotal($cart)
    {
        $total = 0;
        foreach ($cart as $c) {
            $selectedProduct = Product::getProduct($c->product_id);
            $total += $selectedProduct['price'] * $c->qty;
        }

        return $total;
    }
}
