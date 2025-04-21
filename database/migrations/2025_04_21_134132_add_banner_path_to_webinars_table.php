<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerPathToWebinarsTable extends Migration
{
    public function up()
    {
        Schema::table('webinars', function (Blueprint $table) {
            $table->string('banner_path')->nullable()->after('platform');
        });
    }

    public function down()
    {
        Schema::table('webinars', function (Blueprint $table) {
            $table->dropColumn('banner_path');
        });
    }
}
