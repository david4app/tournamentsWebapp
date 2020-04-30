<?php

use Illuminate\Database\Seeder;
use App\User;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserSeederTableSeeder extends Seeder
{
    public function run()
    {
        factory(User::class, 100)->create();
    }
}
