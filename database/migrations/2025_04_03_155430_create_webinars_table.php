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
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->time('time');
            $table->text('description');
            $table->string('platform');
            $table->string('meeting_id')->nullable();
            $table->string('meeting_password')->nullable();
            $table->string('meeting_url')->nullable();
            $table->string('registration_link')->nullable();
            $table->string('recording_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinars');
    }
};
