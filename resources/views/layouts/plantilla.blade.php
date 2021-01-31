<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos ccss -->
    <!-- DARLE ESTILO A NUESTRA CLASE ACTIVE -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- header -->
    <!-- nav -->

    {{-- PARA NO ENSUCIAR EL CODIGO SE MOVIO EL HEADRER A UNA CARPETA PARTIAL
    Y SE USO UNNA DIRECTIVA DE BLADE LLAMDA INCLUDE --}}

    @include('layouts.partials.header')
        
    @yield('content')

    @include('layouts.partials.footer')

    <!-- footer -->

    <!-- script -->
</body>
</html>