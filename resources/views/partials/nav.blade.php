<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="{{route('principal')}}">Home</a>
            <a class="nav-link" href="{{route('libros.index')}}">Listado libro</a>
            <a class="nav-link" href="{{route('autores.index')}}">Listado autor</a>
            <a class="nav-link" href="{{route('libros.libautor')}}">Listado libros/autores</a>
            <a class="nav-link" href="">Listado Socios</a>
            <a class="nav-link" href="">Prestamo de libros</a>
            <a class="nav-link" href="{{route('autores_filtro')}}">Filtro de libros</a>
        </div>
        </div>
    </div>
</nav>