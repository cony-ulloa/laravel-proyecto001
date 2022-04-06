@extends('layouts.master')
@section('title', 'Eliminar producto')

@section('header')
    @parent
    <h2> Eliminar producto <h2>
@stop 

@section('content')
<hr>

<div class="container">
    <div class="row">
        <div class="col col-lg-4">
            <form action="{{ url('eliminarFormulario') }}" method="post">
                <div class="mb-3">
                    <label for="codigoUnico" class="form-label">Codigo Unico:</label>
                    <input type="text" class="form-control" name="codigoUnico">
                </div>
                <button type="submit" class="btn btn-primary">Eliminar</button>
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