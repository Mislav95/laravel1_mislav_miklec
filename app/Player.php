<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['player_firstname','player_lastname','player_year','club_id','country_id'] ;
    public function club(){
        return $this ->belongsTo(\App\Club::class);
        }
        public function country(){
            return $this ->belongsTo(\App\Country::class);
            }
}
