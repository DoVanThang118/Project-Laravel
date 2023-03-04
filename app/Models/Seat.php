<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $table="seats";
    protected $fillable=[
        "name",
        "description",
        "airplane_id",
        "typeofseat_id"

    ];
    public function Airplane(){
        return $this->belongsTo(Airplane::class);
    }
    public function TypeOfSeat(){
        return $this->belongsTo(TypeOfSeat::class);
    }
    public function Tickets(){
        return $this->hasMany(Ticket::class);
    }

}
