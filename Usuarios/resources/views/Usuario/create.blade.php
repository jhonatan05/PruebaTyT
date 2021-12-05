@extends('layouts.layout')
@section('content')
<br>
<div class="row">
  <div class="col">
    <h1>
      Agregar Estudiante
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
    <form action="/usuario" method='POST'>
      @csrf
      <div class="form=group">
        <label for="name"><strong>Nombre:</strong></label>
        <input type="text" class="form-control" id="name" name="name" required placeholder="Nombre del Estudiante" value={{old('name')}}>
        <br>
        <label for="date"><strong>Fecha de ingreso:</strong></label>
        <input type="date" class="form-control" id="date" name="date" required placeholder="Fecha de ingreso" value={{old('date')}}>
        <br>
        <label for="career"><strong>Carrera:</strong></label>
        <input type="text" class="form-control" id="career" name="career" required placeholder="Carrera" value={{old('career')}}>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <button class="btn btn-success" type="submit">Agregar</button>
          <a class="btn btn-secondary" href="/usuario">Cancelar</a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection