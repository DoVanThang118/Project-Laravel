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
    public function airplaneview(Airplane $airplane){

        $type = TypeOfSeat::with("Airplane")
            ->AirplaneFilter($airplane->id)
            ->get();

        $seat=Seat::with("TypeOfSeat")
            ->TypeOfSeatFilter($type)
            ->orderBy("typeofseat_id","desc")
            ->paginate(20);

        return view("admin.airplane.airplane-view",[
            "seat"=>$seat,
            "type"=>$type,
            "airplane"=>$airplane
        ]);

    }
    public function airplaneviewtype(Request $request){

        $typeofseat_id=$request->get("typeofseat_id");
        $type=TypeOfSeat::where("id",$typeofseat_id)->get();


        $seat=Seat::with("TypeOfSeat")
            ->TypeFilter($typeofseat_id)
            ->orderBy("id","desc")
            ->paginate(20);

        return view("admin.airplane.airplane-view-type",[
            "seat"=>$seat,
            "type"=>$type
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
//            $ext = $file->getClientOriginalExtension();
//            $fileName = time().".".$ext;
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

            return redirect()->to("admin/airplane/airplane-all")->with("success","Them san pham thanh cong");
        }catch (\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
       }

    }


    public function airplaneedit(){
        return view("admin.airplane.airplane-edit");
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
