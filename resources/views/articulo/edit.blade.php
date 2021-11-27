@extends('layouts.plantillabase')

@section('contenido')
<h2> EDITAR REGISTRO </h2>
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
  <label for="" class="form-label">Código</label>
  <input type="text" name="codigo" class="form-control" id="codigo" tabindex="1" value="{{$articulo->codigo}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Descripcion</label>
  <input type="text" name="descripcion" class="form-control" id="descripcion" tabindex="2"  value="{{$articulo->descripcion}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Cantidad</label>
  <input type="number" name="cantidad" class="form-control" id="cantidad" tabindex="3"  value="{{$articulo->cantidad}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Precio</label>
  <input type="number" name="precio" step="any" class="form-control" id="precio" tabindex="4"  value="{{$articulo->precio}}">
</div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@endsection