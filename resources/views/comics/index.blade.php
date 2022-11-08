<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista dei Comics</title>
</head>

<body>
    <ul>
        @foreach ($comic as $element)
            <li>
                <a href="{{ route('comics.show', $element->id) }}">{{ $element->title }}</a>
            </li>
        @endforeach

    </ul>
</body>

</html>
