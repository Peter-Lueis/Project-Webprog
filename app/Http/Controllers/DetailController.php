<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function Index(Request $request){
        
        return view('detail');
    }
}
