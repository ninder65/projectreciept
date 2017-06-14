<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblRecieptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_reciepts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('id')->on('tbl_vendors');
//            $table->integer('item_id')->unsigned();
//            $table->foreign('item_id')->references('id')->on('tbl_items');
//            $table->integer('categories_id')->unsigned();
//            $table->foreign('categories_id')->references('id')->on('tbl_categories');
            $table->float('items_total_cost');
            $table->dateTime('date');
            $table->string('pic');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_reciepts');
    }
}
