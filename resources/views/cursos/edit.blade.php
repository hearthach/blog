@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta página podrás editar un Curso</h1>
    {{-- {{route('cursos.store')}} se utiliza para mostrar que imprime --}}
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        
        {{-- USO De DIRECTIVAS --}}
        {{-- 1.- Directiva para TOKEN recomendado por seguridad --}}
        @csrf
        {{-- 2.- Directiva para saber que metodo PASAR  --}}
        @method('put')

        <label>
            Nombres:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        {{-- PARA VALIDAR FORMULARIO, USAMOS DIRECTIVA DE BLADE --}}
        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>            
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        {{-- PARA VALIDAR FORMULARIO, USAMOS DIRECTIVA DE BLADE --}}
        @error('categoria')
            <br>
                <small>*{{$message}}</small>
            <br>            
        @enderror

        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection