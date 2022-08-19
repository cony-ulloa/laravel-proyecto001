@extends('layouts.master')

@section('content')

<div class="modal-dialog text-center w-50 p-5">
  <div class="col-sm-12">
    <div class="modal-content">
      <form class="col-12" th:action="@{/login}" method="get">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
          class="bi bi-arrow-up-circle-fill mb-3" viewBox="0 0 16 16">
          <path
            d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
        </svg>
        <h4><b>Actualizar Producto</b></h4>
        <br>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Código del producto"><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nuevo nombre del producto"><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nuevo precio del producto"><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nueva descripción del producto"><br>
        </div>
          <button type="submit" href="http:/menu" class="btn btn-success mx-3">Actualizar</button>
          <a type="submit" href="/menu" class="btn btn-secondary mx-3">Regresar</a>
      </form>
    </div>
  </div>
</div>
</div><br>
@stop
