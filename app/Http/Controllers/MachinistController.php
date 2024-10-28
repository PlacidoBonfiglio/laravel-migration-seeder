<?php

namespace App\Http\Controllers;

use App\Models\Machinist;
use Illuminate\Http\Request;

class MachinistController extends Controller
{
    //
    public function index() {
        $machinists = Machinist::all();
        return view("machinists.index", compact("machinists"));
    }
}
