@extends('layout.app')

@section('titulo', 'LaraDex - Listado')

@section('contenido')

  @foreach($trainers as $trainer)
    <p>{{$trainer->name}}</p>
  @endforeach

@endsection