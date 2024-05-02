<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class questionControl extends Controller
{
    public function questionnaire(){
        return view('questionnaire');
    }
}
