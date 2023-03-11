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
    public function scopeTicketFilter($query,$typeofticket_id){
        if($typeofticket_id && $typeofticket_id != 0){
            return $query->where("typeofticket_id",$typeofticket_id);
        }
        return $query;
    }
    public function scopeMaxPrice($query,$maxprice){
        if($maxprice && $maxprice != ""){
            return $query->where("price","<=",$maxprice);
        }
        return $query;
    }
    public function scopeMinPrice($query,$minprice){
        if($minprice && $minprice != ""){
            return $query->where("price",">=",$minprice);
        }
        return $query;
    }
    public function scopeTicketInStock($query,$order_id){
        if($order_id && $order_id != 0){
            return $query->where("order_id",$order_id);
        }
        return $query;
    }
    public function scopeTicketTypeFilter($query,$type){
        if(is_array($type)){
            return $query ->whereIn("typeofticket_id",$type);
        }
        return $query;
    }

}
