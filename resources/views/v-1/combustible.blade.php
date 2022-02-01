@extends('layouts.kananfleet')

@section('header')
    @include('layouts.header',['image' => asset('img/banners/4-combustible.png'), 'titulo' => 'Combustible' , 'subtitulo' => 'Gestione eficientemente el consumo y <br>rendimiento del combustible', 'image_right'=> asset('img/banners/4-combustible/1-banner.png')])
@endsection

@section('content')

<section class="espaci" style="padding:100px 0;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="contenedor-imagen" style="margin-top:-10px;">
                    <img src="{{ asset('img/banners/4-combustible/2-funcionesqueprovee.png') }}" class="img-responsive center-block lap2" alt="">

                </div>
            </div>
            <div class="col-md-6">
                <h3 class="secc titulo-seccion-2">Funciones que provee el módulo de combustible</h3> <br>
<p class="tem">
    Este módulo permite registrar las cargas de combustible, generar cálculos de rendimiento y consumo, así como proveer reportes estadísticos.
</p>
                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Cálculo de consumo de combustible.
                       </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Cálculo de rendimiento de combustible.
                </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Registro de recargas de combustible.
                     </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Módulo compatible con <a href="#" data-toggle="modal" data-target="#fueldata">KANANFLEET MOBILE®</a> (Android).</p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Información a detalle del consumo de combustible.</p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Registro de fotografías y geoposición del lugar donde se realizó la recarga.</p>
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
                             <img src="{{ asset('img/banners/boton/azul.png') }}" class="img-responsive center-blockboton-mantenimiento" alt="">
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
    En el módulo de combustible es posible generar reportes de todo tipo, así como la información de mayor importancia para la toma de decisiones.
</p>
                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Reporte de recargas de combustible.
                       </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Reporte de consumo de combustible.
                       </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Reporte de redimiento y costo de combustible.
                       </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Reporte con estadísticas sobre las recargas.
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
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-12">
                        <a href="#"  data-toggle="modal" data-target="#myModal">
                             <img src="{{ asset('img/banners/boton/azul.png') }}" class="img-responsive center-block boton-mantenimiento" alt="">
                          </a>
                      </div>
                </div>


            </div>

            <div class="col-md-6">
                <div class="carousel carousel-fade" data-ride="carousel" data-interval="1500" id="bs-carousel">
                    <!-- Overlay -->
                    <div class="overlay"></div>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item slides active">
                            <div class="slide-1"></div>
                            <div class="">
                                <img src="{{ asset('img/banners/4-combustible/3-slide/3-reportes.png') }}" class="img-responsive center-block" alt="">
                                </hgroup>
                            </div>
                        </div>
                        <div class="item slides">
                            <div class="slide-2"></div>
                            <div class="">
                                <img src="{{ asset('img/banners/4-combustible/3-slide/3-reportesslide.png') }}" class="img-responsive center-block" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <img src="img/pantalla-llantas.png" class="img-responsive center-block imaabs" alt=""> --}}
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

<div class="modal fade" id="fueldata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                @include('layouts.fueldata')
            </div>
        </div>
    </div>
</div>

@endsection
