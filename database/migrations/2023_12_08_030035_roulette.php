<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // CREATE TABLE `roulette` (
    //     `id` int UNSIGNED NOT NULL,
    //     `choice` int DEFAULT NULL,
    //     `status` int DEFAULT '0',
    //     `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    //     `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
    //     `amount` decimal(10,2) DEFAULT NULL
    //   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
      
    public function up(): void
    {
        Schema::create('roulette', function (Blueprint $table) {
            $table->id();
            $table->integer('choice')->nullable();
            $table->integer('status')->default(0);
            $table->string('description')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roulette');
    }
};
