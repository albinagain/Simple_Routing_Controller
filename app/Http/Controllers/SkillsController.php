<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show(){
        $data = array(
            'Video Editing Skill',
            'Use of Microsoft Office Applications',
            'Problem Solving Skill',
            'Somewhat Good Communication Skill'
        );
        return view('SkillsView', ['data' => $data]);
    }
}
