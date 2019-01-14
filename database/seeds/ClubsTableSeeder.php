<?php

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Club::create([
         'club_name' => 'Cedevita',
         'country_id' => 1,
         'city_id' => 1,
         'league_id' => 1

        ]);

        
        }
}
