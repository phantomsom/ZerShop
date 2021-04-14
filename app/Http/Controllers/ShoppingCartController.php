<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public static function AddItemToCart($item)
    {
       $newCartItem = new App\Models\ShoppingCart

        $item->productid,
        $item->product_name,
        $item->qty,
        $item->product_price,
        $item->image
        );

    }
    //
}
