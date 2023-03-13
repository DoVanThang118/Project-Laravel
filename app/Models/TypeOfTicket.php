<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfTicket extends Model
{
    use HasFactory;
    protected $table="typeoftickets";
    protected $fillable=[
        "name",
        "totalticket",
        "ticketinstock",
        "image",
        "description",
        "price",
        "flight_id",
        "typeofseat_id"
    ];
    public function Flight(){
        return $this->belongsTo(Flight::class,"flight_id");
    }
    public function TypeOfSeat(){
        return $this->belongsTo(TypeOfSeat::class,"typeofseat_id");
    }
    public function Tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function scopeFlightFilter($query,$flight_id){
        if($flight_id && $flight_id != 0){
            return $query->where("flight_id",$flight_id);
        }
        return $query;
    }

}
