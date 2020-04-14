<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Location;

class LocationsSeeder extends Seeder
{
    public function run()
    {
        factory(Location::class, 100)->create();
        // TestDummy::times(20)->create('App\Post');
    }
}
