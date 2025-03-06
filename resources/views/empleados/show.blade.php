<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/templateHeaderFooter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/showOficinas.css') }}">
</head>

<body>
    <header class="header-outer">
        <div class="header-inner responsive-wrapper">
            <div class="header-logo">
                <img src="https://assets.codepen.io/285131/acme-2.svg" />
            </div>
            <nav class="header-navigation">
                <a href="#"></a>
                <a href="{{ route('oficinas.index') }}" class="btn btn-primary">Volver al inicio</a>
                <a href="#"></a>
            </nav>
        </div>
    </header>

    <main>
        <h1>Detalles de empleado</h1>
        <h2>Nombre de el empleado:</h2>
        <h3>{{ $empleado->nombre }}</h3>
        <h2>Apellidos:</h2>
        <h3>{{ $empleado->primer_apellido . ' ' . $empleado->segundo_apellido }}</h3>
        <h2>Rol:</h2>
        <h3>{{ $empleado->rol }}</h3>
        <h2>Fecha de nacimiento:</h2>
        <h3>{{ $empleado->fecha_nacimiento }}</h3>
        <h2>Dni:</h2>
        <h3>{{ $empleado->dni }}</h3>
        <h2>Email:</h2>
        <h3>{{ $empleado->email }}</h3>
    </main>

    <footer>
    <footer class="footer-outer">
        <div class="footer-inner responsive-wrapper">
            <div class="footer-logo">
                <img src="https://assets.codepen.io/285131/acme-2.svg" />
            </div>
        </div>
    </footer>
</body>

</html>