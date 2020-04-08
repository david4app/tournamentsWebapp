<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->date('match_date');
            $table->string('score', 10);
            
            //foreignkeys
            $table->unsignedBigInteger('hometeam_id');
            $table->unsignedBigInteger('awayteam_id');
            $table->unsignedBigInteger('tournament_id');

            $table->foreign('hometeam_id')->references('id')->on('teams');
            $table->foreign('awayteam_id')->references('id')->on('teams');
            $table->foreign('tournament_id')->references('id')->on('tournaments');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
