<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // CREATE TABLE `events_bets` (
    //     `id` int UNSIGNED NOT NULL,
    //     `user_id` int UNSIGNED NOT NULL,
    //     `event_id` int UNSIGNED NOT NULL,
    //     `choice_id` int UNSIGNED NOT NULL,
    //     `amount` decimal(10,2) NOT NULL,
    //     `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
    //   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    // ALTER TABLE `events_bets`
    // ADD CONSTRAINT `fk_events_bets_choice_id` FOREIGN KEY (`choice_id`) REFERENCES `events_choices` (`id`),
    // ADD CONSTRAINT `fk_events_bets_event_id` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
    // ADD CONSTRAINT `fk_events_bets_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
    
    public function up(): void
    {
        Schema::create('events_bets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('choice_id');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('choice_id')->references('id')->on('events_choices')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events_bets');
    }
};