<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location_tournament;
use Faker\Generator as Faker;

$factory->define(Location_tournament::class, function (Faker $faker) {
    return [
        'tournament_id' => rand(1, 100),
        'location_id'=> rand(1, 100)

    ];
});
