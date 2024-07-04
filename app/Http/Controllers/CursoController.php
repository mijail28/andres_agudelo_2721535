<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Curso::all();
        return view('cursos.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Curso();
        $course->nombre = $request->input('nombre');
        $course->duracion = $request->input('duracion');
        if($request->hasFile('imagen')){
            $course->imagen = $request->file('imagen')->store('public/cursos');
        }
        $course->save();
        return 'Guardado con éxito';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Curso::find($id);
        return view('cursos.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
