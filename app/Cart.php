<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];

    public function formatReturn()
    {
        $returnCart = [];
        foreach ($this->cart as $c) {
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
}
