<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show(){
        $data = array(
            'Playing Video Games',
            'Watching Videos on the Internet',
            'Cycling'
        );
        return view('HobbiesView', ['data' => $data]);
    }
}
