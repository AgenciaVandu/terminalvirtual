@extends('layouts.kananfleet')

@section('header')
    @include('layouts.header',['image' => asset('img/banners/6-operadores.png'), 'titulo' => 'Operadores' , 'subtitulo' => 'Gestione de manera fácil la información de los <br>operadores', 'image_right'=> asset('img/banners/6-operadores/1-banner.png'),'style' => true])
@endsection

@section('content')

<section class="espaci">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="contenedor-imagen">
                    <img src="{{ asset('img/banners/6-operadores/2-aumentelaproductividad.png') }}" class="img-responsive center-block lap2" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="secc titulo-seccion-2">Aumente la productividad, entérese de las actividades de su personal</h3> <br><br>
                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Catálogo de operadores.
                       </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
            Alertas por vencimientos de licencias de manejo.                         </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
            Registro de cursos / actividades del operador.

                     </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Gestión de la documentación del operador.                     </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Asignación de vehículos.                     </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Programación de mensajes por email.                    </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
           Entre otros.                 </p>
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
    En el módulo de operadores es posible generar reportes de todo tipo, así como la información de mayor importancia para la toma de decisiones.

</p> <br><br>
                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Historial de vehículos asignados por operador.
                       </p>
                    </div>
                </div>


                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Reporte del Kardex del operador.
                       </p>
                    </div>
                </div>

                <div class="contenedor-palomas">
                    <div class="col-md-2 alineado">
                        <img src="{{ asset('img/paloma.png') }}" class="img-responsive center-block paloma" alt="">
                    </div>
                    <div class="col-md-10">
                       <p class="texto-paloma">
                            Reporte de vencimientos de licencias de manejo.
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
                <img src="{{ asset('img/banners/6-operadores/3-reportes.png') }}" class="img-responsive center-block imaabs2" alt="">
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
