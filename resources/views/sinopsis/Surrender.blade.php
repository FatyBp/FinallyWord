@extends('layouts.app')

@section('content')
@include('partials.navbar')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/shop">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Sinopsis</h4>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col-1"></div>
                    <div class="col">
                        <p>
                            <b>Libro: </b> <i>{{$name}}</i> <br>
                            {{-- <b>Autor: </b> Mario Vargas Llosa <br> --}}
                            {{-- <b>Título alternativo: </b> Libros, escenarios, pantallas y museos. Obra periodística 1 <br> --}}
                            <b>Editorial: </b> Reservoir Books <br>
                            <b>Temas: </b> 40 canciones, una historia
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <p class="text-justify">
                            Se trata de uno los artistas más icónicos de la música en todo el mundo y se han escrito miles y miles de páginas sobre su carrera; sin embargo, en Surrender, es ahora Bono quien se sienta ante la hoja en blanco para contarnos, por primera vez y en primera persona, los detalles de su formidable vida y las personas con las que la ha compartido. <br><br>

                            Su indistinguible voz nos conduce en un recorrido que va desde su infancia en Dublín, pasando por la repentina muerte de su madre cuando tenía 14 años y el insólito camino que hubo de recorrer U2 para convertirse en uno de los grupos de rock más influyentes del planeta, hasta llegar a un examen de las más de dos décadas que ha dedicado al activismo, luchando contra el SIDA y la pobreza extrema. <br><br>

                            La escritura de Bono, con la que ha realizado un ejercicio de autorreflexión honesta, no exenta de un saludable sentido del humor, logra abrir más el foco sobre su vida, así como sobre su familia, sus amigos y sus creencias, los cuales le han servido de apoyo, acicate y ejemplo durante todos estos años. <br><br>
                            <div class="text-muted">
                                <a href="{{route('shop')}}" class="text-reset"> Consigue este libro para continuar leyendo...</a>
                            </div>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
