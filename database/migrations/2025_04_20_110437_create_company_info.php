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
        Schema::create('company_info', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('faculties')->nullable();
            $table->integer('students')->nullable();
            $table->integer('books')->nullable();
            $table->integer('seminars')->nullable();
            $table->text('scholarships')->nullable();
            $table->text('alumni')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_info');
    }
};
