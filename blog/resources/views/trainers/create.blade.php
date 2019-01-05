@extends('layout.app')

@section('titulo', 'Entrenadores')


@section('contenido')
{!! Form::open(['route'=>'trainers.store', 'method'=>'post', 'files'=>true]) !!}
    @include('trainers.addEdit')
    {!! Form::submit('Agregar', ['class'=>'btn btn-primary']) !!}
{!! Form::close()!!}
@endsection