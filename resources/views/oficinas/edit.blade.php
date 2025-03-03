<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Editando {{ $oficinas->nombre }}</h2>
    <form method="POST" action="{{route('oficinas.update', $oficinas->id)}}">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{old("nombre", $oficinas->nombre)}}" placeholder="nombre">
        <br><br>
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" value="{{old('direccion', $oficinas->direccion)}}" placeholder="direccion">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>