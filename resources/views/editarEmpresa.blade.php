@extends('templates.main')
@section('titulo','Editar empresa ')
    


@section('section')
<div class="row">
 <div class="col-md-6 col-md-offset-3">
<div class="alert alert-warning">Editar empresa {{$empresa->nombre}}</div>

{!! Form::open(['route' => ['empresas.update', $empresa->id], 'method' => 'PUT']) !!}
    
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value="{{$empresa->nombre}}">
    </div>
     <div class="form-group">
      <label for="direccion">Direccion</label>
      <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Direccion" value="{{$empresa->direccion}}">
    </div>
     <div class="form-group">
      <label for="correo">correo</label>
      <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo" value="{{$empresa->correo}}">
    </div>
    <button type="submit" class="btn btn-primary">Editar</button>
  
{!! Form::close() !!}

</div>
   </div>


@endsection    
