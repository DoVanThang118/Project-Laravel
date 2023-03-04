<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfSeat extends Model
{
    use HasFactory;
    protected $table="typeofseats";
    protected $fillable=[
        "name",
        "totalseat",
        "description",

    ];
    public function Seats(){
        return $this->hasMany(Seat::class);
    }
    public function TypeOfTickets(){
        return $this->hasMany(TypeOfTicket::class);
    }

}
