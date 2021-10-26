@extends('layout.plantilla')
@section('titulo', 'update')
@section('contenido')
    <h1>Editar Persona </h1>
    <br>
    <form action="{{route('datos.update', $datos)}}" method="post">

        @csrf
        @method('put')
        <label >
            Nombre Completo:
            <input type="text" name="nombre_completo" value="{{$datos->nombre_completo}}">
        </label>
        <br>
        <label >
           Telefono:
            <input type="text" name="telefono" value="{{$datos->telefono}}">
        </label>
        <br>
        <label >
            email:
            <input type="email" name="email" value="{{$datos->email}}">
        </label>
        <br>

        <button type="submit">Actualizar formulario</button>

    </form>


    @endsection
