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
        "image",
        "description",
        "price",
        "flight_id",
        "typeofseat_id"
    ];
    public function Flight(){
        return $this->belongsTo(Flight::class);
    }
    public function TypeOfSeat(){
        return $this->belongsTo(TypeOfSeat::class);
    }
    public function Tickets(){
        return $this->hasMany(Ticket::class);
    }

}
