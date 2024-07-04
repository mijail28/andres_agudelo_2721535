@extends('layouts.app')

@section('titulo', 'Crear curso')

@section('contenido')

<br>
    <h3>Crear un nuevo curso</h3>
    <form action="/cursos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nombrecurso" class="form-label">Nombre del curso</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Duracion del curso</label>
            <input type="number" class="form-control" id="duracion" name="duracion">
        </div>
        <br>
        <div class="mb-3">
            <label for="imagen" class="form-label">Cargar imagen</label>
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>

@endsection
