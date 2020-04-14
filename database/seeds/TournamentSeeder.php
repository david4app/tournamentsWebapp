<?php

use Illuminate\Database\Seeder;
use App\Tournament;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class TournamentSeederTableSeeder extends Seeder
{
    public function run()
    {
        factory(Tournament::class, 100)->create();
        // TestDummy::times(20)->create('App\Post');
    }
}
