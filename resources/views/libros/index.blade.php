<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')
    <article>
        <h1>Listado de Libros</h1>
            <ul>
            @forelse ($libros as $libro)
                <li><a href="">{{$libro["titulo"]}}({{$libro["autor"]}})</a></li>
            @empty
            <li><a href="">No hay</a></li>
            @endforelse
            </ul>
        </div>
    </article>
</body>
</html>