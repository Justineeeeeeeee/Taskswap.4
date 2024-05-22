<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('users_id');
            $table->string('post_title');
            $table->string('post_category');
            $table->string('post_content');
            $table->string('task_progress');
            $table->string('Posted_by');
            $table->integer('Amount');
            $table->string('avatar')->default('avatar.png');
            $table->string('tasker_id');
            $table->string('file');
            $table->string('comments');
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    /**
         * Reverse the migrations.
         */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
