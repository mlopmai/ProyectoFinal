<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="contentErorres">
        @foreach ($errors->all() as $error)
            <li style="color:red;">{{$error}}</li>
            <br>
        @endforeach
    </div>
    {{ $oficinaId = $empleado->oficina_id }}
<form action="{{ route('empleados.update', ['oficina' => $oficinaId, 'empleado' => $empleado]) }}" method="POST">        
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{old("nombre", $empleado->nombre)}}" placeholder="nombre" required >

        <label for="primer_apellido">Primer apellido:</label>
        <input type="text" name="primer_apellido" value="{{old("primer_apellido", $empleado->primer_apellido)}}" placeholder="primer_apellido" required>

        <label for="segundo_apellido">Segundo apellido:</label>
        <input type="text" name="segundo_apellido" value="{{old("segundo_apellido", $empleado->segundo_apellido)}}" placeholder="segundo_apellido">

        <label for="rol">Rol:</label>
        <input type="text" name="rol" value="{{old("rol", $empleado->rol)}}" placeholder="rol">

        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="{{old("fecha_nacimiento", $empleado->fecha_nacimiento)}}" placeholder="fecha_nacimiento" required>

        <label for="dni">DNI:</label>
        <input type="text" name="dni" value="{{old("dni", $empleado->dni)}}" placeholder="dni" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{old("email", $empleado->email)}}" placeholder="email" required>

        <input type="hidden" name="oficina_id" value="{{ $oficinaId }}">

        <button type="submit">Guardar</button>
    </form>
</body>

</html>