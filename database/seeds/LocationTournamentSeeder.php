<?php

use App\Location_tournament;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class LocationTournamentSeederTableSeeder extends Seeder
{
    public function run()
    {
        factory(Location_tournament::class, 100)->create();
    }
}
