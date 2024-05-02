<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class questionnaireControl extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(){

        $data = request()->validate([
            'title' =>'requierd',
            'description' =>'requierd',
        ]);

        $data['user_id']=auth()->user()->id;

        $questionares = \app\questionnaire::create([$data]);

        return redirect('/questionnaires'.$questionares->id);


    }


}
