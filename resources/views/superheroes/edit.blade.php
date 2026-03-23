<h1>Editar Superhéroe</h1>

<form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="real_name" value="{{ $superhero->real_name }}">
    <input type="text" name="hero_name" value="{{ $superhero->hero_name }}">
    <input type="text" name="photo" value="{{ $superhero->photo }}">
    <textarea name="description">{{ $superhero->description }}</textarea>

    <button type="submit">Actualizar</button>
</form>