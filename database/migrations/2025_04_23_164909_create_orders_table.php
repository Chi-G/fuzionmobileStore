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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->json('products');
            $table->decimal('total', 8, 2);
            $table->string('name');
            $table->string('email');
            $table->string('country', 2);
            $table->string('city');
            $table->string('phone');
            $table->string('company_name')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('payment_method');
            $table->string('delivery_method');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
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
