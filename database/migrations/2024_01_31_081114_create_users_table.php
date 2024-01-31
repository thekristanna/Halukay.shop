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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id', true);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email_address', 50);
            $table->string('username', 50);
            $table->string('password', 50);
            $table->string('phone_number', 15);
            $table->string('address_street', 50);
            $table->string('address_barangay', 50);
            $table->string('address_citytown', 50);
            $table->string('address_province', 50);
            $table->string('address_zip', 50);
            $table->string('role', 20);
            $table->string('profile_photo', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
