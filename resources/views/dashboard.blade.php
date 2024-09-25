<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

@foreach($users as $user)
    @if($user["vek"] < 18)
        <h1>{{ $user["name"] }} ma {{ $user["vek"] }} rokov, takze bohuzial nemoze pit :( </h1>
    @endif

    @if($user["vek"] >= 18)
        <h1>{{ $user["name"] }} ma {{ $user["vek"] }} rokov, takze moze pit :) </h1>
        
    @endif
@endforeach



</body>
</html>
