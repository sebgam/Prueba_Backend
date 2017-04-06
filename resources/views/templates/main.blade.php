<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/stilos.css')}}">
    
</head>
<body>
  <header>
    <!-- menu responsive...................... -->
    <nav class="navbar navbar-inverse navbar-fixed-top" >
        <div class="container">
          
                          
                        
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
                    <span class="sr-only">desplegar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"> PRUEBA</a>
            </div>
            
             <!-- inicia menu...................... -->
            <div class="collapse navbar-collapse" id="navegacion-fm">
      <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-th-list"></span> LISTAR EMPRESAS</a></li>
                    <li><a href="{{url('/empresas/create')}}"><span class="glyphicon glyphicon-pencil"></span> CREAR EMPRESAS</a></li>
                    <li><a href="{{url('/empleados/create')}}"><span class="glyphicon glyphicon-tasks"></span> CREAR EMPLEADOS</a></li>
                    <li><a href="{{url('/listarempleados')}}" data-toggle="modal"> <span class="glyphicon glyphicon-log-in"></span> LISTA EMPLEADOS</a></li>
                    <li><a href="" data-toggle="modal"> <span class="glyphicon glyphicon-zoom-in"></span>CONSULTAS</a></li>
      </ul>
                </div> 
            </div> 
  </nav>
                    
      <!-- contenido............-->
          
  
  <br><br><br><br>
   <section class="main container">
       <div class="row">
           <section class="posts col-md-12" >
              
                          
              @yield('section')
               
               
               
           </section>
           

    
    <script src="{{ asset('plugins/bootstrap/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/validar.js')}}"></script>
    



</body>
</html>