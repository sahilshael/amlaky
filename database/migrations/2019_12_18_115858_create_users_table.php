<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('contact');
            $table->string('decoded_password');
            $table->string('password');
            $table->string('profile_image')->nullable();
            $table->enum('user_type', ['landlord', 'service_provider', 'teanant']);
            $table->string('company')->nullable();
            $table->string('properties_managed');
            $table->string('otp');
            $table->string('reset_password')->nullable();
            $table->enum('otp_verified', ['yes', 'no'])->default('no');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('deleted_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
