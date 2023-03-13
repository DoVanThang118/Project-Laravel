<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable=[
        "amount"=>"required",
        "cardtype"=>"required",
        "cardnumber"=>"required",
        "expirydate"=>"required",
        "CVV"=>"required",
        "fullname"=>"required"
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
    public function scopeUserFilter($query,$user_id){
        if($user_id && $user_id != 0){
            return $query->where("user_id",$user_id);
        }
        return $query;
    }
    public function createItems(){
        $cart = session()->has("cart") && is_array(session("cart"))?session("cart"):[];
        foreach ($cart as $item){
            DB::table("order_products")->insert([
                "qty"=>$item->buy_qty,
                "price"=>$item->price,
                "order_id"=>$this->id,
            ]);
        }
        // phat event
        event(new NewOrder($this));
    }
}
