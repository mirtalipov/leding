<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        return view('worker.index', compact('workers'));
    }
    public function show(Worker $worker)
    {
        dd($worker);
    }
    
    public function create()
    {
        $worker = [
            'name' => 'ivan', 
            'surname' => 'ivanov',
            'email' => 'ivanov@mail.com',
            'age' => '20',
            'description' => 'im ivan',
            'is_married' => false,
        ];
        Worker::create($worker);
        return 'ivan was created';
    }
    public function update()
    {
        $worker = Worker::find(2);
        $worker->update([
            'name' => 'Karl',
            'surname' => 'Petrov',
        ]);
        return 'was updated';
    }
    public function delete()
    {
        $worker = Worker::find(3);
        $worker->delete();
        return 'was deleted';
    }
}
