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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()->onDelete('cascade');
            $table->string('house_or_building', 255);
            $table->string('street_address', 255);
            $table->string('area', 100);
            $table->string('thana', 100)->nullable();
            $table->string('city', 100);
            $table->string('district', 100);
            $table->string('postal_code', 20)->nullable();
            $table->string('country', 100)->default('Bangladesh');
            $table->enum('address_type', ['billing', 'shipping'])->default('billing');
            $table->boolean('is_primary')->default(false);
            $table->string('additional_info', 255)->nullable();
            $table->string('phone_number', 50)->nullable();
            $table->string('delivery_zone', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
