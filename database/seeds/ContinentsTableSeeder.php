<?php

use Illuminate\Database\Seeder;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Continent::create([
            'continent_name' => 'Europa',
            'number_of_countries' => 46,
            'native_name' => 'Europe'
        ]
        );
    }
    
    
}
