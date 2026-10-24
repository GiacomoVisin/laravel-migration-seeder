<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class GuestController extends Controller
{
    public function index (){
    $Train = Train::orderBy('departure_time');
    
    return view('index',compact('Train'));
    }
}
