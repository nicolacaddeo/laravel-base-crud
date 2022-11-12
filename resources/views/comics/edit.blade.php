<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Comic</title>
</head>

<body>
    <!-- La rotta 'comics.update' deve essere richiamata solo con PUT o PATCH -->
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf

        {{-- aggiungo il nuovo metodo per richiamare il controller corretto --}}
        @method('PUT')

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ $comic->title }}">
        </div>

        <div>
            <label for="description">Description:</label>
            <input type="text" name="description" value="{{ $comic->description }}">
        </div>

        <div>
            <label for="thumb">Thumb URL:</label>
            <input type="text" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" value="{{ $comic->price }}">
        </div>

        <div>
            <label for="series">Series:</label>
            <input type="text" name="series" value="{{ $comic->series }}">
        </div>

        <div>
            <label for="sale_date">Sale date:</label>
            <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div>
            <label for="type">Type:</label>
            <input type="text" name="type" value="{{ $comic->type }}">
        </div>

        <input type="submit" value="Update Comic">
    </form>
</body>

</html>
