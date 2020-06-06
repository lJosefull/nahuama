<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //relations Category
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            //relations Sub Category
            $table->unsignedBigInteger('sub_category_id');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
        
            $table->string('name');
            $table->unsignedBigInteger('price');
            $table->integer('discount')->nullable();
            $table->string('description');
            $table->json('details')->nullable();
            $table->integer('stock')->default();
            $table->enum('new',['si', 'no'])->default('si');
            $table->integer('count_shop')->nullable();
            $table->string('img')->nullable();
            $table->integer('like')->nullable();
            
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
        Schema::dropIfExists('products');
    }
}
