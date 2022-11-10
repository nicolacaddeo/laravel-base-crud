<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista dei Comics</title>
    <style>
        a {
            color: inherit;
        }
    </style>
</head>

<body>
    <ul>
        @foreach ($comic as $element)
            <li>
                <a href="{{ route('comics.show', $element->id) }}">{{ $element->title }}</a>
            </li>
            <form action="{{ route('comics.destroy', $element->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete Comic">
            </form>
        @endforeach

    </ul>
    <div>
        <button>
            <!--  bottone che restituisce il form per l'aggiunta di un nuovo fumetto -->
            <a href="{{ route('comics.create') }}">Add Comic</a>
        </button>
    </div>
</body>

</html>
