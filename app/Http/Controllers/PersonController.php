<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function showAbout(){
    $person =[
        'name'=>'Antra',
        'email'=>'antra@ventspilstehnikums.lv',
        'languages'=>['PHP','Python','Javascript']
    ];
    $testName = "Jānis";
        return view('about', ['person' => $person, 'someName'=>$testName]);
    }
}
