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
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['tiket_id']);
            $table->unsignedBigInteger('tiket_id')->nullable()->change();
            $table->foreign('tiket_id')->references('id')->on('tikets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['tiket_id']);
            $table->unsignedBigInteger('tiket_id')->nullable(false)->change();
            $table->foreign('tiket_id')->references('id')->on('tikets')->onDelete('cascade');
        });
    }
};
