<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[PersonController::class, 'showAbout']);

// Route::get('/about', function () {
//     // $person =[
//     //     'name'=>'Antra',
//     //     'email'=>'antra@ventspilstehnikums.lv',
//     //     'languages'=>['PHP','Python','Javascript']
//     // ];
//     class Person {
//         public $name;
//         public $email;
//         public $languages;
        
// //   function __construct($name, $email, $languages) {
// //     $this->name = $name;
// //     $this->email = $email;
// //     $this->languages = $languages;
// //     }
// //     function get_details() {
// //   echo "Name: " . $this->name . " email: " . $this->email ."languages: " . $this->languages;
// // }
//     };
// $person1 = new Person;
// $person1->name ='Antra';
// $person1->email='antra@ventspilstehnikums.lv';
// $person1->languages=['PHP','Python','Javascript'];

//     $testName = "Jānis";

//     return view('about', ['person' => $person1]);
// });


// Route::get('/contact-form', function(){
//     echo "<h2>contact form</h2>";
// });

//greetings