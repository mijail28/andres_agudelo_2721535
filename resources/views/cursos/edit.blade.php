@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')
<br>
<h3 class="text-center">Editar información del Curso</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/cursos/{{$course->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombrecurso">Modifique el Nombre del Curso</label>
        <input name="nombre" id="nombrecurso" value="{{$course->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="duracion">Modifique la Duración del Curso</label> {{--uso el value--}}
        <input name="duracion" id="duracion" value="{{$course->duracion}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection
