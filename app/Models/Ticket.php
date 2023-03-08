<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table="tickets";
    protected $fillable=[
        "status",
        "price",
        "typeofticket_id",
        "order_id",
        "seat_id"

    ];
    public function Seat(){
        return $this->belongsTo(Seat::class,"seat_id");
    }
    public function TypeOfTicket(){
        return $this->belongsTo(TypeOfTicket::class,"typeofticket_id");
    }
    public function Order(){
        return $this->belongsTo(Order::class,"order_id");
    }
    public function scopeTypeOfTicketFilter($query,$type){
        foreach ($type as $t){
            $query->orWhere("typeofticket_id",$t->id);
        }
        return $query;
    }

}
