<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WorkerController;

route::get('/', function () {
    return view('welcome');
});


route::get('/workers', [WorkerController::class, 'index'])->name('worker.index'); 
route::get('/create', [WorkerController::class, 'create'])->name('worker.create');
route::get('/show/{worker}', [WorkerController::class, 'show'])->name('worker.show');
route::post('/workers', [WorkerController::class, 'store'])->name('worker.store');
route::get('/show/{worker}/edit', [WorkerController::class, 'edit'])->name('worker.edit');
route::get('/update', [WorkerController::class, 'update'])->name('worker.update');
route::get('/delete', [WorkerController::class, 'delete'])->name('worker.delete'); 