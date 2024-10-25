<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Http\Requests\Worker\StoreRequest; // Убедись, что StoreRequest находится по этому пути

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));
    }
    
    public function create()
    {
        return view('worker.create');
    }

    public function store(StoreRequest $request) 
    {
        $data = $request->validated();
        $data['is_married'] = $request->has('is_married'); // Проверяем наличие поля
        Worker::create($data);
        return redirect()->route('worker.index');
    }
    public function edit(Worker $worker)
    {
        return view('worker.edit', compact('worker'));
    }

    public function update()
    {
        $worker = Worker::find(2); // Или использовать findOrFail для обработки случая, если запись не найдена
        if ($worker) {
            $worker->update([
                'name' => 'Karl',
                'surname' => 'Petrov',
            ]);
            return 'was updated';
        } else {
            return 'Worker not found';
        }
    }

    public function delete()
    {
        $worker = Worker::findOrFail(3); // Используем findOrFail для лучшей обработки ошибок
        $worker->delete();
        return 'was deleted';
    }
}
