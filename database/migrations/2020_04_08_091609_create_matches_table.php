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
            $table->unsignedBigInteger('hometeam_id')->nullable();
            $table->unsignedBigInteger('awayteam_id')->nullable();
            $table->unsignedBigInteger('tournament_id')->nullable();

            $table->foreign('hometeam_id')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('awayteam_id')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade')->onUpdate('cascade');
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
