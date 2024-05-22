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
        Schema::create('Cash_outs', function (Blueprint $table) {
            $table->id("Cash_Out_id");
            $table->bigInteger('from_id');
            $table->bigInteger('to_id');
            $table->string('username');
            $table->string('avatar');
            $table->string('Gcash_name');
            $table->string('Image_QR');
            $table->string('Amount');
            $table->string('GcashNumber');
            $table->string('token_Balance');
            $table->string('status')->default('0');
            $table->string('Content',5000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
