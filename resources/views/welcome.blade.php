@extends('templates.main')
@section('titulo','Inicio ')
    


@section('section')

@include('templates.empresas')
 
{!! $paginacion->render()!!}

@endsection    

