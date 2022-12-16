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
                            <b>Autor: </b> Pérez-Reverte, Arturo <br>
                            {{-- <b>Título alternativo: </b> Libros, escenarios, pantallas y museos. Obra periodística 1 <br> --}}
                            <b>Editorial: </b>  Editorial Alfaguara <br>
                            <b>Temas: </b> Historias / Literatura / Literatura Española / Novela. Narrativa /
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <p class="text-justify">
                            <b>Un hombre, tres mujeres y una revolución. Un viaje al corazón humano y a la aventura.</b> <br><br>
                            Ésta es la historia de un hombre, tres mujeres, una revolución y un tesoro. La revolución fue la de México en tiempos de Emiliano Zapata y Francisco Villa. El tesoro fueron quince mil monedas de oro de a veinte pesos de las denominadas maximilianos, robadas en un banco de Ciudad Juárez el 8 de mayo de 1911. El hombre se llamaba Martín Garret Ortiz y era un joven ingeniero de minas español. Todo empezó para él ese mismo día, cuando desde su hotel oyó un primer disparo lejano. Salió a la calle para ver qué ocurría y a partir de ese momento su vida cambió para siempre... <br><br>
                            Revolución es mucho más que una novela sobre los dramáticos acontecimientos que sacudieron la república mexicana en el primer tercio del siglo XX. Es un relato de iniciación y madurez a través del caos, la lucidez y la violencia: el asombroso descubrimiento de las reglas ocultas que determinan el amor, la lealtad, la muerte y la vida. <br><br>
                            «Toda la vida escuché en mi casa la historia de aquel amigo de mi bisabuelo, ingeniero de minas, que trabajó en México en plena revolución. Ese recuerdo remoto me ha aproximado a mi propia relación con la aventura y me ha llevado a escribir esta historia. Es una novela de iniciación y aprendizaje y es, de algún modo, mi propia biografía de juventud. Es mi Flecha de oro ». <b>Arturo Pérez-Reverte</b>
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
