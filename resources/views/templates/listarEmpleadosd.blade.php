<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <tr class="danger">
            <th>#ID</th>
            <th>#ID_empresa</th>
            <th>Nombre</th>
            <th>apellido</th>
            <th>Direccion</th>
            <th>correo</th>
            <th>Eliminar</th>
            <th>actualizar</th>
            
            
            
        </tr>

@foreach($empleados as $empleado)
 <tr>
            <td>{{$empleado->id_empleado}}</td>
            <td>{{$empleado->id_empresa}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellido}}</td>
            <td>{{$empleado->direccion}}</td>
            <td>{{$empleado->correo}}</td>
            <td><a href=""><span class="glyphicon glyphicon-trash"></span></a></td>
            <td><a href=""><span class="glyphicon glyphicon-refresh"></span></a></td>
        </tr>
    
        
      
@endforeach
</table>
    </div>

