<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function userall(){
        return view("admin.member.user-all");
    }
    public  function useredit(){
        return view("admin.member.user-edit");
    }
    public function useradd(){
        return view("admin.member.user-add");
    }
    public function userview(){
        return view("admin.member.user-view");
    }
}
