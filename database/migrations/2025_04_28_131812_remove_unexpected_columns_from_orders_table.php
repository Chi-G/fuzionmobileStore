<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $columnsToRemove = ['country', 'city', 'phone', 'address', 'postal_code', 'customer_name', 'customer_email'];
            foreach ($columnsToRemove as $column) {
                if (Schema::hasColumn('orders', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            if (!Schema::hasColumn('orders', 'country')) {
                $table->string('country')->after('status');
            }
            if (!Schema::hasColumn('orders', 'city')) {
                $table->string('city')->nullable()->after('country');
            }
            if (!Schema::hasColumn('orders', 'phone')) {
                $table->string('phone')->nullable()->after('city');
            }
            if (!Schema::hasColumn('orders', 'address')) {
                $table->string('address')->nullable()->after('phone');
            }
            if (!Schema::hasColumn('orders', 'postal_code')) {
                $table->string('postal_code')->nullable()->after('address');
            }
            if (!Schema::hasColumn('orders', 'customer_name')) {
                $table->string('customer_name')->nullable()->after('postal_code');
            }
            if (!Schema::hasColumn('orders', 'customer_email')) {
                $table->string('customer_email')->nullable()->after('customer_name');
            }
        });
    }
};
