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
    @foreach ($errors->all() as $error )
        <li style="color:red;">{{$error}}</li>
        <br>
    @endforeach
</div>
<form action="{{ route('empleados.store', parameters: $oficina) }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required >

        <label for="primer_apellido">Primer apellido:</label>
        <input type="text" name="primer_apellido" required>

        <label for="segundo_apellido">Segundo apellido:</label>
        <input type="text" name="segundo_apellido">

        <label for="rol">Rol:</label>
        <input type="text" name="rol">

        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required>

        <label for="dni">DNI:</label>
        <input type="text" name="dni" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <input type="hidden" name="oficina_id" value="{{ $oficina->id }}">

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