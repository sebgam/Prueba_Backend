@extends('templates.main')
@section('titulo','Inicio ')
    


@section('section')

@include('templates.empresas')
 
{!! $empresas->render()!!} 

@endsection    

