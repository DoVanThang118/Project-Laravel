<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function discountall(){
        $data=Discount::orderBy("id","desc")->paginate(30);
        return view("admin.discount.discount-all",[
            "data"=>$data
        ]);
    }
    public function discountedit(Discount $discount){
        return view("admin.discount.discount-edit",[
            "discount"=>$discount
        ]);
    }
    public function discountupdate(Discount $discount,Request $request){

        $request->validate([
            "name"=>"required|string|min:3",
            "expirationdate"=>"required",
            "description"=>"required|string|min:3",
            "discount"=>"required|numeric|min:1",

        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản",
            "min"=> "Phải nhập :attribute  tối thiểu :min",
            "mimes"=>"Vui lòng nhập đúng định dạng ảnh"
        ]);

        try{
            $discount->update([
                "name" => $request->get("name"),
                "expirationdate" => $request->get("expirationdate"),
                "description" => $request->get("description"),
                "discount" => $request->get("discount"),
            ]);

            return redirect()->to("admin/discount/discount-all")->with("success", "Update Discount Success");
        }catch (\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }

    }

    public function discountadd(){
        return view("admin.discount.discount-add");
    }
    public function discountcreate(Request $request){
        $request->validate([
            "name"=>"required|string|min:3",
            "expirationdate"=>"required",
            "description"=>"required|string|min:3",
            "discount"=>"required|numeric|min:1",

        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản",
            "min"=> "Phải nhập :attribute  tối thiểu :min",
            "mimes"=>"Vui lòng nhập đúng định dạng ảnh"
        ]);

        try{
            $discount = Discount::create([
                "name" => $request->get("name"),
                "expirationdate" => $request->get("expirationdate"),
                "description" => $request->get("description"),
                "discount" => $request->get("discount"),
            ]);

            return redirect()->to("admin/discount/discount-all")->with("success", "Add Discount Success");
        }catch (\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }

    }
}
