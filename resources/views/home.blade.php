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
<a href="tour/add">add tour</a>
<div>
    <table border="1">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tours as $tour)
            <tr>
                <td>{{$tour->id}}</td>
                <td>{{$tour->title}}</td>
                <td>{{$tour->description}}</td>
                <td style="color: deepskyblue">
                    <form action="/tour/{{$tour->id}}/edit" method="get">
                        @csrf
                        <button>update</button>
                    </form>
                </td>
                <td style="color: deepskyblue; font-size: 20px;text-align: center">-</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
