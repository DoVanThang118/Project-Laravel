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
        "user_id",
        "discount_id"
    ];
    public function User(){
        return $this->belongsTo(User::class,"user_id");
    }
    public function Discount(){
        return $this->belongsTo(Discount::class,"discount_id");
    }
    public function Tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function scopeUserFilte($query,$user_id){
        if($user_id && $user_id != 0){
            return $query->where("user_id",$user_id);
        }
        return $query;
    }
}
