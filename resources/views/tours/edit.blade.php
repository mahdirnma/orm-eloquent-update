<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/tour/update" method="post">
    @csrf
    @method("put")
    <input type="hidden" name="id" value="{{$tour->id}}">
    <div>
        <label for="title">title:</label>
        <input type="text" id="title" name="title" value="{{$tour->title}}">
    </div>
    <div>
        <label for="description">description:</label>
        <textarea id="description" name="description">{{$tour->description}}</textarea>
    </div>
    <div>
        <button>edit tour</button>
    </div>
</form>
</body>
</html>
