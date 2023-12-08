<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // CREATE TABLE `events_choices` (
    //     `id` int UNSIGNED NOT NULL,
    //     `event_id` int UNSIGNED NOT NULL,
    //     `choice_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    //     `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
    //   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
 
    public function up(): void
    {
        Schema::create('events_choices', function (Blueprint $table) {
            $table->id();
            $table->string('choice_key');
            $table->string('description');
            // $table->foreignId('event_id')->constrained('events');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events_choices');
    }
};
