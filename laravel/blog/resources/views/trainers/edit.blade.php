@extends('layout.app')

@section('titulo', 'Editar Entrenador')

@section('contenido')
@include('common.validate')
{!! Form::model($trainer, ['route'=>['trainers.update',$trainer], 'method'=>'put', 'files'=>true]) !!}
    @include('trainers.addEdit')
    {!! Form::submit('Aceptar', ['class'=>'btn btn-primary']) !!}
{!! Form::close()!!}

@endsection