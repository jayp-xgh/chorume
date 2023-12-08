<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // CREATE TABLE `events` (
    //     `id` int UNSIGNED NOT NULL,
    //     `winner_choice_id` int UNSIGNED DEFAULT NULL,
    //     `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    //     `status` tinyint(1) NOT NULL,
    //     `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
    //   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

    //   ALTER TABLE `events`
    //      ADD CONSTRAINT `fk_events_winner_choice_id` FOREIGN KEY (`winner_choice_id`) REFERENCES `events_choices` (`id`);
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('winner_choice_id')->nullable();
            $table->string('name');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
