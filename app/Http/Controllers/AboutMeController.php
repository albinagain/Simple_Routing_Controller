<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show(){
        $data = array(
            'name'=>'Albin Josh Mosawan',
            'age'=>22,
            'address'=>'Somewhere in La Trinidad'
        );
        return view('AboutMeView', ['data' => $data]);
    }
}
