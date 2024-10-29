<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();

        return view('tareas.index', compact('tareas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|digits:8',
            'title' => 'required|max:100',
            'description' => 'nullable|max:500',
            'expiration' => 'date',
            'status' => 'required|max:20',
        ]);

        Tarea::create($request->all());

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea creada con éxtio.');

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'dni' => 'required|digits:8',
            'title' => 'required|max:100',
            'description' => 'nullable|max:500',
            'expiration' => 'date',
            'status' => 'required|max:20',
        ]);

        $tarea = Tarea::find($id);
        $tarea->update($request->all());

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $tarea = Tarea::find($id);
        $tarea->delete();

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea eliminada exitosamente');
    }



    public function create()
    {
        return view('tareas.create');
    }

    public function show($id)
    {
        $tarea = Tarea::find($id);

        return view('tareas.show', compact('tarea'));
    }

    public function edit($id)
    {
        $tarea = Tarea::find($id);

        return view('tareas.edit', compact('tarea'));
    }
}
