<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PersonController extends Controller
{
    public function showAbout(){
    // $person =[
    //     'name'=>'Antra',
    //     'email'=>'antra@ventspilstehnikums.lv',
    //     'languages'=>['PHP','Python','Javascript']
    // ];
    // $testName = "Jānis";

    $users = User::all();

        return view('about', ['userAry' => $users]);
    }
}
