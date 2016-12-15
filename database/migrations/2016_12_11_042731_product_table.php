<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product_master', function (Blueprint $table) {
          $table->increments('product_id');
          $table->string('category');
          $table->string('product_name')->unique();
          $table->string('description');
          $table->string('price');
          $table->string('img');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_master');
    }
}
