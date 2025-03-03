<a href="{{ route('empleados.create', $oficina) }}" class="btn btn-primary">Añadir empleado</a>

    <ul>
        @foreach ($empleados as $empleado)
            <li>{{ $empleado->nombre }} - {{ $empleado->dni }}</li>
        @endforeach
    </ul>