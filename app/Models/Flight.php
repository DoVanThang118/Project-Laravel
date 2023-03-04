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
        "airplane_id",
        "airstrip_id"
    ];
    public function AirStrip(){
        return $this->belongsTo(AirStrip::class);
    }
    public function Airplane(){
        return $this->belongsTo(Airplane::class);
    }
    public function TypeOfTickets(){
        return $this->hasMany(TypeOfTicket::class);
    }
}
