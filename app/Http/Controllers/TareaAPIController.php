<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaAPIController extends Controller
{
    public function index()
    {
        return response()->json(["ok"=>true, "tareas"=>Tarea::all()], 200);
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

        $tarea = Tarea::create($request->all());

        return response()->json(["ok"=>true, "tarea"=>$tarea], 201);

    }

    public function update(Request $request)
    {
        $request->validate([
            'dni' => 'required|digits:8',
            'title' => 'required|max:100',
            'description' => 'nullable|max:500',
            'expiration' => 'date',
            'status' => 'required|max:20',
        ]);

        $tarea = Tarea::find($request->id);
        $tarea->update($request->all());

        return response()->json(["ok"=>true, "tarea"=>$tarea], 200);    
    }

    public function destroy($request)
    {
        $tarea = Tarea::find($request->id);
        $tarea->delete();

        return response()->json(["ok"=>true], 200);
    }

    public function show($id)
    {
        $tarea = Tarea::find($id);

        return response()->json(["ok"=>true, "tarea"=>$tarea], 200);
    }
}
