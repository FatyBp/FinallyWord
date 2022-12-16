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
                            <b>Autor: </b> Dicker, Joël <br>
                            {{-- <b>Título alternativo: </b> Libros, escenarios, pantallas y museos. Obra periodística 1 <br> --}}
                            <b>Editorial: </b> Editorial Alfaguara <br>
                            {{-- <b>Temas: </b> Periodismo --}}
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <p class="text-justify">
                            «Sé lo que has hecho». Este mensaje, encontrado en el bolsillo del pantalón de Alaska Sanders, cuyo cadáver apareció el 3 de abril de 1999 al borde del lago de Mount Pleasant, una pequeña localidad de New Hampshire, es la clave de la nueva y apasionante investigación que, once años después de poner entre rejas a sus presuntos culpables, vuelve a reunir al escritor Marcus Goldman y al sargento Perry Gahalowood. En esta Ocasión contarán con la inestimable ayuda de una joven agente de policía, Lauren Donovan, empeñada en resolver la trama de secretos que se esconde tras el caso. A medida que vayan descubriendo quién era realmente Alaska Sanders, irán resurgiendo también los fantasmas del pasado y, entre ellos, especialmente el de Harry Quebert. <br><br>
                            Una nueva intriga literariamente adictiva, con la estructura en varios tiempos, las vueltas de tuerca y el ritmo trepidante que son el sello inconfundible de Joël Dicker, «un fenómeno planetario» (Babelia). <br><br>
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
