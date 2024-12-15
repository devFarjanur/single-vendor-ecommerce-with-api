<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                ->constrained()->onDelete('cascade');
            $table->foreignId('color_id')
                ->constrained()->onDelete('set null');
            $table->foreignId('size_id')
                ->constrained()->onDelete('set null');
            $table->foreignId('weight_id') // Foreign key to weights table
                ->constrained()->onDelete('set null');
            $table->string('sku', 100)->unique(); // SKU for the variation
            $table->integer('stock_quantity')->default(0); // Stock quantity for the variation
            $table->decimal('price', 10, 2); // Price of the variation (can differ from the base product price)
            $table->decimal('discount_price', 10, 2)->nullable(); // Discounted price for the variation
            $table->date('discount_start_date')->nullable(); // Discount start date
            $table->date('discount_end_date')->nullable(); // Discount end date
            $table->enum('status', [0, 1, 2])->default(1); // Status: 0 = inactive, 1 = active, 2 = suspended
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};
