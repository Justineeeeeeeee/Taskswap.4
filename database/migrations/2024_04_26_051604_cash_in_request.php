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
        Schema::create('Cash_Ins', function (Blueprint $table) {
            $table->id("Cash_In_Id");
            $table->bigInteger('from_id');
            $table->bigInteger('to_id');
            $table->string('username')->nullable();
            $table->string('avatar');
            $table->string('Reference_Number');
            $table->string('Image_receipt');
            $table->string('Amount');
            $table->string('GcashNumber');
            $table->string('token_balance');
            $table->string('status')->default('0');
            $table->string('Content',5000)->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('request', function (Blueprint $table) {
            //
        });
    }
};
