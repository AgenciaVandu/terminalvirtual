@extends('layouts.kananfleet')

@section('header')
    @include('layouts.header',['image' => asset('img/banners/7-disponibilidad.png'), 'titulo' => 'Panel de Disponibilidad' , 'subtitulo' => 'Consulte  y agende el mantenimiento de todos sus activos', 'image_right'=> asset('img/banners/7-disponibilidad/1-banner.png'),'style' => true])
@endsection

@section('content')

<section class="espaci">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="contenedor-imagen">
                    <img src="{{ asset('img/banners/7-disponibilidad/2-conozcalacantidad.png') }}" class="img-responsive center-block lap3" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="secc titulo-seccion-2">
                    Calendario disponible para la visualización de los vehículos que están asignados a mantenimiento.
                </h3> <br><br>
                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                        Visualización de órdenes de servicio programadas y en mantenimiento.
                       </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
          Vehículos en estado de incidencia.                    </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Entre otros.                    </p>
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
