<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TableFootballMatchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('table_football_matches')->delete();
        
        \DB::table('table_football_matches')->insert(array (
            0 => 
            array (
                'match_id' => 1,
                'team_first' => 'Manchester City',
                'team_second' => 'Sheffield United',
                'season' => '2023/2024',
                'tour' => 'tour 3',
                'match_date' => '2023-08-27',
                'coefficient_team_first' => 1.21,
                'coefficient_draw' => 7.0,
                'coefficient_team_second' => 19.0,
                'team_first_goals' => 2,
                'team_second_goals' => 1,
                'result' => 'win_first',
                'created_at' => '2024-08-11 18:23:54',
                'updated_at' => '2024-08-11 18:23:54',
            ),
            1 => 
            array (
                'match_id' => 2,
                'team_first' => 'West Ham United',
                'team_second' => 'Manchester City',
                'season' => '2023/2024',
                'tour' => 'tour 5',
                'match_date' => '2023-09-16',
                'coefficient_team_first' => 6.5,
                'coefficient_draw' => 4.8,
                'coefficient_team_second' => 1.5,
                'team_first_goals' => 1,
                'team_second_goals' => 3,
                'result' => 'win_second',
                'created_at' => '2024-08-11 18:27:46',
                'updated_at' => '2024-08-11 18:27:46',
            ),
            2 => 
            array (
                'match_id' => 3,
                'team_first' => 'Manchester City',
                'team_second' => 'Forest',
                'season' => '2023/2024',
                'tour' => 'tour 6',
                'match_date' => '2023-09-23',
                'coefficient_team_first' => 1.17,
                'coefficient_draw' => 8.0,
                'coefficient_team_second' => 20.0,
                'team_first_goals' => 2,
                'team_second_goals' => 0,
                'result' => 'win_first',
                'created_at' => '2024-08-11 18:32:17',
                'updated_at' => '2024-08-11 18:32:17',
            ),
            3 => 
            array (
                'match_id' => 4,
                'team_first' => 'Wolverhampton',
                'team_second' => 'Manchester City',
                'season' => '2023/2024',
                'tour' => 'tour 7',
                'match_date' => '2023-09-30',
                'coefficient_team_first' => 9.0,
                'coefficient_draw' => 5.4,
                'coefficient_team_second' => 1.37,
                'team_first_goals' => 2,
                'team_second_goals' => 1,
                'result' => 'win_first',
                'created_at' => '2024-08-11 18:35:35',
                'updated_at' => '2024-08-11 18:35:35',
            ),
            4 => 
            array (
                'match_id' => 5,
                'team_first' => 'Manchester City',
                'team_second' => 'Arsenal',
                'season' => '2023/2024',
                'tour' => 'tour 8',
                'match_date' => '2023-10-08',
                'coefficient_team_first' => 2.53,
                'coefficient_draw' => 3.55,
                'coefficient_team_second' => 3.05,
                'team_first_goals' => 0,
                'team_second_goals' => 1,
                'result' => 'win_second',
                'created_at' => '2024-08-11 21:51:03',
                'updated_at' => '2024-08-11 21:51:03',
            ),
            5 => 
            array (
                'match_id' => 6,
                'team_first' => 'Manchester City',
                'team_second' => 'Bournemounth',
                'season' => '2023/2024',
                'tour' => 'tour 11',
                'match_date' => '2023-11-04',
                'coefficient_team_first' => 1.12,
                'coefficient_draw' => 10.0,
                'coefficient_team_second' => 28.0,
                'team_first_goals' => 6,
                'team_second_goals' => 1,
                'result' => 'win_first',
                'created_at' => '2024-08-11 23:07:03',
                'updated_at' => '2024-08-11 23:07:03',
            ),
            6 => 
            array (
                'match_id' => 7,
                'team_first' => 'Chelsea',
                'team_second' => 'Manchester City',
                'season' => '2023/2024',
                'tour' => 'tour 12',
                'match_date' => '2023-11-12',
                'coefficient_team_first' => 5.2,
                'coefficient_draw' => 3.9,
                'coefficient_team_second' => 1.8,
                'team_first_goals' => 4,
                'team_second_goals' => 4,
                'result' => 'draw',
                'created_at' => '2024-08-11 23:10:31',
                'updated_at' => '2024-08-11 23:10:31',
            ),
            7 => 
            array (
                'match_id' => 8,
                'team_first' => 'Aston Villa',
                'team_second' => 'Manchester City',
                'season' => '2023/2024',
                'tour' => 'tour 15',
                'match_date' => '2023-12-06',
                'coefficient_team_first' => 4.5,
                'coefficient_draw' => 4.25,
                'coefficient_team_second' => 1.75,
                'team_first_goals' => 1,
                'team_second_goals' => 0,
                'result' => 'win_first',
                'created_at' => '2024-08-11 23:13:12',
                'updated_at' => '2024-08-11 23:13:12',
            ),
            8 => 
            array (
                'match_id' => 9,
                'team_first' => 'Luton town',
                'team_second' => 'Manchester City',
                'season' => '2023/2024',
                'tour' => 'tour 16',
                'match_date' => '2023-12-10',
                'coefficient_team_first' => 19.5,
                'coefficient_draw' => 8.1,
                'coefficient_team_second' => 1.17,
                'team_first_goals' => 1,
                'team_second_goals' => 2,
                'result' => 'win_second',
                'created_at' => '2024-08-11 23:14:59',
                'updated_at' => '2024-08-11 23:14:59',
            ),
            9 => 
            array (
                'match_id' => 10,
                'team_first' => 'Manchester City',
                'team_second' => 'Crystal Palace',
                'season' => '2023/2024',
                'tour' => 'tour 17',
                'match_date' => '2023-12-16',
                'coefficient_team_first' => 1.21,
                'coefficient_draw' => 7.3,
                'coefficient_team_second' => 16.5,
                'team_first_goals' => 2,
                'team_second_goals' => 2,
                'result' => 'draw',
                'created_at' => '2024-08-11 23:18:00',
                'updated_at' => '2024-08-11 23:18:00',
            ),
            10 => 
            array (
                'match_id' => 11,
                'team_first' => 'Manchester City',
                'team_second' => 'Sheffield United',
                'season' => '2023/2024',
                'tour' => 'tour 20',
                'match_date' => '2023-12-30',
                'coefficient_team_first' => 1.1,
                'coefficient_draw' => 11.0,
                'coefficient_team_second' => 37.0,
                'team_first_goals' => 2,
                'team_second_goals' => 0,
                'result' => 'win_first',
                'created_at' => '2024-08-11 23:21:24',
                'updated_at' => '2024-08-11 23:21:24',
            ),
            11 => 
            array (
                'match_id' => 12,
                'team_first' => 'Manchester City',
                'team_second' => 'Newcastle United',
                'season' => '2023/2024',
                'tour' => 'tour 21',
                'match_date' => '2024-01-13',
                'coefficient_team_first' => 1.61,
                'coefficient_draw' => 4.4,
                'coefficient_team_second' => 5.6,
                'team_first_goals' => 3,
                'team_second_goals' => 2,
                'result' => 'win_first',
                'created_at' => '2024-08-11 23:24:12',
                'updated_at' => '2024-08-11 23:24:12',
            ),
            12 => 
            array (
                'match_id' => 13,
                'team_first' => 'Burnley',
                'team_second' => 'Manchester City',
                'season' => '2023/2024',
                'tour' => 'tour 22',
                'match_date' => '2024-01-31',
                'coefficient_team_first' => 31.0,
                'coefficient_draw' => 10.0,
                'coefficient_team_second' => 1.12,
                'team_first_goals' => 1,
                'team_second_goals' => 3,
                'result' => 'win_second',
                'created_at' => '2024-08-11 23:26:46',
                'updated_at' => '2024-08-11 23:26:46',
            ),
            13 => 
            array (
                'match_id' => 14,
                'team_first' => 'Manchester City',
                'team_second' => 'Everton',
                'season' => '2023/2024',
                'tour' => 'tour 24',
                'match_date' => '2024-02-10',
                'coefficient_team_first' => 1.24,
                'coefficient_draw' => 7.0,
                'coefficient_team_second' => 13.0,
                'team_first_goals' => 2,
                'team_second_goals' => 0,
                'result' => 'win_first',
                'created_at' => '2024-08-11 23:28:12',
                'updated_at' => '2024-08-11 23:28:12',
            ),
            14 => 
            array (
                'match_id' => 15,
                'team_first' => 'Manchester City',
                'team_second' => 'Chelsea',
                'season' => '2023/2024',
                'tour' => 'tour 25',
                'match_date' => '2024-02-17',
                'coefficient_team_first' => 1.37,
                'coefficient_draw' => 5.6,
                'coefficient_team_second' => 8.5,
                'team_first_goals' => 1,
                'team_second_goals' => 1,
                'result' => 'draw',
                'created_at' => '2024-08-11 23:29:44',
                'updated_at' => '2024-08-11 23:29:44',
            ),
        ));
        
        
    }
}