@extends('layout.app')

@section('titulo', 'Editar Entrenador')

@section('contenido')

    <form class="form-group" action="/trainers/{{$trainer->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
    <label >Nombre</label>
    <input type="text" name="name" value="{{$trainer->name}}" class="form-control">
    <label >Avatar</label>
    <input type="file" name="avatar" class="form-control">
    <input type="submit" value="Agregar" class="btn btn-primary">
    </div>

    
    </form>
@endsection