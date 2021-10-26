@extends('layout.plantilla')
@section('titulo', 'Datos ' . $datos->nombre)
@section('contenido')
    <h1>Bienvenido {{$datos->nombre_completo}}</h1>
    <a href="{{route('datos.index')}}">Volver a usuarios</a>
    <br>
    <a href="{{route('datos.edit', $datos)}}">Editar curso</a>
    <p></p>
    <p><strong>Nombre Completo: </strong>{{$datos->nombre_completo}}</p>
    <p><strong>Telefono: </strong>{{$datos->telefono}}</p>
    <p><strong>email: </strong>{{$datos->email}}</p>

    @endsection
