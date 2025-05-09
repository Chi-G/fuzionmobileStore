<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        // Drop existing products table to remove any CHECK constraints
        Schema::dropIfExists('products');

        // Recreate products table
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('type')->change();
            $table->string('category')->nullable();
            $table->string('author_name')->nullable();
            $table->string('author_image')->nullable();
            $table->float('rating')->nullable();
            $table->integer('enrollment_count')->nullable();
            $table->float('price');
            $table->integer('stock');
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        // Drop and recreate with original setup (no vr)
        Schema::dropIfExists('products');

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('type')->change();
            $table->string('category')->nullable();
            $table->string('author_name')->nullable();
            $table->string('author_image')->nullable();
            $table->float('rating')->nullable();
            $table->integer('enrollment_count')->nullable();
            $table->float('price');
            $table->integer('stock');
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }
};
