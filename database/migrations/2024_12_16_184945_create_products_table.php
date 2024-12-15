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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->constrained()->onDelete('cascade');
            $table->foreignId('subcategory_id')
                ->constrained()->onDelete('cascade');
            $table->foreignId('brand_id')
                ->nullable()->constrained('brands')->onDelete('set null');
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->enum('status', [0, 1, 2])->default(1);
            $table->string('image_path', 255)->nullable();
            $table->string('sku', 100)->unique()->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->string('slug', 255)->unique()->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');

            $table->string('tags')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->boolean('is_returnable')->default(true);
            $table->string('warranty_period', 100)->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('barcode', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
