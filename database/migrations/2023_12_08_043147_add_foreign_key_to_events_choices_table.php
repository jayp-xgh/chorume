<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //   ALTER TABLE `events_choices`
    //      ADD CONSTRAINT `fk_events_choices_event_id` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

    public function up(): void
    {
        Schema::table('events_choices', function (Blueprint $table) {
            $table->foreignId('event_id')->constrained('events');
        });
    }

    public function down(): void
    {
        Schema::table('events_choices', function (Blueprint $table) {
            $table->dropForeign(['event_id']);
        });
    }
};
