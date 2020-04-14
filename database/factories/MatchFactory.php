<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;
use App\Team;
use App\Tournament;

$factory->define(Match::class, function (Faker $faker) {
$teams = Team::all()->pluck('id')-> toArray();
$tournaments = Tournament::all()-> pluck('id')->toArray();

$hometeam_id =$faker-> randomElement($teams);
$awayteam_id =$faker-> randomElement($teams);
$tournament_id =$faker-> randomElement($tournaments);

    if($hometeam_id == $awayteam_id){
        $awayteam_id = $faker->randomElement($teams);
    }

    return [
       'match_date' => $faker->dateTime(),
       'score' => rand(0, 5) .' : '. rand(0,5),
       'hometeam_id' => $hometeam_id,
       'awayteam_id' => $awayteam_id,
       'tournament_id' => $tournament_id
       
    
    ];
});
