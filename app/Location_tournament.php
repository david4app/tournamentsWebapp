<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location_tournament extends Model
{
public function Tournament() {
    return $this->belongsTo(Tournament::class, 'tournament_id');

}

public function Location() {
    return $this->belongsTo(Location::class, 'location_id');
    
}
}