<?php

namespace App\Livewire;

use App\Models\Games;
use Livewire\Component;

class PickGames extends Component
{
    public $games;
    public $picks = [];
    public $availablePoints = [];
    public $disabledPoints = [];
    public $week;
    public $weeks = [];

    public function mount()
    {
        // get games where week = $week
        
        // get weeks
        $this->games = Games::where('week_number', $this->week)->get();
        $this->resetAvailablePoints();
        
    }

    public function selectWinner($gameId, $team)
{
    if (!isset($this->picks[$gameId])) {
        $this->picks[$gameId] = ['winner' => '', 'points' => ''];
    }
    
    $this->picks[$gameId]['winner'] = $team;
    $this->resetAvailablePoints(); // Call this if you need to update available points upon team selection
}

public function changeWeek($week){
    $this->week = $week;
}

public function updateAvailablePoints($gameId)
{
    // The check here ensures that if points aren't set, they're initialized properly.
    if (!isset($this->picks[$gameId]['points'])) {
        $this->picks[$gameId]['points'] = '';
    } else {
        // If points are set, ensure they're not in the disabledPoints array
        $pickedPoints = $this->picks[$gameId]['points'];
        if (($key = array_search($pickedPoints, $this->disabledPoints)) !== false) {
            unset($this->disabledPoints[$key]);
        }
    }
    $this->resetAvailablePoints();
}

private function resetAvailablePoints()
{
    $this->availablePoints = range(1, count($this->games));
    $this->disabledPoints = array_column($this->picks, 'points');
    $this->disabledPoints = array_filter($this->disabledPoints); // Filter out any empty values
}

public function savePicks()
{
    dd($this->picks);
}


    public function render()
    {
        $this->games = Games::where('week_number', $this->week)->get();
        $this->weeks = Games::select('week_number')->distinct()->get();
        
        return view('livewire.pick-games', [
            'games' => $this->games,
            'weeks' => $this->weeks,
        ]);
    }
}