@extends('layouts.master')

@section('content')

<div class="modal-dialog text-center w-50 p-5">
  <div class="col-sm-12">
    <div class="modal-content">
      <form class="col-12" action="/consultar" method="POST">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-search mb-3"
          viewBox="0 0 16 16">
          <path
            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
        <h4><b>Consultar producto</b></h4>
        <br>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Código del producto" id="codigoUnico" name="codigoUnico"><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nombre del producto" id="nombre" name="nombre"><br>
        </div>
        <!-- <div class="form-group"> -->
        <!--   <select class="form-select" name="sucursales_id" id="sucursales_id"> -->
        <!--     @foreach($sucursales as $sucursal) -->
        <!--     <option value={{$sucursal->id}}>{{$sucursal->comuna}}</option> -->
        <!--     @endforeach -->
        <!--   </select><br> -->
        <!-- </div> -->
        <button type="submit" href="http:/menu" class="btn btn-success mx-3"> Consultar </button>
          <a type="submit" href="/menu" class="btn btn-secondary mx-3">Regresar</a>
      </form>
    </div>
  </div>
</div>
<br>
@stop
