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
        Schema::table('pembelian_item', function (Blueprint $table) {
            $table->integer('diskon')->after('jumlah_item');
            $table->integer('harga_item')->after('diskon');
            $table->integer('total')->after('harga_item');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembelian_item', function (Blueprint $table) {
            //
        });
    }
};
