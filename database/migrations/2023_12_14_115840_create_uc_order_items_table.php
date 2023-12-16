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
        Schema::create('uc_order_items', function (Blueprint $table) {
 
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->tinyInteger('is_giftcard')->default(0);
            $table->string('hash', 32);
            $table->integer('quantity');
            $table->string('sku', 30);
            $table->string('name', 128);
            $table->string('slug', 128);
            $table->text('description');
            $table->text('excerpt');
            $table->decimal('price', 10, 2);
            $table->decimal('saleprice', 10, 2);
            $table->decimal('jazanprice', 10, 2);
            $table->decimal('total_price', 10, 2);
            $table->tinyInteger('free_shipping');
            $table->tinyInteger('shippable');
            $table->tinyInteger('taxable');
            $table->tinyInteger('fixed_quantity');
            $table->string('weight', 10);
            $table->decimal('total_weight', 10, 2);
            $table->tinyInteger('track_stock');
            $table->text('images');
            $table->string('type', 32);
            $table->string('coupon_code', 50);
            $table->decimal('coupon_discount', 10, 2);
            $table->integer('coupon_discount_quantity');
            $table->string('coupon_discount_type', 24);
            $table->tinyInteger('enabled_1')->default(0);
            $table->decimal('price_1', 10, 2)->default(0.00);
            $table->decimal('saleprice_1', 10, 2)->default(0.00);
            $table->decimal('jazanprice_1', 10, 2)->default(0.00);
            $table->string('brand', 255);
            $table->date('enable_date');
            $table->date('disable_date');
            $table->string('sequence', 255);
            $table->integer('secondary_category');
            $table->string('arabic_name', 255);
            $table->text('arabic_description');
            $table->text('arabic_images');
            $table->string('model', 125);
            $table->integer('admin_id');
            $table->integer('bags');
            $table->integer('offer_bags');
            $table->timestamps(); // Adds created_at and updated_at columns
            $table->foreign('product_id')->references('id')->on('products'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uc_order_items');
    }
};