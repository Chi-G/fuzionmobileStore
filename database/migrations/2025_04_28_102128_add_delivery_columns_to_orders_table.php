<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            if (!Schema::hasColumn('orders', 'delivery_name')) {
                $table->string('delivery_name')->after('status');
            }
            if (!Schema::hasColumn('orders', 'delivery_email')) {
                $table->string('delivery_email')->after('delivery_name');
            }
            if (!Schema::hasColumn('orders', 'delivery_country')) {
                $table->string('delivery_country')->after('delivery_email');
            }
            if (!Schema::hasColumn('orders', 'delivery_city')) {
                $table->string('delivery_city')->after('delivery_country');
            }
            if (!Schema::hasColumn('orders', 'delivery_phone')) {
                $table->string('delivery_phone')->after('delivery_city');
            }
            if (!Schema::hasColumn('orders', 'delivery_company_name')) {
                $table->string('delivery_company_name')->nullable()->after('delivery_phone');
            }
            if (!Schema::hasColumn('orders', 'delivery_vat_number')) {
                $table->string('delivery_vat_number')->nullable()->after('delivery_company_name');
            }
            if (!Schema::hasColumn('orders', 'payment_method')) {
                $table->string('payment_method')->after('delivery_vat_number');
            }
            if (!Schema::hasColumn('orders', 'delivery_method')) {
                $table->string('delivery_method')->after('payment_method');
            }
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'delivery_name',
                'delivery_email',
                'delivery_country',
                'delivery_city',
                'delivery_phone',
                'delivery_company_name',
                'delivery_vat_number',
                'payment_method',
                'delivery_method',
            ]);
        });
    }
};
