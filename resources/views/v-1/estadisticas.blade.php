@extends('layouts.kananfleet')

@section('header')
    @include('layouts.header',['image' => asset('img/banners/8-estadisticas.png'), 'titulo' => 'Datos Estadísticos' , 'subtitulo' => 'Consulte información en TIEMPO REAL sobre el presupuesto ejercido en <br>Mantenimiento y Combustible', 'image_right'=> asset('img/banners/8-estadisticas/1-banner.png'),'style' => true])
@endsection

@section('content')

<section class="espaci">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="contenedor-imagen">
                    <img src="{{ asset('img/banners/8-estadisticas/2-visualicesu.png') }}" class="img-responsive center-block lap2" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="secc titulo-seccion-2">Visualice su información EN TIEMPO REAL.</h3> <br><br>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Gestione el presupuesto anual asignado a Mantenimiento y Combustible.</p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Consulte presupuestos ejercidos en los rubros de Mantenimiento y Combustible.  </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Consulte información por año, mes, semana y día.</p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Exporte las gráficas a varios formatos.</p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
          Entre otros.     </p>
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



<section class="imagen-estadisticas">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="1500" id="bs-carousel">
                    <!-- Overlay -->
                    <div class="overlay"></div>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item slides active">
                            <div class="slide-1"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="text-center titulo-foo2">Estadísticas <br>por día</h3></div>
                                <div class="col-md-6">
                                    <img src="{{ asset('img/banners/8-estadisticas/3-Slide/1-pordia.png') }}" class="img-responsive center-block" alt="">
                                </div>
                                </hgroup>
                            </div>
                        </div>
                        <div class="item slides">
                            <div class="slide-2"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="text-center titulo-foo2">Estadísticas <br>por mes</h3></div>
                                <div class="col-md-6">
                                    <img src="{{ asset('img/banners/8-estadisticas/3-Slide/2-pormes.png') }}" class="img-responsive center-block" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item slides">
                            <div class="slide-3"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="text-center titulo-foo2">Estadísticas <br>por año</h3></div>
                                <div class="col-md-6">
                                    <img src="{{ asset('img/banners/8-estadisticas/3-Slide/3-poranio.png') }}" class="img-responsive center-block" alt="">
                                </div>
                                </hgroup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
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
    </div><br><br>
</section>

@endsection
