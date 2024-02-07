<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('product_id', true);
            $table->string('name', 100);
            $table->integer('price');
            $table->string('category', 50);
            $table->string('nego_status', 50);
            $table->integer('seller_id');
            $table->string('availability', 50);
            $table->string('product_photo', 50);
            $table->string('product_condition', 50);
            $table->string('brand', 50);
            $table->string('meterial', 50);
            $table->string('color', 50);
            $table->string('size_fit', 50);
            $table->string('notes', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
