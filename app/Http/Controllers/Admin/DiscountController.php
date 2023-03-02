<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function discountall(){
        return view("admin.discount.discount-all");
    }
    public function discountedit(){
        return view("admin.discount.discount-edit");
    }
    public function discountadd(){
        return view("admin.discount.discount-add");
    }
}
