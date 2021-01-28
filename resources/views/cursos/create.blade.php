@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podrás crear un Curso</h1>
    {{-- {{route('cursos.store')}} se utiliza para mostrar que imprime --}}
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombres:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        {{-- PARA VALIDAR FORMULARIO, USAMOS DIRECTIVA DE BLADE --}}
        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripnción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        {{-- PARA VALIDAR FORMULARIO, USAMOS DIRECTIVA DE BLADE --}}
        @error('descripcion')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        {{-- PARA VALIDAR FORMULARIO, USAMOS DIRECTIVA DE BLADE --}}
        @error('categoria')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection