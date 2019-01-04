@extends('layout.app')

@section('titulo', 'LaraDex - Listado')

@section('contenido')

  
<div class="row">
  @foreach($trainers as $trainer)
  <div class="col-sm">
    <img src="..." class="card-img-top" alt="...">
    <div class="card text-center" style="width: 18rem;">
      
      <h3 class="card-title">{{$trainer->name}}</h3>
      <div class="card-body">
        <p class="card-text">Some quick example text to build
           on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Ver entrenador</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection