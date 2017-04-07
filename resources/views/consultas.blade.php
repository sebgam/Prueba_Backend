@extends('templates.main')
@section('titulo','editar empleado ')
    


@section('section')

<div class="row">
          <div class="col-md-6 col-md-offset-3">
              
              <div role="tabpanel">
                  <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">Consultar Empleados</a></li>
                      <li role="presentation" class=""><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">consultar Empresas</a></li>
                      
                  </ul>
              </div>
              
              <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="seccion1">
                  </br></br></br>
                      {!! Form::open(['url' => '/consultar-empresa']) !!}
                         <div class="row">
                           <div class="col-md-6 col-md-offset-3">
                        <div class="alert alert-success" role="alert">Buscar Empleado</div>
                         <div class="form-group">
                            <label for="id_empleado">id empleado</label>
                           <input type="text" id="id_empleado" name="id_empleado" class="form-control" placeholder="id_empleado" >
                         </div>                       
                         <button type="submit" class="btn btn-primary">Buscar</button>     
                           </div>
                         </div>
                      {!! Form::close() !!}
                  </div>
                  
                   <div role="tabpanel" class="tab-pane" id="seccion2">
                   </br></br></br>
                      {!! Form::open(['url' => '/consultar-empleados']) !!}
                          <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                         <div class="alert alert-success" role="alert">Buscar Empresa</div>
                           <div class="form-group">
                            <label for="id_empresa">id empresa</label>
                            <input type="text" id="id_empresa" name="id_empresa" class="form-control" placeholder="id_empresa" value="1" >
                          </div>
                          
                          <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                          </div>
                      {!! Form::close() !!}

                  </div>
                  
                   
                  
                  
                  
              </div>
              
              
              
          </div>
      </div>






@endsection

