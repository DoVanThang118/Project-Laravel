<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfCustomer extends Model
{
    use HasFactory;
    protected $table="typeofcustomers";
    protected $fillable=[
        "name",
        "description"
    ];
    public function Customers(){
        return $this->hasMany(Customer::class);
    }

}
