@extends('layouts.master')
@section('title', 'Actualizar producto')

@section('header')

    <h2> Actualizar producto <h2>
@stop 

@section('content')
<hr>

<div class="container">
    <div class="row">
        <div class="col col-lg-4">
            <form action="{{ url('actualizarFormulario') }}" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="text" class="form-control" name="precio">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
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

@stop

<hr>