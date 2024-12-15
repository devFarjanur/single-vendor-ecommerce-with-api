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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->enum('role', ['admin', 'customer'])->default('customer');
            $table->string('phone', 50)->nullable();
            $table->string('profile_image', 255)->nullable();
            $table->enum('status', [0, 1, 3])->default(1); // Status: 0 = inactive, 1 = active, 3 = suspended
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip', 45)->nullable();
            $table->string('referral_code', 50)->nullable()->unique();
            $table->json('preferences')->nullable();
            $table->integer('reward_points')->default(0);
            $table->text('suspension_reason')->nullable(); // Reason for suspension (if status is 3)
            $table->string('country', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('alternate_email', 255)->nullable();
            $table->string('alternate_phone', 50)->nullable();
            $table->string('tax_id', 100)->nullable();
            $table->boolean('newsletter_subscription')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });


        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
