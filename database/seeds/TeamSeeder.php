<?php

use Illuminate\Database\Seeder;
use App\Team;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class TeamSeederTableSeeder extends Seeder
{
    public function run()
    {
        factory(Team::class, 50) -> create();
    }
}
