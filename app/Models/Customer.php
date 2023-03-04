<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table="customers";
    protected $fillable=[
        "name",
        "address",
        "email",
        "national",
        "birthday",
        "CCCD",
        "tel",
        "image",
        "sex",
        "typeofcustomer_id"

    ];
    public function TypeOfCustomer(){
        return $this->belongsTo(TypeOfCustomer::class);
    }
    public function Orders(){
        return $this->hasMany(Order::class);
    }
}
