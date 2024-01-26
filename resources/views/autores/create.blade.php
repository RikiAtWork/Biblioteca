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
    <div class="container">
        <h1>Nuevo Autor</h1>
        <form action="{{ route('autores.store') }}" method="POST" class="mb-3">
        @csrf
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="nacimiento" class="form-label">Nacimiento:</label>
                    <input type="text" class="form-control" name="nacimiento" id="nacimiento" placeholder="Ejemplo: 1990" required>
                </div>

                <div class="col-md-4 mb-3"></div>


                <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-dark btn-block">Enviar</button>

                    <a class="btn btn-primary" href="{{route('autores.index')}}" role="button">Volver</a>
                </div>
                
            </div>
        </form>
    </div>

</body>
</html>