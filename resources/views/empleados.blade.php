
@extends('templates.main')
@section('titulo','Inicio ')
    


@section('section')

<div class="row">
 <div class="col-md-6 col-md-offset-3">
@if(session()->has('msj'))
<div class="alert alert-success" role="alert">{{session('msj')}}</div>
@endif
<form action="/empleados" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label for="id_empleado">id empleado</label>
      <input type="text" id="id_empleado" name="id_empleado" class="form-control" placeholder="id_empleado">
    </div>
     <div class="form-group">
     <label for="id_empresa">id_empresa</label>
     <select class="form-control" name="id_empresa" id="option">Elige empresa:

     @foreach($empresas as $empresa)
          <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
     @endforeach
            
     </select>
      </div>
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
    </div>
     <div class="form-group">
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" name="apellido" class="form-control" placeholder="apellido">
    </div>
    <div class="form-group">
      <label for="direccion">Direccion</label>
      <input type="text" id="direccion" name="direccion" class="form-control" placeholder="direccion">
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
