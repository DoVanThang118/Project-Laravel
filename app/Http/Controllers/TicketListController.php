<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketListController extends Controller
{
    public function index()
    {
        return view('ticket-list');
    }
}
