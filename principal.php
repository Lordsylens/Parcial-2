<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="styles" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Bienvenido a la Biblioteca</h1>
        <img src="{{ asset('img/library.jpg') }}" alt="Biblioteca">
    </header>
    <main>
        <p>¡Encuentra y disfruta de una amplia selección de libros!</p>
        <a href="{{ route('libros.index') }}" class="btn">Ver libros disponibles</a>
    </main>
</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>
    <link rel="style" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Listado de Libros</h1>
        <img src="{{ asset('img/books.jpg') }}" alt="Libros">
    </header>
    <main>
        <ul class="libros-lista">
            @foreach($libros as $libro)
            <li>
                <h2>{{ $libro->titulo }}</h2>
                <p>Autor: {{ $libro->autor }}</p>
                <p>{{ $libro->disponible ? 'Disponible' : 'No disponible' }}</p>
                <a href="{{ route('libros.show', $libro->id) }}" class="btn">Ver detalles</a>
            </li>
            @endforeach
        </ul>
    </main>
</body>
</html>





