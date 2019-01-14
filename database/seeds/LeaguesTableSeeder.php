<?php

use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\League::create([
            'league_name' => 'Hrvatska Premijer liga',
            'country_id' => 1
        ]);
    }
}
