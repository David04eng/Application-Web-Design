<h1>Lista de Superhéroes</h1>

<a href="{{ route('superheroes.create') }}">Crear nuevo</a>

@foreach($superheroes as $hero)
    <div>
        <h3>{{ $hero->hero_name }}</h3>
        <p>{{ $hero->real_name }}</p>

        <a href="{{ route('superheroes.show', $hero->id) }}">Ver</a>
        <a href="{{ route('superheroes.edit', $hero->id) }}">Editar</a>

        <form action="{{ route('superheroes.destroy', $hero->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
@endforeach
