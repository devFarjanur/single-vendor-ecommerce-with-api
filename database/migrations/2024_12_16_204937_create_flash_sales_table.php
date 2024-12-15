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
        Schema::create('flash_sales', function (Blueprint $table) {
            $table->id(); // Unique identifier for the flash sale
            $table->foreignId('product_id') // Foreign key to the products table
                ->constrained()->onDelete('cascade');
            $table->decimal('discount_price', 10, 2); // Discounted price during the flash sale
            $table->dateTime('start_date'); // Start date of the flash sale
            $table->dateTime('end_date'); // End date of the flash sale
            $table->enum('status', [0, 1, 2])->default(1); // Status: 0 = inactive, 1 = active, 2 = expired
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flash_sales');
    }
};
