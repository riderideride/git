<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    



    $data = [

    'title' => 'Hi student i hope you like the course',
    'content'=> ' fuck this stupit shit'
    ];


    Mail::send('emails.test', $data, function ($message) {
        $message->from('riderisqfdsfqdsfdqderide@hotmail.com', 'John Doe');
        $message->sender('john@johndoe.com', 'John Doe');
    
        $message->to('riderideride@hotmail.com', 'John Doe');
    

    
    
        
    });
});
