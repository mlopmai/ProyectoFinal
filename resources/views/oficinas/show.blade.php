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
<h3>{{ $oficina->nombre }} <a href='{{ route('oficinas.edit', $oficina->id) }}'><button>Editar</button></a></h3>
<h2>Empleados:</h2>
@foreach ($empleados as $empleado)
    <p>{{ $empleado->nombre }} <a href="{{ route('empleados.edit', ['oficina' => $oficina->id, 'empleado' => $empleado->id]) }}"><button>Editar</button></a> </p>
@endforeach
<a href="{{ route( 'empleados.create', $oficina->id) }}"><button>Añadir nuevo  empleado</button></a>
</body>
</html>