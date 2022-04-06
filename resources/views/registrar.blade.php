@extends('layouts.master')
@section('title', 'Registrar producto')

@section('header')
    @parent
    <h2> Registrar nuevo producto <h2>
@stop 

@section('content')
<hr>
<div class="container">
    <div class="row">
        <div class="col col-lg-4">
            <form action="{{ url('guardarFormulario') }}" method="post">
                <div class="mb-3">
                    <label for="id" class="form-label">Id: </label>
                    <input type="text" class="form-control" name="id">
                </div>
                <div class="mb-3">
                    <label for="codigoUnico" class="form-label">Código único:</label>
                    <input type="text" class="form-control" name="codigoUnico">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria:</label>
                    <input type="text" class="form-control" name="categoria">
                </div>
                <div class="mb-3">
                    <label for="sucursal" class="form-label">Sucursal:</label>
                    <input type="text" class="form-control" name="sucursal">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion">
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad:</label>
                    <input type="text" class="form-control" name="cantidad">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="text" class="form-control" name="precio">
                </div>                
                <button type="submit" class="btn btn-primary">Agregar producto</button>
                @if($errors->any())
                <hr>
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif    
            </form>
        </div>
    </div>
</div>
<hr>
@stop

@section('footer')
    <h4></h4>
    @parent
@stop

<hr>
