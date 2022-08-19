@extends('layouts.master')

@section('content')

@if(isset($productoNombre))
<h2 class="mb-5">Busqueda por Nombre</h2>
<div class="row">
  @foreach($productoNombre as $producto)
<div class="row">
  <div class="col-12">
    <div class="card mb-5">
      <div class="card-body text-light rounded border border-secondary" style="background-color: #644540;">
        <h5 class="card-title">{{ $producto->nombre }}</h5>
        <p class="card-text">{{ $producto->categoria }}</p>
        <p class="card-text">{{ $producto->desc }}</p>
        <a href="/productos/{{ $producto->id }}" class="btn btn-success">Ver información de stock</a>
      </div>
    </div>
  </div>
</div>
  @endforeach
</div>
@else
<h2></h2>
@endif


@if(isset($productoCodigo))
<h2 class="mb-5">Busqueda por Código</h2>
<div class="row">
  @foreach($productoCodigo as $producto)
<div class="row">
  <div class="col-12">
    <div class="card mb-5">
      <div class="card-body text-light rounded border border-secondary" style="background-color: #644540;">
        <h5 class="card-title">{{ $producto->nombre }}</h5>
        <p class="card-text">{{ $producto->categoria }}</p>
        <p class="card-text">{{ $producto->desc }}</p>
        <a href="/productos/{{ $producto->id }}" class="btn btn-success">Ver información de stock</a>
      </div>
    </div>
  </div>
</div>
  @endforeach
</div>
@else
<h2></h2>
@endif

@stop
