<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Comic!</title>

    <style>
        div {
            padding: 1rem 0;
        }
    </style>
</head>

<body>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title">
        </div>

        <div>
            <label for="description">Description:</label>
            <input type="text" name="description">
        </div>

        <div>
            <label for="thumb">Thumb URL:</label>
            <input type="text" name="thumb">
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" name="price">
        </div>

        <div>
            <label for="series">Series:</label>
            <input type="text" name="series">
        </div>

        <div>
            <label for="sale_date">Sale date:</label>
            <input type="date" name="sale_date">
        </div>

        <div>
            <label for="type">Type:</label>
            <input type="text" name="type">
        </div>

        <input type="submit" value="Aggiungi">
    </form>
</body>

</html>
