<?php

use Illuminate\Database\Seeder;
use App\Match;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class MatchSeederTableSeeder extends Seeder
{
    public function run()
    {
        factory(Match::class, 100)->create();
    }
}
