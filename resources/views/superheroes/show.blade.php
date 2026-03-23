<h1>{{ $superhero->hero_name }}</h1>

<p>Nombre real: {{ $superhero->real_name }}</p>
<img src="{{ $superhero->photo }}" width="200">
<p>{{ $superhero->description }}</p>

<a href="{{ route('superheroes.index') }}">Volver</a>