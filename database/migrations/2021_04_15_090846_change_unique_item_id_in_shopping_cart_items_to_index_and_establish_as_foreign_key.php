<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUniqueItemIdInShoppingCartItemsToIndexAndEstablishAsForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shopping_cart_items', function (Blueprint $table) {
            /*
            $table->index('item_unique_id')->change();
            $table->foreign('item_unique_id')->references('item_unique_id')->on('Items');
            */
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
            /*
            $table->dropForeign('item_unique_id');
            $table->string('item_unique_id')->change();
            */
        });
    }
}
