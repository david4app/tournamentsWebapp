<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use App\User;
use App\Team;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker)  {
    /*$users = User::all()-> pluck('id')-> toArray();
    $teams = Team::all()-> pluck('id')-> toArray();
    
    $user_id =$faker-> randomElement($users);
    $team_id =$faker-> randomElement($teams);
        if($user_id == $team_id){
            $team_id = $faker->randomElement($teams);
        if($team_id == $user_id){
            $user_id = $faker->randomElement($users);
        }}*/
    return [
        'first_name' => $faker-> firstNameMale(),
        'last_name' => $faker-> lastName(),
        'user_id' => rand(1, 100),
        'team_id' => rand(1, 50)

    ];
});
