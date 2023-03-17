<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $city = City::all();
        return view("welcome", [
            "city" => $city
        ]);
    }

    public function update(Request $request){
        $request ->validate([
            "name"=>"required|string|min:6",
            "sex"=>"required|string",
            "birthday"=>"required",
            "address"=>"required|string|min:10",
            "phone"=>"required|string|min:8",
            "email"=>"required|string|min:10",
//            "thumbnail"=>"nullable|image|mimes:jpg,png,jpeg,gif"
        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=>"Thông tin nhập vào phải là một chuỗi văn bản",
            "min"=> "Vui lòng nhập tối thiểu :min kí tự",
            "mines"=>"Vui lòng nhập đúng định dạng ảnh"
        ]);


        $user =Auth::user();
        $user->name = $request['name'];
        $user->sex = $request['sex'];
        $user->birthday = $request['birthday'];
        $user->address = $request['address'];
        $user->phone = $request['phone'];
        $user->email = $request['email'];

        $user->save();
        return view("user.profile")->with('message','Profile Updated');
    }
}
