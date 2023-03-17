<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $user= auth()->user();
//        dd($user);
        return view('user.profile',[
            "user"=>$user
        ]);
    }

    public function edit()
    {

        return view('user.profile-edit');
    }

}
