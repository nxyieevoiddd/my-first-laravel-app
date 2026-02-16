<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // $person =[
    //     'name'=>'Antra',
    //     'email'=>'antra@ventspilstehnikums.lv',
    //     'languages'=>['PHP','Python','Javascript']
    // ];

    $testName = "Jānis";

    return view('about', ['name' => $testName]);
});


Route::get('/contact-form', function(){
    echo "<h2>contact form</h2>";
});

//greetings