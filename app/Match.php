<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function homeTeam() {
        $this->belongsTo(Team::class, 'hometeam_id');
    }

    public function awayTeam() {
        $this->belongsTo(Team::class, 'awayteam_id');
    }
}
