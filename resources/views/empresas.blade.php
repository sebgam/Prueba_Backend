@extends('templates.main')
@section('titulo','Inicio ')
    


@section('section')

@if(session()->has('msj'))
<div class="alert alert-success" role="alert">{{session('msj')}}</div>
@endif
<div class="row">
 <div class="col-md-6 col-md-offset-3">
<form action="/empresas" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
    </div>
     <div class="form-group">
      <label for="direccion">Direccion</label>
      <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Direccion">
    </div>
     <div class="form-group">
      <label for="correo">correo</label>
      <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>  
</div>
</div>


@endsection    
