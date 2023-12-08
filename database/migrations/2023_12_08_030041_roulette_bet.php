<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // CREATE TABLE `roulette_bet` (
    //     `id` int UNSIGNED NOT NULL,
    //     `user_id` int UNSIGNED DEFAULT NULL,
    //     `roulette_id` int UNSIGNED DEFAULT NULL,
    //     `bet_amount` int DEFAULT NULL,
    //     `choice` int DEFAULT NULL,
    //     `created_at` datetime DEFAULT CURRENT_TIMESTAMP
    //   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    //   ALTER TABLE `roulette_bet`
    //      ADD CONSTRAINT `roulette_bet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
    //      ADD CONSTRAINT `roulette_bet_ibfk_2` FOREIGN KEY (`roulette_id`) REFERENCES `roulette` (`id`) ON DELETE CASCADE;
    public function up(): void
    {
        Schema::create('roulette_bet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('roulette_id')->nullable();
            $table->integer('bet_amount')->nullable();
            $table->integer('choice')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('roulette_id')->references('id')->on('roulette')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roulette_bet');
    }
};
