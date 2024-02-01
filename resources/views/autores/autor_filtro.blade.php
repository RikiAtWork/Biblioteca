<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro por autor</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>  
    @include('partials.nav')
    <div class="container">
        <form action="{{ route('autores.filtro') }}" method="POST">
            @csrf
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor:</label>
                    <select class="form-select" name="autor" id="autor" aria-label="Selecciona un autor/a">
                        @foreach ($autores as $autor)
                            <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Enviar</button>
                <a href="{{ route('libros.libautor') }}" class="btn btn-primary">Volver</a>
            </div>
        </form>
    </div>
</body> 
</html>