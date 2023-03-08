<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airplane;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $air = Airplane::orderBy("id","desc")
            ->paginate(20);

        return view("admin.dashboard.dashboardhome",[
            "air" => $air,
        ]);
    }

}
