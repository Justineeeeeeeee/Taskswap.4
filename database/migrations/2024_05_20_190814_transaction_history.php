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
        Schema::create('transaction_Histories', function (Blueprint $table) {
            $table->id('id');
            $table->string('Posted_by');
            $table->integer('post_id');
            $table->string('avatar');
            $table->integer('Amount');
            $table->string('post_title');
            $table->string('post_category');
            $table->string('post_content');
            $table->string('payment_status');
            $table->string('tasker_id');
            $table->string('tasker_avatar');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_Histories');
    }
};
