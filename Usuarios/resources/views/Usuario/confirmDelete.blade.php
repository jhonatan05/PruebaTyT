


@extends('layouts.layout')
@section('content')
<br>
<div class="row">
  <div class="col">
    <h1>
      Eliminar estudiante
    </h1>
  </div>  
</div>
<br>
<div class="row">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">¿Está seguro de eliminar al estudiante: {{$usuario->name}}?</h5>
      <p><strong>Fecha de ingreso: </strong>{{ $usuario->date }}</p>
      <p><strong>Carrera: </strong>{{ $usuario->career }}</p>
      <br>
      <form action="/usuario/{{$usuario->id}}" method='POST'>
        @csrf
        @method('Delete')
        <button class= "btn btn-danger"type="submit">Eliminar</button>
        <a class= "btn btn-secondary" href="/usuario">Cancelar</a>
      </form>
    </div>
  </div>
</div>
@endsection

