<form action="{{ route('empleados.store', $oficina) }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

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

        <button type="submit">Guardar</button>
    </form>