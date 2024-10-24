<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    @foreach($workers as $worker)
        <div>
            <div>Name:{{$worker->name}}</div>            
            <div>Surname:{{$worker->surname}}</div>              
            <div>Email:{{$worker->email}}</div>              
            <div>Age:{{$worker->age}}</div>       
            <div>Discription:{{$worker->discription}}</div>         
            <div>is married:{{$worker->is_married}}</div>             
            <div>
                <a href="{{ route('worker.show', ['worker' => $worker->id]) }}">Показать сотрудника</a>
            </div>
        </div>
        <hr>
    @endforeach
</div>
    
</body>
</html>