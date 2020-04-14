<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'zip' => rand(10000, 90000),
        'town' => $faker->city,
        'street' => $faker->streetAddress
        
    ];
});
