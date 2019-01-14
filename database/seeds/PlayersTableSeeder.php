<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Player::create([
            'player_firstname' => 'Andrija',
            'player_lastname' => 'Stipanović',
            'player_year' => '30',
            'club_id' => 1,
            'country_id' => 1
        ]);
    }
}
