<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_products', function (Blueprint $table) {
            $table->id();
            
             //relations Category
            $table->unsignedBigInteger('type_sizes_id');
            $table->foreign('type_sizes_id')->references('id')->on('type_sizes');

            //relations Product
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type__products');
    }
}
