@extends('layouts.layout')
@section('content')
<br>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>
        CRUD Estudiantes
      </h1>
    </div>
    <div class="col boton">
       <a type="button" class="btn btn-primary"href="/usuario/create" style="float: right;">Agregar Estudiante</a>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col table-responsive">
      <table class="table table-striped table-hover">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Fecha Ingreso</th>
          <th>Carrera</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
        @foreach ($usuarios as $usuario)
          <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->date }}</td>
            <td>{{ $usuario->career }}</td>
            <td><a href="/usuario/{{ $usuario->id }}/edit">Editar</a></td>
            <td><a href="/usuario/{{ $usuario->id }}/confirmDelete">Eliminar</a></td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
