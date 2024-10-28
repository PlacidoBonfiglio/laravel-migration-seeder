<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    //
    public function index() {
        $passengers = Passenger::all();
        //@dd($passenger);
        return view("passengers.index", compact("passengers"));
    }
}
