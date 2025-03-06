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
    <h2>Editando {{ $oficinas->nombre }}</h2>
    <div class="contentErorres">
        @foreach ($errors->all() as $error)
            <li style="color:red;">{{$error}}</li>
            <br>
        @endforeach
    </div>
    <form method="POST" action="{{route('oficinas.update', $oficinas->id)}}">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{old("nombre", $oficinas->nombre)}}" placeholder="nombre">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" value="{{old('direccion', $oficinas->direccion)}}" placeholder="direccion">
        <input type="submit" value="Enviar">
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