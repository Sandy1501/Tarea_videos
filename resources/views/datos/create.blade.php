@extends('layout.plantilla')
@section('titulo', 'create')
@section('contenido')
    <h1>Nuevos Usuarios </h1>
    <br>
    <form action="{{route('datos.store')}}" method="post">

        @csrf

        <label >
            Nombre Completo:
            <input type="text" name="nombre_completo">
        </label>
        <br>
        <label >
            Telefono:
            <input type="text" name="telefono">
        </label>
        <br>
        <label >
            Email:
            <input type="email" name="email">
        </label>
        <br>

        <button type="submit">Enviar formulario</button>

    </form>


    @endsection
