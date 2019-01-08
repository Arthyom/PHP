@extends('layout.app')

@section('titulo', 'Revizar Entrenador')
    
@section('contenido')
<div class="text-center" style="margin-top: 20px">
<img style="margin-top: 10px; width:  100px; height: 100px; background: #EEEE" 
src="/images/{{$trainer->avatar}}" 
class="rounded-circle mx-auto">
<h5 class="">{{$trainer->name}}</h5>
<p class="">{{$trainer->description}}</p>
  <a href="{{$trainer->slug}}/edit" class="btn btn-primary">Editar entrenador</a>
  {!!Form::open(['route'=>['trainers.destroy',$trainer->slug], 'method'=>'delete'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
  {!!Form::close()!!}
</div>
@endsection
