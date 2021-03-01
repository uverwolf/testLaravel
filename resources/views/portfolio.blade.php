@extends('layout')
@section('title','Portfolio')
 @section('content')
    <h1>Portfolio</h1>
    <ul>
    
        @foreach ($portfolio as $portfolioItem)
        
           <li>{{$portfolioItem['title']}}</li>

        @endforeach
    
        <li>No hay proyectos para mostrar</li>
    
    </ul>
 @endsection