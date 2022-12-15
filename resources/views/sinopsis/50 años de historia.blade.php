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
                            <b>Editorial: </b> MINISTERIO DE DEFENSA <br>
                            {{-- <b>Temas: </b> Periodismo --}}
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <p class="text-justify">
                            El Ala 46 cumplió el 1 de abril de 2015 sus primeros 50 años de historia. Por tal motivo ha sido editado este libro, cuya intención es dar un repaso a la historia de la Unidad de una manera dinámica, cercana, muy gráfica y orientada principalmente al elemento humano, como componente de mayor valor dentro de la organización del Ejército del Aire. Para lograr lo anterior, la publicación se centra fundamentalmente en las vivencias personales, anécdotas y curiosidades de estos primeros 50 años de existencia. Desde el despliegue de sus unidades precursoras, como la Escuadrilla del Desierto establecida allá por el año 1928, pasando por su antecesora, el Ala 36, formada en 1957, y finalizando en la Unidad actual, que incluye un único Escuadrón de Fuerzas Aéreas, el 462, pero dotado de uno de los aviones de caza más versátiles y capaces de nuestros días, el F-18.
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
