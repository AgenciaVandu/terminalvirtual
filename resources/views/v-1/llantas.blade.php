@extends('layouts.kananfleet')

@section('header')
    @include('layouts.header',['image' => asset('img/banners/5-llantas.png'), 'titulo' => 'Llantas' , 'subtitulo' => 'Obtenga el máximo aprovechamiento de <br>sus neumáticos gestionando de manera gráfica <br>sus posiciones', 'image_right'=> asset('img/banners/5-llantas/1-banner.png')])
@endsection

@section('content')

<section class="espaci">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="contenedor-imagen">
                    <img src="{{ asset('img/banners/5-llantas/2-gestionesusneumaticos.png') }}" class="img-responsive center-block lap2 alineado-lap"  alt="">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="secc titulo-seccion-2">Gestione sus neumáticos de forma sencilla</h3> <br><br>
                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Visualización gráfica de llantas.
                       </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
            Registro de presión y desgaste.                         </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
            Registro de incidencia de las llantas.
                     </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Registro de cambio de llantas en las unidades.                       </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Chasis virtual para la asignación de llantas.                      </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Control de llantas de refacción en unidades.                     </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Programación de alertas para cambio de llantas.</p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Parametrización del desgaste por llanta, para monitoreo mediante semáforo de colores.</p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Visualización de inventario de llantas activas.          </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Visualización de pila de desecho de llantas.                   </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Entre otros.              </p>
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
    En el módulo de llantas es posible generar reportes de todo tipo, así como la información de mayor importancia para la toma de decisiones.
</p> <br><br>
                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Reporte de Kilometraje acumulado por uso.
                       </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Reporte de desgaste vs kilometraje recorrido.
                       </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Reporte de inversión en llantas.
                       </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Historial de uso de llantas.
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
                   <a href="#"  data-toggle="modal" data-target="#myModal">
                   <img src="{{ asset('img/banners/boton/azul.png') }}" class="img-responsive center-block boton-mantenimiento" alt="">
                </a>
                </div>
            </div>

            <div class="col-md-6">
                <img src="{{ asset('img/banners/5-llantas/3-reportes.png') }}" class="img-responsive center-block imaabs2" alt="">
            </div>


        </div>

    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
