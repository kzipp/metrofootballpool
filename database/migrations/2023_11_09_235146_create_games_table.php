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
            // game_date is a date string in the format of 'YYYY-MM-DD'
            $table->date('game_date')->nullable();
            $table->string('game_time')->nullable();
            // wagergame is a boolean that indicates whether or not the game is a wager game
            $table->boolean('wagergame')->default(false);
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
