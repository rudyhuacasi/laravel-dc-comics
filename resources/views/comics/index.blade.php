<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel template</title>
    @vite('resources/js/app.js')
</head>

<body>

    @include('shared.header')


    <main>
        <div>
            <img class="fondo" src="https://images2.alphacoders.com/131/1310578.jpg" alt="hero">
        </div>
        <div class=" bg-dark">
            <div class="container py-4">
                <h2><strong class="text-bg-primary p-2">SERIES</strong></h2>
                <div class="py-4 text-center">
                    <div class="row gap-9">
                        @foreach ($comics as $comic)
                        <div class="col-2">
                            <a href="{{route('comics.show', $comic->id)}}"><img class="w-100 h-300" src="{{$comic->thumbnail}}" alt="image-comics"></a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <a href="{{route('comics.create')}}">Crea una nueva pasta</a>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <h1>laravel template</h1>

    <img src="{{ Vite::asset('resources/img/kaneki.jpg') }}" alt="paperella lavarel template">
</body>

</html>