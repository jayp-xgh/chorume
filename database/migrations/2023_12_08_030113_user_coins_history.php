<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // CREATE TABLE `users_coins_history` (
    //     `id` int NOT NULL,
    //     `user_id` int UNSIGNED NOT NULL,
    //     `entity_id` int DEFAULT NULL,
    //     `amount` decimal(10,2) NOT NULL,
    //     `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Initial | Bet | Event | Fix | Old Bot | Gift | Daily | Transfer | Troll',
    //     `description` text COLLATE utf8mb4_general_ci,
    //     `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
    //   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    //   ALTER TABLE `users_coins_history`
    //      ADD CONSTRAINT `fk_users_coins_history_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

    public function up(): void
    {
        Schema::create('users_coins_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('entity_id')->nullable();
            $table->decimal('amount', 10, 2);
            $table->string('type'); //'Initial | Bet | Event | Fix | Old Bot | Gift | Daily | Transfer | Troll',
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users_coins_history');
    }
};
