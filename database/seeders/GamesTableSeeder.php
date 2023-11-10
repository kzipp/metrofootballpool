use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GamesTableSeeder extends Seeder
{
    public function run()
    {
        $teams = [
            'Buffalo Bills', 'Miami Dolphins', 'New England Patriots', 'New York Jets',
            'Baltimore Ravens', 'Cincinnati Bengals', 'Cleveland Browns', 'Pittsburgh Steelers',
            // ... (Add the rest of the NFL teams)
        ];

        $weekStart = Carbon::create(2023, 9, 7); // Starting date of the first game of the season

        // Seed one game per week
        for ($week = 1; $week <= 16; $week++) {
            // Pick two random teams for the game, ensuring they are not the same
            do {
                $homeTeam = $teams[array_rand($teams)];
                $awayTeam = $teams[array_rand($teams)];
            } while ($homeTeam === $awayTeam);

            DB::table('games')->insert([
                'away_team' => $awayTeam,
                'home_team' => $homeTeam,
                'game_date' => $weekStart->copy()->addWeeks($week - 1), // Increment each week
                'week_number' => $week,
                'season_year' => $weekStart->year,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
