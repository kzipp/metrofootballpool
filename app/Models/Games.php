<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    protected $fillable = [
        'away_team',
        'home_team',
        'game_date',
        'gameorder',
        'awayscore',
        'homescore',
        'week_number',
        'season_year',
    ];

    public function picks()
    {
        return $this->hasMany(Picks::class);
    }

    public function getGameDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('m/d/Y');
    }


    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team', 'abbreviation');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team', 'abbreviation');
    }
}
