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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_id');
            $table->string('collect_op', 50);
            $table->string('payment', 50);
            $table->integer('seller_id');
            $table->integer('shopper_id');
            $table->string('status_seller', 100);
            $table->string('status_shopper', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
