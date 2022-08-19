
@extends('layouts.master')

@section('content')
<div class="row">
  @foreach($stocks as $stock)
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body text-light rounded border border-secondary" style="background-color: #644540;">
        @if($stock->sucursales_id === 1)
        <h5 class="card-title"><b>{{ $sucursales[0]->comuna}}</b></h5>
        @else
        <h5 class="card-title"><b>{{ $sucursales[1]->comuna}}</b></h5>
        @endif
        <p class="card-text">Precio: ${{ $stock->precio }}.000</p>
        <p class="card-text">{{ $stock->estado }}</p>
        <p class="card-text">Unidades: {{ $stock->cantidad }}</p>
      </div>
    </div>
  </div>
</div>
  @endforeach
</div>
@stop
