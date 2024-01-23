<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')
    <article>
        h1>Nuevo libro</h1>
        @csrf
        <form action="{{ route('libros.store') }}" method="POST">
        <div class="row mb-3">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo"id="titulo">
            </div>

            <div class="form-group">
                <label for="editorial">Editorial:</label>
                <input type="text" class="form-control" name="editorial"id="
                editorial">
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" class="form-control" name="precio"id="precio">
            </div>


            <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
        </div>
        </form>
    </article>
</body>
</html>