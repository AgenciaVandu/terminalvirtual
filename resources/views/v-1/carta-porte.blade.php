@extends('layouts.kananfleet')

@section('header')
    @include('layouts.header',['image' => asset('img/banners/3-cartaporte.png'), 'titulo' => 'Carta Porte' , 'subtitulo' => 'Gestione cartas porte, liquidación de viaje <br>y caja chica', 'image_right'=> asset('img/banners/3-cartaporte/1-banner.png')])
@endsection

@section('content')

<section class="espaci">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="contenedor-imagen">
                    <img src="{{ asset('img/banners/3-cartaporte/2-tengaelcontrol.png') }}" class="img-responsive center-block lap4" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="secc titulo-seccion-2">Tenga el control sobre la Carta Porte</h3> <br><br>
                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Genere cartas porte.
                       </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Liquide gastos por viajes generados. </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Gestione la caja chica del viaje.
                     </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Entre otros.</p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-12">
                        <a href="#"  data-toggle="modal" data-target="#myModal">
                           <img src="{{ asset('img/banners/boton/azul.png') }}" class="img-responsive center-block boton-mantenimiento" alt="">
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>



<section>
    <div class="container-fluid">


        <div class="row">

            <div class="col-md-6 espa">
                <h3 class="secc titulo-seccion-2">Reportes, la forma más práctica de tener la información más importante de sus activos</h3>
<p class="subtotlepalomas">
    En el módulo de Carta Porte es posible generar reportes de todo tipo, así como la información de mayor importancia para la toma de decisiones.
</p> <br>
                {{-- <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                           Gestión de cartas porte.
                       </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Historial de viajes liquidados.
                       </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Entre otros.
                       </p>
                    </div>
                </div> --}}

                <div class="contenedor-palomas">
                    <div class="col-md-12">
                        <a href="#"  data-toggle="modal" data-target="#myModal">
                           <img src="{{ asset('img/banners/boton/azul.png') }}" class="img-responsive center-block boton-mantenimiento" alt="">
                        </a>

                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <img src="{{ asset('img/banners/3-cartaporte/3-reportes.png') }}" class="img-responsive center-block imaabs2" alt="">

            </div>


        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <br>
            <br>
            <br>
                <h3 class="text-center titulo-foo">¿Ya cuenta con un sistema de control administrativo?</h3> <br><br>
                <p class="text-center texto-foofi">
                    Kananfleet ® se adapta a cualquier entorno,  no importa si es un software de <br>contabilidad, CRM o ERP.  Nosotros creamos las integraciones necesarias.
                </p>
                <a href="#" data-toggle="modal" data-target="#myModal">
                    <img src="{{ asset('img/banners/boton/azul.png') }}" class="img-responsive center-block boton" alt="">
                </a>
                <p class="text-center color-texto-boton">Póngase en contacto con nosotros.</p>
            </div>
        </div>
    </div>
</section>

@endsection
