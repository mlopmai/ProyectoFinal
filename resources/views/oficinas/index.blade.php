
    <a href="{{ route('oficinas.create') }}" class="btn btn-primary">Añadir oficina</a>

    <ul>
        @foreach ($oficinas as $oficina)
            <li><a href="{{ route('oficinas.show', $oficina->id) }}">{{ $oficina->nombre }}</a></li>
        @endforeach
    </ul>
    