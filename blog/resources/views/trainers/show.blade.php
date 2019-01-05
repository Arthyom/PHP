@extends('layout.app')

@section('titulo', 'Revizar Entrenador')
    
@section('contenido')
<div class="text-center" style="margin-top: 20px">
<img style="margin-top: 10px; width:  100px; height: 100px; background: #EEEE" 
src="/images/{{$trainer->avatar}}" 
class="rounded-circle mx-auto">
<h5 class="">{{$trainer->name}}</h5>
  <p class="">Some quick example text to build
     on the card title and make up the bulk of the card's content.</p>
  <a href="{{$trainer->id}}/edit" class="btn btn-primary">Editar entrenador</a>
</div>
@endsection
