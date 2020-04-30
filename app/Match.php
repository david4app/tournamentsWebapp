<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{   
    protected $fillable = [
        'match_date',
        'score' 
    ];

    public function homeTeam() {
        return $this->belongsTo(Team::class, 'hometeam_id');
    }

    public function awayTeam() {
        return $this->belongsTo(Team::class, 'awayteam_id');
    }

    public function tournament() {
        return $this->belongsTo(Tournament::class, 'tournament_id');
    }
}

