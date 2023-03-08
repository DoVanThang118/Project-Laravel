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
        "airplane_id"

    ];
    public function Airplane(){
        return $this->belongsTo(Airplane::class);
    }
    public function Seats(){
        return $this->hasMany(Seat::class);
    }
    public function TypeOfTickets(){
        return $this->hasMany(TypeOfTicket::class);
    }
    public function scopeAirplaneFilter($query,$airplane_id){
        if($airplane_id && $airplane_id != 0){
            return $query->where("airplane_id",$airplane_id);
        }
        return $query;
    }





}
