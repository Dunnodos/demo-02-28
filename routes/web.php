<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/person',function() {
    return view('person',[
        'name' => 'Jeremy L. Siguenza',
        'age' => 21,
        'address' => 'Sta. Clara Buhi Camarines Sur',
        'color' => 'lightblue',
        'siblings' => [
        [
            'name' => 'Pedro',
            'age' => 8
        ],
        [
            'name' => 'Maria',
            'age' => 15
        ],
        [
            'name' => 'Juan',
            'age' => 22
        ],
        [
            'name' => 'Eistein',
            'age' => 19
        ],
        ]
    ]);
    
});