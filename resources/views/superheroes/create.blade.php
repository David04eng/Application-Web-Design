<h1>Crear Superhéroe</h1>

<form action="{{ route('superheroes.store') }}" method="POST">
    @csrf

    <input type="text" name="real_name" placeholder="Nombre real">
    <input type="text" name="hero_name" placeholder="Nombre héroe">
    <input type="text" name="photo" placeholder="URL de imagen">
    <textarea name="description" placeholder="Descripción"></textarea>

    <button type="submit">Guardar</button>
</form>