<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->foreign('winner_choice_id')->references('id')->on('events_choices')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->foreign('winner_choice_id')->references('id')->on('events_choices')->onDelete('cascade');
        });
    }
};
