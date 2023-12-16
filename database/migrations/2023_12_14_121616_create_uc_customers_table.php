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
        Schema::create('uc_customers', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->tinyInteger('primary_category');
            $table->tinyInteger('secondary_category');
            $table->string('name');
            $table->string('model');
            $table->string('slug');
            $table->text('description');
            $table->string('excerpt');
            $table->string('free_shipping')->default('0');
            $table->tinyInteger('shippable')->default(1);
            $table->tinyInteger('taxable')->default(1);
            $table->tinyInteger('fixed_quantity')->default(0);
            $table->string('weight')->default('0');
            $table->tinyInteger('track_stock')->default(0);
            $table->integer('quantity');
            $table->text('related_products');
            $table->text('images');
            $table->text('seo_title');
            $table->text('meta');
            $table->tinyInteger('is_giftcard')->default(0);
            $table->tinyInteger('enabled_1')->default(0);
            $table->decimal('price_1', 10, 2)->default(0.00);
            $table->decimal('saleprice_1', 10, 2)->default(0.00);
            $table->decimal('jazanprice_1', 10, 2)->default(0.00);
            $table->string('sequence');
            $table->string('brand');
            $table->date('enable_date');
            $table->date('disable_date');
            $table->string('arabic_name');
            $table->text('arabic_description');
            $table->text('arabic_images');
            $table->integer('admin_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uc_customers');
    }
};