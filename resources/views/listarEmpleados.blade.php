@extends('templates.main')
@section('titulo','Inicio ')
    


@section('section')

@include('templates.listarEmpleadosd')
 
{!! $empleados->render()!!} 

@endsection    
