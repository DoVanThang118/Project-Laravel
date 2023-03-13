<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table="flights";
    protected $fillable=[
        "takeoftime",
        "landingtime",
        "description",
        "totalticket",
        "airplane_id",
        "airstrip_id"
    ];
    public function AirStrip(){
        return $this->belongsTo(AirStrip::class,"airstrip_id");
    }
    public function Airplane(){
        return $this->belongsTo(Airplane::class,"airplane_id");
    }
    public function TypeOfTickets(){
        return $this->hasMany(TypeOfTicket::class);
    }
    public function scopeFlightAirplaneFilter($query,$airplane_id){
        if($airplane_id && $airplane_id != 0){
            return $query->where("airplane_id",$airplane_id);
        }
        return $query;
    }
    public function scopeAirStripFilter($query, $airstrip_id){
        if($airstrip_id && $airstrip_id != 0){
            return $query->where("airstrip_id",$airstrip_id);
        }
        return $query;
    }
    public function scopeLandingTimeFilter($query, $landingtime){
        if($landingtime && $landingtime != 0){
            return $query->whereDate("landingtime",$landingtime);
        }
        return $query;
    }
    public function scopeTakeofTimeFilter($query, $takeoftime){
        if($takeoftime && $takeoftime != 0){
            return $query->whereDate("takeoftime",$takeoftime);
        }
        return $query;
    }

    public function scopeFlightAirStripFilter($query,$airstrip){
        if(is_array($airstrip)){
            return $query ->whereIn("airstrip_id",$airstrip);
        }
        return $query;
    }
}
