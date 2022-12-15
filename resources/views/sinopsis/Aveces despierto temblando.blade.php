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
                            <b>Autor: </b> Ximena Santaolalla. <br>
                            {{-- <b>Título alternativo: </b> Libros, escenarios, pantallas y museos. Obra periodística 1 <br> --}}
                            {{-- <b>Editorial: </b> Alfaguara <br> --}}
                            <b>Temas: </b> tres soldados que son enviados a un entrenamiento militar en Texas.
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <p class="text-justify">
                            Ximena Santaolalla tardó cinco años en escribir su primera novela “A veces despierto temblando”, que retrata la historia de tres soldados que son enviados a un entrenamiento militar en Texas para abatir el comunismo, la guerrilla y los pueblos originarios de Guatemala: <br><br>

                            “La investigación y el documentarme sobre el periodo de la dictadura de Efraín Ríos Montt a inicios de los 80, que nada más duró año y medio, pero bueno ese año y medio fue terrorífico porque asesinaron o desaparecieron a cien mil personas en Guatemala. Entonces yo quería entender cómo había sido eso posible”. <br><br>

                            Ximena leyó la sentencia que la jueza Yassmin Barrios dictó por genocidio a Ríos Montt, después comenzó a explorar otros documentos, testimonios y lugares que habían sido testigos de masacres y violaciones a los derechos humanos: <br><br>

                            “A mi me interesa mucho las vidas de personas reales, me interesan mucho las personas de carne y hueso, pero pienso que también la ficción ayuda a contar ciertas verdades que no se logran expresar solamente con la realidad tal cual fue. Entonces, yo diría que sí, que la novela si es un trabajo de ficción pero todos los personajes están basados en uno o más de uno…personas reales. Entonces la historia está compuesta por varias historias que sin duda son reales”. <br><br>

                            El libro aborda diferentes problemáticas sociales como la violencia de género y sexual. A su vez, la escritora afirmó que la migración va más allá de la falta de oportunidades laborales en Guatemala y Centroamérica: <br><br>   

                            “El mostrar que no solamente es un tema económico, aunque sí lo es, pero también es un tema de violencia y de situaciones extremas, en donde puede haber incluso peligro de la integridad física y esas situaciones de violencia provocan también el no poder tener una vida digna, el no poder tener un trabajo estable y poderse sentir capaz de desarrollarse como ser humano, entonces eso también es como otro factor para que las personas quieran irse de sus países”. <br><br>

                            “A veces despierto temblando” fue galardonada con el Premio Mauricio Achar 2021, que busca apoyar y difundir las nuevas voces de la literatura mexicana. La novela se encuentra en las principales librerías de México, entre ellas Gandhi, y se presentará en la FIL Guadalajara 2022. <br><br>
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
