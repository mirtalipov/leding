<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Create page
    <hr>
        <div>
            <form action="{{route('worker.store')}}" method="Post">
                @csrf
                <div style="margin-bottom: 15px;"><input type="text" name="name"
                placeholder="name"></div>
                <div style="margin-bottom: 15px;"><input type="text" name="surname"
                placeholder="surname"></div>    
                <div style="margin-bottom: 15px;"><input type="email" name="email"
                placeholder="email"></div>
                <div style="margin-bottom: 15px;"><input type="number" name="age"
                placeholder="age"></div>
                <div style="margin-bottom: 15px;"><textarea name="description" placeholder="description"></textarea></div>
                <div style="margin-bottom: 15px;">
                    <input id="isMarried"type="checkbox" name="is_married">
                    <label for="isMarried">Is married</label>
                </div>
                <div style="margin-bottom: 15px;"><input type="submit" value="Добавить"></div>
            </form>
        </div>
        
</body>
</html>