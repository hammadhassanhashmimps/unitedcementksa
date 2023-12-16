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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('paymentkey', 100)->nullable();
            $table->string('transactionkey', 100)->nullable();
            $table->string('brand', 10)->nullable();
            $table->string('customeremail', 100)->nullable();
            $table->string('customerphone', 80);
            $table->integer('amount')->nullable();
            $table->string('time', 20)->nullable();
            $table->string('status', 5)->nullable();
            $table->longText('comments')->nullable();
            $table->string('agent', 255)->nullable();
            $table->string('paymenttype', 20)->nullable();
            $table->integer('merchant')->nullable();
            $table->integer('invoice')->default(0);
            $table->string('currency', 20)->nullable();
            $table->integer('is_paid')->default(0);
            $table->text('payment_time')->nullable();
            $table->string('link', 255)->nullable();
            $table->timestamp('payment_datetime')->default(now());
            $table->date('date')->nullable();
            $table->string('name', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};