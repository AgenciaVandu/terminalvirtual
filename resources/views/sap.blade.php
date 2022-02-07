@extends('layouts.kanan-green')
@section('contenido')
    @push('css')
        <style>
            .nav-link {
                color: gray !important;
            }

            .bg-kanan {
                background-color: transparent;
                transition: 0.5s ease;
            }

            @media (max-width: 999px) {
                .bg-kanan {
                    background-color: #fffffff;
                }
            }

            .bg-kanan.scrolled {
                background: #fff;
            }

        </style>
    @endpush
    <header id="bg-top">
        <div class="espacio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <h1 class="source-black">
                            Integre y estandarice sus procesos de negocio en <span>SAP</span>
                        </h1>
                        <p class="source-regular">
                            Ayudamos a administrar y gestionar la flota vehicular o activos en general, mantener controlados
                            los costos operativos y monitorear los indicadores de desempeño de la misma.
                        </p>
                        <button class="btn btn-secondary btn-sm source-semibold" data-toggle="modal"
                            data-target="#lead-kananfleet">SOLICITAR DEMO</button>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <img src="/img/cabecera.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <img src="/img/rubros.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                        <h2 class="source-black">
                            Integre y estandarice sus procesos de negocio en SAP
                        </h2>
                        <p class="source-regular">
                            Ayudamos a administrar y gestionar la flota vehicular o activos en general, mantener controlados
                            los costos operativos y monitorear los indicadores de desempeño de la misma.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="clientes">
        <div class="bg-sap">
            <div class="container pt-4 pb-4">
                <div class="glider-contain">
                    <div class="glider">
                        @foreach ($clientes->images as $cliente)
                            <div class="px-2 text-center">
                                <div class="col aliado-elemento">
                                    <img src="{{ Storage::url($cliente->url) }}" class="img-fluid">
                                </div>
                            </div>
                        @endforeach
                        <button aria-label="Previous" class="glider-prev">«</button>
                        <button aria-label="Next" class="glider-next">»</button>
                        <div role="tablist" class="dots"></div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <h4 class="source-light">M Ó D U L O S</h4>
                        <h2 class="source-black">
                            Administración y gestión de la flota vehicular/activos
                        </h2>
                        <p class="source-regular">
                            Conozca la disponibilidad y estatus de sus activos en todo momento, y evite perder dinero
                            tenerlos en desuso.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                        <img src="/img/1-img.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                        <!--modulos-->
                        <img src="/img/2-img.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <h4 class="source-light">M Ó D U L O S</h4>
                        <h2 class="source-black">
                            Administración del mantenimiento.
                        </h2>
                        <p class="source-regular">
                            Lleve el control de sus mantenimientos correctivos, preventivos y predictivos, así como el
                            seguimiento de las órdenes de servicio y los costos asociados. Consulte en un solo click.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-sap-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                            <!--modulos-->
                            <h4 class="source-light">M Ó D U L O S</h4>
                            <h2 class="source-black">
                                Recargas y despacho de combustible
                            </h2>
                            <p class="source-regular">
                                Evite el robo de combustible. Nuestros indicadores le ayudarán a llevar de forma más
                                sencilla el control sobre los siguientes factores, rendimiento, frecuencia de carga por
                                unidad y muchas cosas más.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                            <img src="/img/3-img.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                            <!--modulos-->
                            <img src="/img/4-img.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                            <h4 class="source-light">M Ó D U L O S</h4>
                            <h2 class="source-black">
                                Administración de choferes.
                            </h2>
                            <p class="source-regular">
                                Asigne operadores a sus vehículos y activos, lleve el control de sus infracciones,
                                licencias, permisos, certificaciones, e historial de su comportamiento.
                            </p>
                        </div>
                    </div>
                    <div class="pad-1 text-center pt-5">
                        <h2 class="source-bold">¿Ya cuenta con un sistema de control administrativo?</h2>
                        <p class="source-regular " style="color: gray;">Kananfleet ® se adapta a cualquier entorno, no
                            importa si es un software de
                            contabilidad, CRM o ERP. <br> Nosotros creamos las integraciones necesarias.
                        </p>
                        <button class="btn btn-secondary source-semibold" data-toggle="modal"
                            data-target="#lead-kananfleet">SOLICITAR DEMO</button> <br>
                        <small class="source-light">Pónganse en contacto con nosotros</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mapa-aliados" class="pt-4 mb-5">
        <div class="container text-center">
            <h2 class="source-bold text-center">Kananfleet® está presente en</h2>
            <img src="/img/mapa-aliados.png" alt="" class="img-fluid">
        </div>
    </section>
@endsection
