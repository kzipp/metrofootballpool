<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Games;
use League\Csv\Reader;
use Livewire\Component;
use Livewire\WithFileUploads;

class CsvUpload extends Component
{
    use WithFileUploads;

    public $weekNumber;
    public $csvFile;
    public $games = [];

    public function render()
    {
        return view('livewire.csv-upload');
    }

    public function save()
    {

        $csv = Reader::createFromPath($this->csvFile->getRealPath(), 'r');
        // $csv->setHeaderOffset(0);        
        // dd($csv->getHeader()); 

        foreach ($csv as $row) {
            // save each row to the database
            $game = new Games();
            $game->away_team = $row[0];
            $game->home_team = $row[1];
            // gameorder 
            $game->gameorder = $row[2];
            // thats it for now
            $game->week_number = $this->weekNumber;
            $game->season_year = Carbon::now()->year;
            $game->save();
        }
        
        session()->flash('message', 'Games have been successfully uploaded.');
    }
}