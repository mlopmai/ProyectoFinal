<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/templateHeaderFooter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}">
</head>

<body>
    <header class="header-outer">
        <div class="header-inner responsive-wrapper">
            <div class="header-logo">
                <img src="https://assets.codepen.io/285131/acme-2.svg" />
            </div>
            <nav class="header-navigation">
                <a href="#"></a>
                <a href="{{ route('oficinas.create') }}">Añadir nueva oficina</a>
                <a href="#"></a>
                <button>Menu</button>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="responsive-wrapper">
            <h1>Oficinas</h1>
            <ul class="empresas-lista">
                @foreach ($oficinas as $oficina)
                    <li class="empresa">
                        <a href="{{ route('oficinas.show', $oficina->id) }}">{{ $oficina->nombre }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
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