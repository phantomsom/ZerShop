<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ShoppingCart;

class ShoppingCartController extends Controller
{
    public static function AddItemToCart($item)
    {        
        if($shoppingCartItem = ShoppingCart::select('id')->where('id',$item->productid)->exists())
        {
            $shoppingCartItem->increment('quantity');
        }
        else
        {
            DB::table('shopping_cart_items')->insert(
                array(
                 'id' => $item->productid,
                 'image' => $item->image,
                 'product_name' => $item->model_name,
                 'price' => $item->price,
                 'quantity' => 1
                )
             );
        }

    }
}
