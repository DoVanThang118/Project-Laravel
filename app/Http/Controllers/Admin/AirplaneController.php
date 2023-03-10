<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airplane;
use App\Models\Seat;
use App\Models\TypeOfSeat;
use Illuminate\Http\Request;

class AirplaneController extends Controller
{
    public function airplaneall(){

        $data= Airplane::orderBy("id","asc")
            ->paginate(20);

        return view("admin.airplane.airplane-all",[
            "data"=>$data
        ]);
    }
    public function airplaneview(Airplane $airplane,Request $request){

        $type = TypeOfSeat::with("Airplane")
            ->AirplaneFilter($airplane->id)
            ->get();
        $typeofseat_id=$request->get("typeofseat_id");

        if($typeofseat_id!=0){
            $seat=Seat::with("TypeOfSeat")
                ->TypeFilter($typeofseat_id)
                ->orderBy("id","desc")
                ->paginate(40);
        }else{
            $seat=Seat::with("TypeOfSeat")
                ->TypeOfSeatFilter($type)
                ->orderBy("typeofseat_id","desc")
                ->paginate(40);
        }

        return view("admin.airplane.airplane-view",[
            "seat"=>$seat,
            "type"=>$type,
            "airplane"=>$airplane
        ]);

    }

    public function airplaneadd(){

        return view("admin.airplane.airplane-add");
    }
    public function airplanecreate(Request $request){

        $request->validate([
            "name"=>"required|string|min:3",
            "brand"=>"required|string|min:3",
            "thumbnail"=>"required|image|mimes:jpg,png,jpeg,gif",
            "description"=>"required|string|min:3",
            "vip"=>"required|numeric|min:10",
            "normal"=>"required|numeric|min:10",
            "cheap"=>"required|numeric|min:10",

        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản",
            "min"=> "Phải nhập :attribute  tối thiểu :min",
            "mimes"=>"Vui lòng nhập đúng định dạng ảnh"
        ]);

        try{
            $thumbnail = null;
            if($request->hasFile("thumbnail")){
                $file = $request->file("thumbnail");
                $fileName = time().$file->getClientOriginalName();
                $path = public_path("uploads");
                $file->move($path,$fileName);
                $thumbnail = "uploads/".$fileName;
        }

            $qtyvip=$request->get("vip");
            $qtynormal=$request->get("normal");
            $qtycheap=$request->get("cheap");
            $qty=$qtyvip+$qtynormal+$qtycheap;

            $airplane = Airplane::create([
                "name"=>$request->get("name"),
                "brand"=>$request->get("brand"),
                "desciption"=>$request->get("description"),
                "thumbnail"=>$thumbnail,
                "totalseat"=>$qty

            ]);
            $typeofseatVIP=TypeOfSeat::create([
                "name"=>"VIP",
                "totalseat"=>$qtyvip,
                "description"=>null,
                "airplane_id"=>$airplane->id
            ]);
            $typeofseatNORMAL=TypeOfSeat::create([
                "name"=>"NORMAL",
                "totalseat"=>$qtynormal,
                "description"=>null,
                "airplane_id"=>$airplane->id
            ]);
            $typeofseatCHEAP=TypeOfSeat::create([
                "name"=>"CHEAP",
                "totalseat"=>$qtycheap,
                "description"=>null,
                "airplane_id"=>$airplane->id
            ]);
            for($i=0;$i<$typeofseatVIP->totalseat;$i++){
                Seat::create([
                    "name"=>"VIP".$i,
                    "description"=>null,
                    "typeofseat_id"=>$typeofseatVIP->id
                ]);
            }
            for($i=0;$i<$typeofseatNORMAL->totalseat;$i++){
                Seat::create([
                    "name"=>"NORMAL".$i,
                    "description"=>null,
                    "typeofseat_id"=>$typeofseatNORMAL->id
                ]);
            }
            for($i=0;$i<$typeofseatCHEAP->totalseat;$i++){
                Seat::create([
                    "name"=>"CHEAP".$i,
                    "description"=>null,
                    "typeofseat_id"=>$typeofseatCHEAP->id
                ]);
            }

            return redirect()->to("admin/airplane/airplane-all")->with("success","Them airplane thanh cong");
        }catch (\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
       }

    }


    public function airplaneedit(Airplane $airplane){

        return view("admin.airplane.airplane-edit",[
            "airplane"=>$airplane
        ]);
    }
    public function airplaneupdate(Airplane $airplane,Request $request){
        $request->validate([
            "name"=>"required|string|min:3",
            "brand"=>"required|string|min:3",
            "description"=>"required|string|min:3",


        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản",
            "min"=> "Phải nhập :attribute  tối thiểu :min",
            "mimes"=>"Vui lòng nhập đúng định dạng ảnh"
        ]);
        try{
            $airplane->update([
                "name"=>$request->get("name"),
                "brand"=>$request->get("brand"),
                "description"=>$request->get("description"),
            ]);

            return redirect()->to("admin/airplane/airplane-all")->with("success","Sua airplane thanh cong");

        }catch (\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }
    }
    public function seattypeadd(){
        return view("admin.airplane.seat-type-add");
    }
    public function seattypeall(){
        return view("admin.airplane.seat-type-all");
    }
    public function seattypeedit(){
        return view("admin.airplane.seat-type-edit");
    }

}
