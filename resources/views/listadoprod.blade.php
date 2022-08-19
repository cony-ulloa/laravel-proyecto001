@extends('layouts.master')

@section('content')
<div class="row">
  @foreach($productos as $producto)
<div class="row">
  <div class="col-12">
    <div class="card">
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
@stop
