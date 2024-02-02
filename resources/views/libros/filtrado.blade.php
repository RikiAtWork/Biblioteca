<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros del Autor</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')
    <div class="content">
        <h1>Listado de libros del Autor... {{$autor->nombre}}</h1>
        <ul>
        @foreach ($libros as $libro)
            <li>{{$libro->titulo}} {{$libro->editorial}} {{$libro->precio}}</li>
        @endforeach
        <a href="{{ route('autores_filtro') }}">Volver</a>
        </ul>
    </div>
  

</body>
</html>