@extends('layouts.master')

@section('content')

<div class="modal-dialog text-center">
  <div class="col-sm-12">
    <div class="modal-content">
      <form class="col-12" th:action="@{/login}" method="get">
        <h4><b>Seleccione una opción</b></h4>
        <br>
        <div class="row">
          <div class="col-4 mt-5">
            <a type="submit" href="/productos/create" class="w-50 btn btn-success"> Registrar un producto </a>
            <br><br>
            <a type="submit" href="/asignar" class="w-50 btn btn-success"> Asignar producto </a> <br><br>
          </div>
          <div class="col-4 mt-5">
            <a type="submit" href="/actualizar" class="w-50 btn btn-success"> Actualizar producto </a> <br><br>
            <a type="submit" href="/productos" class="w-50 btn btn-success"> Listar productos</a> <br><br>
          </div>
          <div class="col-4 mt-5">
            <a type="submit" href="/consultar" class="w-50 btn btn-success"> Consultar producto </a> <br><br>
            <a type="submit" href="/eliminar" class="w-50 btn btn-success"> Eliminar producto </a> <br><br>
          </div>
<div class="text-center mt-5">
            <a type="submit" href="/sesion" class="w-50 btn btn-secondary"> Cerrar sesión </a> <br><br>
</div>
        </div>
      </form>
    </div>
  </div>
</div>
@stop
