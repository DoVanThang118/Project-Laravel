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
}
