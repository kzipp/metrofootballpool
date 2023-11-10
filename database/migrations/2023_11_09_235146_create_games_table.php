<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('away_team');
            $table->string('home_team');
            $table->timestamp('game_date')->nullable();
            // gameorder is the order in which the games are played in a given week
            $table->unsignedInteger('gameorder');
            //awayscore and home score
            $table->unsignedInteger('awayscore')->nullable();
            $table->unsignedInteger('homescore')->nullable();
            $table->unsignedInteger('week_number');
            $table->year('season_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
