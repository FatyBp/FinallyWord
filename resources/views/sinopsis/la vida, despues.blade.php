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
                            <b>Autor: </b> Mario Vargas Llosa <br>
                            <b>Título alternativo: </b> Libros, escenarios, pantallas y museos. Obra periodística 1 <br>
                            <b>Editorial: </b> Alfaguara <br>
                            <b>Temas: </b> Periodismo
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <p class="text-justify">
                            <i>“No hay cultura genuina sin pluralidad de ideas y sin crítica”.</i> <br><br>
                            Durante más de sesenta años, Mario Vargas Llosa ha trabajado intensamente como columnista. Para él, los textos publicados en los medios escritos de todo el mundo son una especie de autobiografía intelectual, literaria y política que ha ido elevando al ritmo de la actualidad de cada momento. Con este volumen dedicado a la cultura, Alfaguara inicia la publicación de la obra periodística del premio Nobel peruano, y lo hace siguiendo una estructura temática, que permite al lector descubrir en profundidad el ideario del autor a lo largo del tiempo en cada uno. asuntos. <br><br>
                            «Son las reflexiones maduradas a lo largo de una vida dedicada a la lectura de novelas, a la contemplación del arte, el teatro y el cine. No sólo el testigo entusiasta de intensas horas de placer o de felices digestiones después de haber leído o visto los frutos de la fantasía. Es también un acercamiento integral a la condición humana, su mundo subjetivo —sus valores, conflictos, deseos, anhelos e inquietudes— y la forma en que han dejado su huella en la historia. No sé si el futuro se puede leer en la palma de la mano, en los posos del café o en los arcanos del tarot. El presente, en cambio, y de eso no tengo ninguna duda, se intuye en el fuego de la imaginación. Y ni siquiera necesitas ser un mago o tener poderes para hacer eso. Basta —y este volumen lo demuestra— con ser un lector y espectador apasionado y crítico». <br><br>
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
