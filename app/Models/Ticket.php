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
        return $this->belongsTo(Seat::class);
    }
    public function TypeOfTicket(){
        return $this->belongsTo(TypeOfTicket::class);
    }
    public function Order(){
        return $this->belongsTo(Order::class);
    }
}
