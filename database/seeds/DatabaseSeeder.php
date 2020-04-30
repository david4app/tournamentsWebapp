<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LocationsSeeder::class);
        $this->call(TournamentSeederTableSeeder::class);
        $this->call(TeamSeederTableSeeder::class);
        $this->call(MatchSeederTableSeeder::class);
        $this->call(UserSeederTableSeeder::class);
        $this->call(PlayerSeederTableSeeder::class);
        $this->call(LocationTournamentSeederTableSeeder::class);
    }
}
