<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics Details</title>
</head>

<body>
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="">
    <p>{{ $comic->description }}</p>
</body>

</html>
