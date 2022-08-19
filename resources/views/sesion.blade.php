@extends('layouts.master')

@section('content')
<div class="form-signin text-center d-flex w-50 h-100 p-3 mx-auto flex-column p-5">
  <div class="col-sm-12">
    <div class="modal-content">
      <form class="col-12" th:action="@{/login}" method="get">
        <div class="col-12">
<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-person-circle mb-3" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
    <h4><b>Login Administrador</b></h4>
        </div>
        <br>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" /><br>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Contraseña" name="password" /> <br>
        </div>
        <button type="submit" href="localhost:8000/sesion" class="btn btn-success"> Ingresar </button>
        <div class="checkbox mb-3">
          <br>
          <label>
            <input class="" type="checkbox" value="remember-me" class="fg-success"> Recordar credenciales
          </label>
        </div>
      </form>
      <br>
    </div>
  </div>
</div>
@stop
