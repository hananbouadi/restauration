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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('deliveryman_id')->nullable();
            $table->foreign('deliveryman_id')->references('id')->on('deliverymens')->onDelete('cascade');
            $table->unsignedBigInteger('confirmed_by')->nullable();
            $table->foreign('confirmed_by')->references('id')->on('orderconfirmers')->onDelete('cascade');
            $table->unsignedBigInteger('chef_id')->nullable();
            $table->foreign('chef_id')->references('id')->on('restaurantstaffs')->onDelete('cascade');
            $table->string('status');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
