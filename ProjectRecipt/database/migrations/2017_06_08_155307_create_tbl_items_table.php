<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('quantity',10);
            $table->float('total',8,2);

            $table->timestamps();
        });

        Schema::create('tbl_items_tbl_reciepts', function (Blueprint $table) {

            $table->integer('tbl_items_id');
            $table->integer('tbl_reciepts_id');
            $table->primary('tbl_items_id','tbl_reciepts_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_items');
        Schema::dropIfExists('tbl_reciepts');
    }
}
