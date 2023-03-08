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
        "typeofseat_id"

    ];
    public function TypeOfSeat(){
        return $this->belongsTo(TypeOfSeat::class,"typeofseat_id");
    }
    public function Tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function scopeTypeFilter($query,$typeofseat_id){
        if($typeofseat_id && $typeofseat_id != 0){
            return $query->where("typeofseat_id",$typeofseat_id);
        }
        return $query;
    }

    public function scopeTypeOfSeatFilter($query,$type){
        foreach ($type as $t){
            $query->orWhere("typeofseat_id",$t->id);
        }
        return $query;
    }





}
