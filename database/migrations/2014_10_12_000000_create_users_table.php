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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username')->nullable();
            $table->string('bio')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('location')->nullable();
            $table->string('education')->nullable();
            $table->string('user_type')->default('user');
            $table->bigInteger('GcashNum')->nullable();
            $table->string('skills')->nullable();
            $table->string('rating')->nullable();
            $table->string('reviews')->nullable();
            $table->string('terms')->nullable();
            $table->string('notes')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('password');
            $table->string('Cash_In_Image')->nullable();
            $table->string('Cash_out_Image')->nullable();
            $table->timestamp('login_time')->nullable();
            $table->integer('token_balance')->nullable();
            $table->integer('conversion_balance')->nullable();
            $table->tinyInteger('token_clicked')->nullable();
            $table->dateTime('last_spin_time')->nullable();
            $table->dateTime('last_post_time')->nullable();
            $table->dateTime('last_save_time')->nullable();

            $table->dateTime('last_token_click_time')->nullable();
            $table->rememberToken();
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
};
