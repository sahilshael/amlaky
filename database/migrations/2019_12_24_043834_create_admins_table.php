<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['admin', 'sub_admin']);
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('image')->nullable();
            $table->string('phone_no');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('password');
            $table->string('decoded_password');
            $table->string('reset_password')->nullable();
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
