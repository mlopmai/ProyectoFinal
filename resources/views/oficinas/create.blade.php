<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/templateHeaderFooter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/formulario.css') }}">
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
        <div class="contentErorres">
            @foreach ($errors->all() as $error)
                <li style="color:red;">{{$error}}</li>
                <br>
            @endforeach
        </div>

        <h1>Crear Empresa</h1>

        <form action="{{ route('oficinas.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" required>

            <button type="submit">Guardar</button>
        </form>
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