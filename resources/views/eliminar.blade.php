@extends('layouts.master')

@section('content')

<div class="modal-dialog text-center w-50 p-5">
  <div class="col-sm-12">
    <div class="modal-content">
      <form class="col-12" th:action="@{/login}" method="get">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
          class="bi bi-file-earmark-x-fill mb-3" viewBox="0 0 16 16">
          <path
            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708z" />
        </svg>
        <h4><b>Eliminar producto</b></h4>
        <br>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Código del producto (Obligatorio)"><br>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nombre del producto (Obligatorio)"><br>
        </div>
        <button type="submit" href="http:/menu" class="btn btn-success mx-3"> Eliminar producto</button>
        <a type="submit" href="/menu" class="btn btn-secondary mx-3">Regresar</a>
      </form>
    </div>
  </div>
</div>
<br>
@stop
