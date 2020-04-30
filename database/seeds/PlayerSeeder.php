<?php

use Illuminate\Database\Seeder;
use App\Player;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PlayerSeederTableSeeder extends Seeder
{
    public function run()
    {
        factory(Player::class, 200)->create();
        // TestDummy::times(20)->create('App\Post');
    }
}
