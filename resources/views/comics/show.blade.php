<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $comic->title }}</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('shared.header')
    <main>
        <div class="container py-5">
            <h1>{{$comic->title}}</h1>
            <p>{{$comic->description}}</p>
            <p><strong>Data:</strong> {{$comic->sale_date}}</p>
            <p><strong>Tipo:</strong> {{$comic->type}}</p>
            <p><strong>Serie:</strong> {{$comic->series}}</p>
            <p><strong>Prezzo:</strong> &#36;{{$comic->price}}</p>

            <div class="d-flex justify-content-evenly">
                <div>
                    <p><strong>Scrittori:</strong></p>
                    <ul>
                        @if (!empty($writers))
                        @foreach ($writers as $writer)
                        <li>{{ $writer }}</li>
                        @endforeach
                        @else
                        <li>No writers available</li>
                        @endif
                    </ul>
                </div>

                <div>
                    <p><strong>Artisti:</strong></p>
                    <ul>
                        @if (!empty($artists))
                        @foreach ($artists as $artist)
                        <li>{{ $artist }}</li>
                        @endforeach
                        @else
                        <li>No artists available</li>
                        @endif
                    </ul>
                </div>
                <div>
                    <img class="h-300" src="{{$comic->thumbnail}}" alt="{{$comic->title}}">
                </div>
            </div>

        </div>

    </main>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $comic->title }}</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('shared.header')
    <main>
        <div class="container py-5">
            <h1>{{ $comic->title }}</h1>
            <p>{{ $comic->description }}</p>
            <p><strong>Data:</strong> {{ $comic->sale_date }}</p>
            <p><strong>Tipo:</strong> {{ $comic->type }}</p>
            <p><strong>Serie:</strong> {{ $comic->series }}</p>
            <p><strong>Prezzo:</strong> &#36;{{ $comic->price }}</p>

            <div class="d-flex justify-content-evenly">
                <div>
                    <p><strong>Scrittori:</strong></p>
                    <ul>
                        @if (!empty($writers))
                        @foreach ($writers as $writer)
                        <li>{{ $writer }}</li>
                        @endforeach
                        @else
                        <li>No writers available</li>
                        @endif
                    </ul>
                </div>
                <div>
                    <p><strong>Artisti:</strong></p>
                    <ul>
                        @if (!empty($artists))
                        @foreach ($artists as $artist)
                        <li>{{ $artist }}</li>
                        @endforeach
                        @else
                        <li>No artists available</li>
                        @endif
                    </ul>
                </div>
                <div>
                    <img class="h-300" src="{{ $comic->thumbnail }}" alt="{{ $comic->title }}">
                </div>
                <br>
            </div>
            <a href="{{route('comics.index')}}"><button type="button" class="btn btn-info">Torna a home</button></a>
        </div>
    </main>
</body>

</html>