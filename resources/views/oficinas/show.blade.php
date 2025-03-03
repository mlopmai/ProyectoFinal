<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{ route('oficinas.index') }}" class="btn btn-primary">Volver al inicio</a>

<h2>Nombre de Empresa:</h2>
<h3>{{ $oficinas->nombre }} <a href='{{ route('oficinas.edit', $oficinas->id) }}'><button>Editar</button></a></h3>
<h2>Empleados:</h2>
@foreach ($empleados as $empleado)
<p>{{ $empleado->nombre }} <a><button>Editar</button></a> </p> 
@endforeach
</body>
</html>