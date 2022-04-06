@extends('layouts.master')
@section('title', 'Consultar producto')

@section('header')
    @parent
    <h2> Consultar producto <h2>
@stop 

@section('content')
<hr>

<div class="container">
    <div class="row">
        <div class="col col-lg-4">
            <form action="{{ url('consultarFormulario') }}" method="post">
                <div class="mb-3">
                    <label for="codigoUnico" class="form-label">Codigo Unico:</label>
                    <input type="text" class="form-control" name="codigoUnico">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="sucursal" class="form-label">Sucursal:</label>
                    <input type="text" class="form-control" name="sucursal">
                </div>
                <button type="submit" class="btn btn-primary">Consultar</button>
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