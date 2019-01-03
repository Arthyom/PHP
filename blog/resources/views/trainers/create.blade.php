@extends('layout.app')

@section('titulo', 'Entrenadores')


@section('contenido')

    <form class="form-group" action="/trainers" method="post">
    @csrf
    <div class="form-group">
    <label >Nombre</label>
    <input type="text" name="nombre" class="form-control">
    <input type="submit" value="Agregar" class="btn btn-primary">
    </div>
    </form>
@endsection