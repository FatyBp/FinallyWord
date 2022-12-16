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
                            <b>Autor: </b> Gurnah, Abdulrazak <br>
                            {{-- <b>Título alternativo: </b> Libros, escenarios, pantallas y museos. Obra periodística 1 <br> --}}
                            <b>Editorial: </b> Salamandra <br>
                            <b>Temas: </b> Literatura / Narrativa /
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <p class="text-justify">
                            <b>Una conmovedora historia de amor con la guerra y el colonialismo como telón de fondo.</b> <br><br>
                            Cuando todavía era un niño, Ilyas les fue arrebatado a sus padres por las tropas coloniales alemanas; tras años de ausencia y de batalla contra su propio pueblo, regresa a la ciudad de su infancia, donde sus padres han desaparecido y su hermana Afiya ha sido dada en adopción. Otro joven regresa al mismo tiempo: a Hamza no lo robaron para que combatiera, sino que lo vendieron. Con tan sólo sus ropas a la espalda, se limita a buscar trabajo y seguridad... y el amor de la hermosa Afiya. <br><br>
                            Apenas acaba de comenzar el siglo XX y alemanes, británicos, franceses y demás países se han repartido el continente africano. A medida que estos jóvenes supervivientes intentan rehacer sus vidas, la sombra de una nueva guerra en otro continente amenaza con llevárselos de nuevo. <br><br>
                            La crítica ha dicho: <br>
                            «Fascinante y desgarradora [...]. Una novela convincente, que abraza a todos aquellos destinados al olvido, y rechaza su anulación.»
                            The Guardian <br>
                            «Pocas veces en la vida se puede abrir un libro y descubrir que su lectura encierra las cualidades encantadoras de una relación amorosa... uno apenas se atreve a respirar mientras lo lee por miedo a romper el encanto.»
                            The Times <br>
                            «Una evocación poética y vívida sobre el continente africano y el inquietante poder de lo desconocido.»
                            Independent on Sunday <br>
                            «Un archivo resonante de una África desaparecida, que cobra vida de forma sorprendente. En él, un mundo perdido es recuperado de manera fascinante.»
                            Sunday Times <br>
                            «Un libro brillante y revelador de un escritor asombroso.»
                            New Statesman <br>
                            «Una novela vibrante y vívida que muestra a los seres humanos en toda su generosidad y codicia, mezquindad y nobleza, de modo que incluso los personajes menores parecen capaces de cargar con novelas enteras por sí mismos.»
                            Herald <br>
                            «Desde las primeras páginas de La vida, después, un libro de tranquila belleza y tragedia, está claro que uno está en manos de un maestro de la narración.»
                            Financial Times <br>
                            «Un tierno relato sobre lo extraordinario de las vidas ordinarias, La vida, después combina una narración fascinante con una escritura cuya exquisita precisión emocional confirma el lugar de Gurnah entre los destacados estilistas de la prosa inglesa moderna. Al igual que sus predecesoras, ésta es una novela que exige ser leída y releída, por su humor, su generosidad de espíritu y su clarividente visión de las infinitas contradicciones de la naturaleza humana.»
                            Evening Standard <br>
                            «Con una prosa limpia y mesurada, Gurnah inspecciona los actos individuales de violencia... y los actos inesperados de bondad. Conmovedor en su ordinariez, La vida, después es una convincente exploración de la necesidad de encontrar lugares de refugio.»
                            Daily Telegraph <br>
                            «Abdulrazak Gurnah es un maestro de su oficio ... Una novela intrincada y delicada, vitalmente necesaria.»
                            New Internationalist <br><br>
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
