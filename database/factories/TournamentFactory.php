<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tournament;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;

$factory->define(Tournament::class, function (Faker $faker) {
    return [
        'tournament_name' => $faker ->sentence (4, false), // Str::random(20),
        'date_from' => $dateNow = Carbon::now(),
        'date_to' => $date25MinsAgo = Carbon::now()->addDays(rand(1, 1000))

    ];
});
