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
        <h2>Nombre de Oficina:</h2>
        <h3>{{ $oficina->nombre }} <a href='{{ route('oficinas.edit', $oficina->id) }}'><button>Editar</button></a></h3>
        <h2>Dirección:</h2>
        <h3>{{ $oficina->direccion }}</h3>
        <h2>Empleados:</h2>
        @foreach ($empleados as $empleado)
            <a
                href="{{ route('empleados.show', ['oficina' => $oficina->id, 'empleado' => $empleado->id]) }}">{{ $empleado->nombre }}</a>
            <a
                href="{{ route('empleados.edit', ['oficina' => $oficina->id, 'empleado' => $empleado->id]) }}"><button>Editar</button></a>
            <br><br>
        @endforeach
        <a href="{{ route('empleados.create', $oficina->id) }}"><button>Añadir nuevo empleado</button></a>
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