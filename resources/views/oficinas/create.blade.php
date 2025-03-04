<div class="contentErorres">
    @foreach ($errors->all() as $error )
        <li style="color:red;">{{$error}}</li>
        <br>
    @endforeach
</div>
<form action="{{ route('oficinas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required>

        <button type="submit">Guardar</button>
</form>