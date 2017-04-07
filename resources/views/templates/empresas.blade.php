
@if(session()->has('msje'))
<div class="alert alert-danger" role="alert">{{session('msje')}}</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <tr class="danger">
            <th>#ID</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
            <th>actualizar</th>
            
            
            
        </tr>

@foreach($empresas as $empresa)
 <tr>
            <td>{{$empresa->id}}</td>
            <td>{{$empresa->nombre}}</td>
            <td>{{$empresa->direccion}}</td>
            <td>{{$empresa->correo}}</td>
            <td><a href="{{route('empresas.destroy',$empresa->id)}}" onclick="return confirm('¿seguro que deseas eliminar esta empresa?')" class="btn"  
            <?php $contador =0; ?>
            @foreach($empleados as $empleado)
                @if($empresa->id == $empleado->id_empresa)
                 <?php $contador++; ?>
                @endif
            @endforeach
            @if($contador > 0)
            <?php echo "disabled title='la empresa tiene usuarios registrados no puedes eliminarla'"; ?>
            @endif
            ><span class="glyphicon glyphicon-trash"></span></a>
            @if($contador > 0)
             Numero de empleados {{ $contador}}
            @endif</td>
            <td><a href="{{route('empresas.edit',$empresa->id)}}"><span class="glyphicon glyphicon-refresh"></span></a></td>
        </tr>
    
        
      
@endforeach

</table>

   </div>


