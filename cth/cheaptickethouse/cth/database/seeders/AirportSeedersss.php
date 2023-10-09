<?php

namespace Database\Seeders;
// use Illuminate\Database\Seeder;
use app\Models\Airport;

class AirportSeeder extends Seeder
{
   
    public function run(): void
    {
        Seeder::create([
                'airport' => 'Test User',
            ]);
       
    }
}
