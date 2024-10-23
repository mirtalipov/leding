<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WorkerController;

route::get('/', function () {
    return view('welcome');
});


route::get('/workers', [WorkerController::class, 'index']); 
route::get('/show', [WorkerController::class, 'show']);
route::get('/create', [WorkerController::class, 'create']);
route::get('/update', [WorkerController::class, 'update']);
route::get('/delete', [WorkerController::class, 'delete']); 