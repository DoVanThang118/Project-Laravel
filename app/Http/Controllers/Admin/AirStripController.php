<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AirStrip;
use App\Models\City;
use Illuminate\Http\Request;

class AirStripController extends Controller
{
    public function airstripall()
    {
        $data = AirStrip::orderBy("id", "desc")
            ->paginate(30);

        return view("admin.airstrip.airstrip-all", [
            "data" => $data
        ]);
    }

    public function airstripadd()
    {
        $cities = City::orderBy("id", "asc")->get();
        return view("admin.airstrip.airstrip-add", [
            "cities" => $cities
        ]);
    }

    public function airstripcreate(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:3",
            "takeofcity_id" => "required|numeric|min:1",
            "landingcity_id" => "required|numeric|different:takeofcity_id|min:1"

        ], [
            "required" => "Vui lòng nhập thông tin",
            "string" => "Phải nhập vào là một chuỗi văn bản",
            "min" => "Phải nhập :attribute  tối thiểu :min",
            "mimes" => "Vui lòng nhập đúng định dạng ảnh"
        ]);

        try{

            $takeofcity_id = $request->get("takeofcity_id");
            $landingcity_id = $request->get("landingcity_id");
                AirStrip::create([
                    "name" => $request->get("name"),
                    "takeofcity_id" => $takeofcity_id,
                    "landingcity_id" => $landingcity_id
                ]);
                return redirect()->to("admin/airstrip/airstrip-all")->with("success", "Them airstrip thanh cong");

        }catch (\Exception $e){
            return redirect()->back();
        }






    }
    public function airstripedit(AirStrip $airstrip)
    {
        return view("admin.airstrip.airstrip-edit", [
            "airstrip" => $airstrip
        ]);
    }
    public function airstripupdate(AirStrip $airstrip,Request $request)
    {
        $request->validate([
            "name" => "required|string|min:3",
        ], [
            "required" => "Vui lòng nhập thông tin",
            "string" => "Phải nhập vào là một chuỗi văn bản",
            "min" => "Phải nhập :attribute  tối thiểu :min",
            "mimes" => "Vui lòng nhập đúng định dạng ảnh"
        ]);

        try{
            $airstrip->update([
                "name"=>$request->get("name"),
            ]);

            return redirect()->to("admin/airstrip/airstrip-all")->with("success","Sua airstrip thanh cong");

        }catch (\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }

    }

}
