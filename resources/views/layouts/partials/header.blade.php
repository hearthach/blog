<header>
    <h1>Primer Blog</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
                <!-- UTILIZAREMOS UNA FUNCION con ncodigo PHP Request para ubicar la URL-->
                {{-- <php
                    dump(request()->routeIs('home')); 
                ?> --}}

                <!-- UTILIZAREMOS UNA DIRECTIVA DE LARAVEL PARA REPMPLAZAR EL CODIGO PHP - Directiva dump-->
                <!-- LAS DIRECTIVAS DE LARVAEL NO LLEVAN PUNTO Y COMA AL FINAL -->
                {{-- PARA RESUMIR TODO EL CODIGO A UNA LINEA PODEMOS UTILIZAR OTRO METODO
                EL IF EN PHP SERA UN SIGNO DE INTERROGACION "?" Y EL 
                ELSE SERANN DOS PUNTOS ":", ENTONCES LA DIRECTIVA DUM IRA COMO UNA CLASE 
                CON CODIGO PHP --}}
                {{-- @dump(request()->routeIs('home')) --}}
            </li>                
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
                {{-- @dump(request()->routeIs('cursos.index')) --}}
            </li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
                {{-- @dump(request()->routeIs('nosotros')) --}}
            </li>
            <li>
                <a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contáctanos</a>
            </li>
        </ul>
    </nav>
</header>