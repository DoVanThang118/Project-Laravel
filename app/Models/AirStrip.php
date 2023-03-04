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
    public function Cities(){
        return $this->belongsToMany(City::class);
    }
    public function Flights(){
        return $this->hasMany(Flight::class);
    }

}
