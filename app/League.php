<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = ['league_name','country_id'] ;
    public function clubs(){
        return $this ->hasMany(\App\Club::class);
        }
        public function country(){
            return $this ->belongsTo(\App\Country::class);
            }
}
