<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    use HasFactory;
    protected $table="airplanes";
    protected $fillable=[
        "name",
        "brand",
        "description",
        "image",
        "totalseat"

    ];
    public function TypeOfSeats(){
        return $this->hasMany(TypeOfSeat::class);
    }
    public function Flights(){
        return $this->hasMany(Flight::class);
    }


}
