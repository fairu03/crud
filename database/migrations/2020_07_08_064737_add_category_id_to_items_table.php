<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable(); //menambhkan kolom baru
            $table->foreign('category_id')->references('id')->on('categories'); //menambah foreng key 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {

            $table->dropForeign(['category_id']); //drop dulu foregen key
            $table->dropColumn(['category_id']); // drop kolomnya
        });
    }
}
