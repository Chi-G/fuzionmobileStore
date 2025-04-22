<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('category')->nullable()->after('type');
            $table->string('author_name')->nullable()->after('category');
            $table->string('author_image')->nullable()->after('author_name');
            $table->float('rating')->nullable()->after('author_image');
            $table->integer('enrollment_count')->nullable()->after('rating');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['category', 'author_name', 'author_image', 'rating', 'enrollment_count']);
        });
    }
};
