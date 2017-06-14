<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iname',100);
            $table->string('iquantity',10);
            $table->float('itotal',8,2);
            $table->integer('reciept_id')->unsigned();
            $table->foreign('reciept_id')->references('id')->on('tbl_reciepts');
            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('tbl_categories');


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
        Schema::dropIfExists('tbl_items');
        //
    }
}
