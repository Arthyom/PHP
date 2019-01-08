@extends('layout.app')
<h1>Olis</h1>

@section('titulo', 'LaraDex - Listado')

@section('contenido')

@include('common.okAdd')

<div class="row">
  @foreach($trainers as $trainer)
  <div class="col-sm" >
    <div class="card text-center" style="width: 18rem; margin-top: 20px">
      <img style="margin-top: 10px; width:  100px; height: 100px; background: #EEEE" 
      src="/images/{{$trainer->avatar}}" 
      class="card-img-top rounded-circle mx-auto" alt="...">
      <h5 class="card-title">{{$trainer->name}}</h5>
      <div class="card-body">
      <p class="card-text">{{$trainer->description}}</p>
        <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver entrenador</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection
