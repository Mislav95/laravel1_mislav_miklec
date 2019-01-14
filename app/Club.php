<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ['club_name','country_id','city_id','league_id'] ;
    public function country(){
        return $this ->belongsTo(\App\Country::class);
        }
    public function city(){
            return $this ->belongsTo(\App\City::class);
        }
        public function league(){
            return $this ->belongsTo(\App\League::class);
            }
            public function players(){
                return $this ->hasMany(\App\Player::class);
                }
    
}
