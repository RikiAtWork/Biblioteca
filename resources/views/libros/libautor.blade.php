<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar libros y autores</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')
    
    <div class="container">
        <h1>Listado de libros con su Autor</h1>
        <ul>
            @forelse ($libros as $libro)
                <li>
                    <a href="">
                        {{$libro->titulo}} ({{$libro->autor->nombre}})
                    </a>
                </li>
            @empty
                <li>No se encontraron libros</li>
            @endforelse
        </ul>
        {{$libros->links()}}

    </div>


</body>
</html>