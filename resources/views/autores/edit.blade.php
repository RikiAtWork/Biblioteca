<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <h1>Actualizar Autor</h1>
        <form action="{{ route('autores.update', $autor['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="titulo">Nuevo Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $autor['nombre'] }}" required>    
                </div>

                <div class="col-md-4 mb-3">
                    <label for="titulo">Nueva Nacimiento:</label>
                    <input type="text" class="form-control" name="nacimiento" id="nacimiento" value="{{ $autor['nacimiento'] }}" required>    
                </div>

                <div class="col-md-4 mb-3"></div>
                                
                <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-dark btn-block">Actualizar</button>
                    <a class="btn btn-primary" href="{{route('autores.index')}}" role="button">Volver</a>
                </div>
            </div>

            
            
        </form>
    </div>

</body>
</html>