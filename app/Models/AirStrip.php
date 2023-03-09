<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirStrip extends Model
{
    use HasFactory;
    protected $table="airstrips";
    protected $fillable=[
        "name",
        "landingcity_id",
        "takeofcity_id"
    ];
    public function LandingCity(){
        return $this->belongsTo(City::class,"landingcity_id");
    }
    public function TakeofCity(){
        return $this->belongsTo(City::class,"takeofcity_id");
    }

    public function Flights(){
        return $this->hasMany(Flight::class);
    }

    public function scopeAirStripFilter($query,$landingcity_id,$takeofcity_id){
        if($landingcity_id && $landingcity_id != 0 && $takeofcity_id && $takeofcity_id!=0){
            return $query->where("landingcity_id",$landingcity_id)
                ->where("takeofcity_id",$takeofcity_id);
        }
        return $query;
    }
}
