<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
        
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(LeaguesTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
        $this->call(ContinentsTableSeeder::class);
        
    }
}
