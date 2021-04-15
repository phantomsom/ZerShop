<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameShoppingCartToShoppingCartItems extends Migration
{
    public function up()
    { 
         Schema::rename('shopping_cart', 'shopping_cart_items');
    } 
    
    public function down() 
    { 
         Schema::dropIfExists('shopping_cart');
    }
}
