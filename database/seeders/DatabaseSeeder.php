<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // add user to users table
        DB::table('users')->insert([
            'name' => 'Kyle Zipp',
            'email' => 'kylezipp@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123456789'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'BUF',
            'city' => 'Buffalo',
            'name' => 'Bills',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/BUF.svg',
            'colors' => json_encode(['#00338D', '#C60C30']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //SF 49ers
        DB::table('teams')->insert([
            'abbreviation' => 'SF',
            'city' => 'San Francisco',
            'name' => '49ers',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/SF.svg',
            'colors' => json_encode(['#AA0000', '#B3995D', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //SEA Seahawks
        DB::table('teams')->insert([
            'abbreviation' => 'SEA',
            'city' => 'Seattle',
            'name' => 'Seahawks',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/SEA.svg',
            'colors' => json_encode(['#002244', '#69BE28', '#A5ACAF', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        

        DB::table('teams')->insert([
            'abbreviation' => 'MIA',
            'city' => 'Miami',
            'name' => 'Dolphins',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/MIA.svg',
            'colors' => json_encode(['#008E97', '#F58220', '#005778', '#FB4F14']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'NE',
            'city' => 'New England',
            'name' => 'Patriots',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/NE.svg',
            'colors' => json_encode(['#002244', '#C60C30', '#B0B7BC', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'NYJ',
            'city' => 'New York',
            'name' => 'Jets',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/NYJ.svg',
            'colors' => json_encode(['#125740', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'BAL',
            'city' => 'Baltimore',
            'name' => 'Ravens',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/BAL.svg',
            'colors' => json_encode(['#241773', '#9E7C0C', '#000000']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'CIN',
            'city' => 'Cincinnati',
            'name' => 'Bengals',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/CIN.svg',
            'colors' => json_encode(['#FB4F14', '#000000', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'CLE',
            'city' => 'Cleveland',
            'name' => 'Browns',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/CLE.svg',
            'colors' => json_encode(['#311D00', '#FF3C00', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'PIT',
            'city' => 'Pittsburgh',
            'name' => 'Steelers',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/PIT.svg',
            'colors' => json_encode(['#FFB612', '#101820', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'HOU',
            'city' => 'Houston',
            'name' => 'Texans',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/HOU.svg',
            'colors' => json_encode(['#03202F', '#A71930', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'IND',
            'city' => 'Indianapolis',
            'name' => 'Colts',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/IND.svg',
            'colors' => json_encode(['#002C5F', '#A2AAAD', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         DB::table('teams')->insert([
            'abbreviation' => 'JAX',
            'city' => 'Jacksonville',
            'name' => 'Jaguars',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/JAX.svg',
            'colors' => json_encode(['#006778', '#9F792C', '#D7A22A', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        // arizona cardinal
        DB::table('teams')->insert([
            'abbreviation' => 'ARI',
            'city' => 'Arizona',
            'name' => 'Cardinals',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/ARI.svg',
            'colors' => json_encode(['#97233F', '#000000', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'LAR',
            'city' => 'Los Angeles',
            'name' => 'Rams',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/LAR.svg',
            'colors' => json_encode(['#002244', '#866D4B', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),

        ]);



        DB::table('teams')->insert([
            'abbreviation' => 'TEN',
            'city' => 'Tennessee',
            'name' => 'Titans',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/TEN.svg',
            'colors' => json_encode(['#0C2340', '#4B92DB', '#C8102E', '#A71930', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'DEN',
            'city' => 'Denver',
            'name' => 'Broncos',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/DEN.svg',
            'colors' => json_encode(['#FB4F14', '#002244', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'KC',
            'city' => 'Kansas City',
            'name' => 'Chiefs',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/KC.svg',
            'colors' => json_encode(['#E31837', '#FFB81C', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'LV',
            'city' => 'Las Vegas',
            'name' => 'Raiders',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/LV.svg',
            'colors' => json_encode(['#000000', '#A5ACAF', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'LAC',
            'city' => 'Los Angeles',
            'name' => 'Chargers',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/LAC.svg',
            'colors' => json_encode(['#002A5E', '#FFC20E', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'DAL',
            'city' => 'Dallas',
            'name' => 'Cowboys',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/DAL.svg',
            'colors' => json_encode(['#041E42', '#869397', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'NYG',
            'city' => 'New York',
            'name' => 'Giants',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/NYG.svg',
            'colors' => json_encode(['#0B2265', '#A71930', '#A5ACAF', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        
        DB::table('teams')->insert([
            'abbreviation' => 'PHI',
            'city' => 'Philadelphia',
            'name' => 'Eagles',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/PHI.svg',
            'colors' => json_encode(['#004C54', '#A5ACAF', '#ACC0C6', '#000000', '#565A5C', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'WAS',
            'city' => 'Washington',
            'name' => 'Football Team',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/WAS.svg',
            'colors' => json_encode(['#773141', '#FFB612', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'CHI',
            'city' => 'Chicago',
            'name' => 'Bears',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/CHI.svg',
            'colors' => json_encode(['#0B162A', '#C83803', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'DET',
            'city' => 'Detroit',
            'name' => 'Lions',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/DET.svg',
            'colors' => json_encode(['#0076B6', '#B0B7BC', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'GB',
            'city' => 'Green Bay',
            'name' => 'Packers',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/GB.svg',
            'colors' => json_encode(['#203731', '#FFB612', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'MIN',
            'city' => 'Minnesota',
            'name' => 'Vikings',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/MIN.svg',
            'colors' => json_encode(['#4F2683', '#FFC62F', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'ATL',
            'city' => 'Atlanta',
            'name' => 'Falcons',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/ATL.svg',
            'colors' => json_encode(['#A71930', '#000000', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'CAR',
            'city' => 'Carolina',
            'name' => 'Panthers',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/CAR.svg',
            'colors' => json_encode(['#0085CA', '#101820', '#BFC0BF', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'NO',
            'city' => 'New Orleans',
            'name' => 'Saints',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/NO.svg',
            'colors' => json_encode(['#D3BC8D', '#101820', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teams')->insert([
            'abbreviation' => 'TB',
            'city' => 'Tampa Bay',
            'name' => 'Buccaneers',
            'logo' => 'https://static.www.nfl.com/league/api/clubs/logos/TB.svg',
            'colors' => json_encode(['#D50A0A', '#FF7900', '#FFFFFF']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);









        // $teams = [
        //     'Buffalo Bills', 'Miami Dolphins', 'New England Patriots', 'New York Jets',
        //     'Baltimore Ravens', 'Cincinnati Bengals', 'Cleveland Browns', 'Pittsburgh Steelers',
        //     'Houston Texans', 'Indianapolis Colts', 'Jacksonville Jaguars', 'Tennessee Titans',
        //     'Denver Broncos', 'Kansas City Chiefs', 'Las Vegas Raiders', 'Los Angeles Chargers',
        //     'Dallas Cowboys', 'New York Giants', 'Philadelphia Eagles', 'Washington Football Team',
        //     'Chicago Bears', 'Detroit Lions', 'Green Bay Packers', 'Minnesota Vikings',
        //     'Atlanta Falcons', 'Carolina Panthers', 'New Orleans Saints', 'Tampa Bay Buccaneers',
        // ];

        // $weekStart = Carbon::create(2023, 9, 7); // Starting date of the first game of the season

        // // Seed one game per week
        // for ($week = 1; $week <= 16; $week++) {
        //     // Pick two random teams for the game, ensuring they are not the same
        //     do {
        //         $homeTeam = $teams[array_rand($teams)];
        //         $awayTeam = $teams[array_rand($teams)];
        //     } while ($homeTeam === $awayTeam);

        //     DB::table('games')->insert([
        //         'away_team' => $awayTeam,
        //         'home_team' => $homeTeam,
        //         'game_date' => $weekStart->copy()->addWeeks($week - 1), // Increment each week
        //         'week_number' => $week,
        //         'season_year' => $weekStart->year,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
    }
}
