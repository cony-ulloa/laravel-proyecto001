@extends('layouts.master')
@section('title', 'Listar productos')

@section('header')
    @parent
    <h2> Listar productos <h2>
@stop 

@section('content')

<table border="1">
    <tr>
        <td>Id</td>
        <td>Codigo Unico</td>
        <td>Nombre</td>
        <td>Categoria</td>
        <td>Sucursal</td>
        <td>Descripcion</td>
        <td>Cantidad</td>
        <td>Precio</td>
    </tr>
    @foreach($productos as $producto)
    <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->codigoUnico}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->categoria}}</td>
        <td>{{$producto->sucursal}}</td>
        <td>{{$producto->descripcion}}</td>
        <td>{{$producto->cantidad}}</td>
        <td>{{$producto->precio}}</td>
    </tr>
    @endforeach
@stop    