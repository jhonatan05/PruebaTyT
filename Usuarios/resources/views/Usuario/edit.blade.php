@extends('layouts.layout')
@section('content')
<br>
<div class="row">
  <div class="col">
    <h1>
      Editar estudiante
    </h1>
  </div>  
</div>
<br>
<div class="row">
  <div class="col">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{route('usuario.update', ['id'=>$usuario->id])}}" method='POST'>
      @csrf
      {{method_field('PUT')}}
      <div class="form=group">
        <label for="name"><strong>Nombre:</strong></label>
        <input type="text" class="form-control" id="name" name="name" required placeholder="Nombre de Estudiante" value='{{$usuario->name}}'>
        <br>
        <label for="date"><strong>Fecha:</strong></label>
        <input type="date" class="form-control" id="date" name="date" required placeholder="Fecha de Ingreso" value='{{$usuario->date}}'>
        <br>
        <label for="career"><strong>Carrera:</strong></label>
        <input type="text" class="form-control" id="career" name="career" required placeholder="Carrera" value='{{$usuario->career}}'>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <button class="btn btn-primary" type="submit">Editar</button>
          <a class="btn btn-secondary" href="/usuario">Cancelar</a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection