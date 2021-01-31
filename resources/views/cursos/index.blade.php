@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la página principal de Cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
                <br>
                {{-- EJEMPLO SOLO PARA MOSTRAR QUE ARROJA EL URL
                {{route('cursos.show', $curso)}} --}}
            </li>            
        @endforeach
    </ul>

    {{$cursos->links()}}

@endsection