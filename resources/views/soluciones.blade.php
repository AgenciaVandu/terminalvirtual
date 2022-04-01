@extends('layouts.kanan')
@section('contenido')
    @push('css')
        <style>
            .bg-kanan {
                background-color: #004c98;
            }

        </style>
    @endpush
    <section id="soluciones" class="pt-5">
        <div class="container">
            <div class="text-center">
                <h4 class="source-bold pt-5 pb-3">
                    Sin importar el giro de su negocio, Kananfleet® le ayudará a <br
                        class="d-none d-sm-none d-md-none d-lg-block"> controlar aspectos clave de su operación
                </h4>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                    <a>
                        <img src="/img/icons/saving.svg" width="50">
                        <h5 class="source-bold pt-3">{{-- Mantenimiento y órdenes --}} <br
                                class="d-none d-sm-none d-md-none d-lg-block"> de servicio</h5>
                        <p class="source-regular">
                            Lleve una adecuada programación y seguimiento de sus mantenimientos correctivos, preventivos y
                            predictivos; administre adecuadamente órdenes de servicio, refacciones, herramientas, mecánicos,
                            talleres, y conozca fácilmente estatus de cada órden, tiempos, costos asociados y causas más
                            frecuentes.
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                    <a>
                        <img src="/img/icons/drop.svg" width="50">
                        <h5 class="source-bold pt-3">Recargas y despacho<br class="d-none d-sm-none d-md-none d-lg-block">
                            de combustible</h5>
                        <p class="source-regular">
                            Mantenga un adecuado control de recargas y despachos de combustible en cada una de sus unidades.
                            Nuestros indicadores le ayudarán a conocer de forma más sencilla el rendimiento por unidad o por
                            flota, la frecuencia de carga, el gasto por unidad o flota, y muchas cosas más.
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                    <a>
                        <img src="/img/icons/tire.svg" width="50">
                        <h5 class="source-bold pt-3">Llantas, neumáticos <br class="d-none d-sm-none d-md-none d-lg-block">y
                            baterías</h5>
                        <p class="source-regular">
                            Gestione adecuadamente el inventario de neumáticos, la ubicación por eje y por vehículo, su
                            desgaste, su historial de desplazamientos, estado de vida del neumático, los costos asociados e
                            información detallada de cada uno. De igual manera gestione las baterías asignadas a cada
                            vehículo, así como su nivel de carga.
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                    <a>
                        <img src="/img/icons/truck.svg" width="50">
                        <h5 class="source-bold pt-3">Viajes, estatus de viaje y liquidaciones</h5>
                        <p class="source-regular">
                            Programe fácilmente cada uno de sus viajes y rutas en función a sus pedidos y clientes, conozca
                            el estatus de cada uno de sus viajes, los costos asociados al mismo, y genere liquidaciones de
                            viaje rápidamente. Genere automáticamente la carta de porte y su complemento para cumplir con lo
                            requerido por el SAT (aplica para territorio Mexicano).
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                    <a>
                        <img src="/img/icons/chofer.svg" width="50">
                        <h5 class="source-bold pt-3">Choferes <br class="d-none d-sm-none d-md-none d-lg-block"> y
                            operadores</h5>
                        <p class="source-regular">
                            Mantenga un expediente actualizado por chofer/operador, sus licencias, permisos,
                            certificaciones, infracciones, vehículos que le han sido asignados, incidencias vehiculares,
                            siniestros en los que se ha visto involucrado y en general el historial de su comportamiento.
                        </p>
                    </a>
                </div>

                <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                    <a>
                        <img src="/img/icons/metrics.svg" width="50">
                        <h5 class="source-bold pt-3">Reportes e Indicadores de desempeño</h5>
                        <p class="source-regular">
                            Obtenga de manera rápida reportes y reportes programados de cada uno de los aspectos operativos
                            de sus vehículos, activos o flota. De igual manera consulte indicadores de desempeño clave sobre
                            el uso, desempeño y rentabilidad de cada unidad o de la flota.
                        </p>
                    </a>
                </div>
                <!--<div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                    <a href="">
                     <img src="/img/icons/chofer.svg" width="50">
                     <h5 class="source-bold pt-3">Administración de choferes</h5>
                      <p class="source-regular">
                        Asigne operadores a sus vehículos y activos, lleve el control de sus infracciones, licencias, permisos, certificaciones, e historial de su comportamiento.
                      </p>
                    </a>
                 </div>-->

                <div class="col-lg-4 col-md-12 col-sm-12 text-center pad m-auto">
                    <h2 class="source-bold">¿Quieres saber cómo funciona?</h4>
                        <a class="btn btn-primary" href="/contacto">SOLICITAR DEMO</a> <br>
                        <small class="source-light" style="color: gray;">Explore las soluciones que tenemos para
                            usted.</small>
                </div>
            </div>
        </div>
    </section>
    <section id="mapa-conceptual mt-5">
        <div class="container text-center pb-4">
            <img src="/img/conceptual-kanan.jpg" class="img-fluid" alt="">
        </div>
    </section>
    <section id="video" class="mt-5">
        <div class="bg-azul">
            <div class="container text-center">
                <h3 class="source-bold pb-4 pt-5">¿Por qué elegir Kananfleet® como su administrador de activos?</h4>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/v9Gu9VvFKEg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="source-semibold pt-3" style="color: #fff;">
                        Comience a optimizar los recursos y gastos de su empresa, reduzca costos,<br
                            class="d-none d-sm-none d-md-none d-lg-block"> aumente la productividad de su organización.
                    </p>
                    <a href="/contacto" class="btn btn-secondary btn-lg source-black mb-5">
                        SOLICITAR DEMO
                    </a>
            </div>
        </div>
    </section>
@endsection
