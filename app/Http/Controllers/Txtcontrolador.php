<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Txtcontrolador extends Controller
{
    public function mform(){
        return view('index');
    }

    public function mguardar(Request $request){
        dd($request);
    }
}
