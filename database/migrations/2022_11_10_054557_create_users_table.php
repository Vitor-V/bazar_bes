<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->text('access_tokens')->nullable();

            $table->datetime('last_sign_in_at')->nullable();
            $table->string('last_sign_in_ip')->nullable();

            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();

//            $table->string('address');
//            $table->string('address_number');
//            $table->string('address_district');
//            $table->string('city');
//            $table->string('state');
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
