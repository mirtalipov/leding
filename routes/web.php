<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WorkerController;

route::get('/', function () {
    return view('welcome');
});


route::get('/workers', [WorkerController::class, 'index']); 
route::get('/show', [WorkerController::class, 'show']);