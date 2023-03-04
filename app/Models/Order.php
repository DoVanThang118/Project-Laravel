<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable=[
        "order_date",
        "qty",
        "totalmoney",
        "status",
        "customer_id",
        "discount_id"
    ];
    public function Customer(){
        return $this->belongsTo(Customer::class);
    }
    public function Discount(){
        return $this->belongsTo(Discount::class);
    }
    public function Tickets(){
        return $this->hasMany(Ticket::class);
    }
}
