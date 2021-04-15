<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeVarcharToIntForPriceAndQuantityForShoppingCartItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shopping_cart_items', function (Blueprint $table) {
            $table->integer('price')->change();
            $table->integer('quantity')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shopping_cart_items', function (Blueprint $table) {
            $table->string('price');
            $table->string('quantity');
        });
    }
}
