<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('shared.header')

    <div class="container py-5">

        <h1>Inserisci nuovo comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="number" class="form-control" name="price">
            </div>

            <div class="mb-3">
                <label class="form-label">Tipos</label>
                <select name="type" class="form-select">
                    <option>comic book</option>
                    <option>graphic novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Immagini</label>
                <input type="text" class="form-control" name="thumbnail">
            </div>
            <div class="mb-3">
                <label class="form-label">Artisti (mettere le virgole se sono più di una persona)</label>
                <input type="text" class="form-control" name="artists">
            </div>
            <div class="mb-3">
                <label class="form-label">Scrittori (mettere le virgole se sono più di una persona)</label>
                <input type="text" class="form-control" name="writers">
            </div>
            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="date" class="form-control" name="sale_date">
            </div>
            <button class="btn btn-primary">Crea Comic</button>
        </form>
        <br>
        <a class="d-block" href="{{route('comics.index')}}"><button type="button" class="btn btn-info">Torna a home</button></a>

    </div>
</body>

</html>