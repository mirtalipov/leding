<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers</title>
</head>
<body>
<div>
    <hr>
    <div>
        <a href="{{route('worker.create')}}">Добавить сотрудника</a>
    </div>

    @foreach($workers as $worker)
        <div>
            <div><strong>Name:</strong> {{$worker->name}}</div>            
            <div><strong>Surname:</strong> {{$worker->surname}}</div>              
            <div><strong>Email:</strong> {{$worker->email}}</div>              
            <div><strong>Age:</strong> {{$worker->age}}</div>       
            <div><strong>Description:</strong> {{$worker->description}}</div> <!-- Исправлено на Description -->
            <div><strong>Is married:</strong> {{ $worker->is_married ? 'Yes' : 'No' }}</div> <!-- Читаемый вывод -->
            
            <div>
                <a href="{{ route('worker.show', ['worker' => $worker->id]) }}">Показать сотрудника</a>
                <div>
                   <a href="{{ route('worker.edit', ['worker' => $worker->id]) }}">Редактировать</a>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>
