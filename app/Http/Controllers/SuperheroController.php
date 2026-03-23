<?php

namespace App\Http\Controllers;

use App\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    // 1. Listar todos los superhéroes
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    // 2. Mostrar el formulario de creación
    public function create()
    {
        return view('superheroes.create');
    }

    // 3. Guardar el nuevo superhéroe en la base de datos
    public function store(Request $request)
    {
        $data = $request->validate([
            'real_name' => 'required',
            'hero_name' => 'required',
            'photo'     => 'required|url',
            'description' => 'required',
        ]);

        Superhero::create($data);

        return redirect()->route('superheroes.index');
    }

    // 4. Mostrar un superhéroe específico
    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    // 5. Mostrar el formulario de edición
    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    // 6. Actualizar la información
    public function update(Request $request, Superhero $superhero)
    {
        $data = $request->validate([
            'real_name' => 'required',
            'hero_name' => 'required',
            'photo'     => 'required|url',
            'description' => 'required',
        ]);

        $superhero->update($data);

        return redirect()->route('superheroes.index');
    }

    // 7. Eliminar al superhéroe
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index');
    }
}