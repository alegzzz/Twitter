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
    <h1> Profile </h1>

    @foreach($users as $user)
        @if($user["vek"] < 18)
            <h3>{{$user["name"]}} ma {{$user["vek"]}} rokov a nemoze teda pit</h3>
        @else
            <h3>{{$user["name"]}} ma {{$user["vek"]}} rokov a moze teda pit</h3>
        @endif
    @endforeach
</body>
</html>
