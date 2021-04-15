<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ShoppingCart;

class ShoppingCartController extends Controller
{   
    public static function AddItemToCart($item)
    {        
        $shoppingCartItem = ShoppingCart::select('item_unique_id')->where('item_unique_id',$item->item_unique_id);
        if($shoppingCartItem->exists())
        {
            $shoppingCartItem->increment('quantity');
        }
        else
        {
            DB::table('shopping_cart_items')->insert(
                array(
                 'item_unique_id' => $item->item_unique_id,
                 'image' => $item->image,
                 'product_name' => $item->model_name,
                 'price' => $item->price,
                 'quantity' => 1
                )
             );
        }

    }
}
