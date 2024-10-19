<?php

use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return view('welcome');
});


route::get('/workers', function(){
    return 'this is worker from routes';
});