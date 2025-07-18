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
Schema::create('transactions', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade');
    $table->foreignId('tiket_id')->constrained('tikets')->onDelete('cascade');
    $table->string('name_customer');
    $table->string('no_phone');
    $table->string('date_transaction');
    $table->integer('amount');
    $table->string('data_payment');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
