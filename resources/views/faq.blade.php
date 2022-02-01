@extends('layouts.kanan')
@section('contenido')
@push('css')
    <style>
        .bg-kanan {
            background-color: #004c98 ;
        }
    </style>
@endpush
<section id="faq" class="pb-5">
    <div class="container">
        <h1 class="source-bold pb-4">
            Preguntas frecuentes
        </h1>
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left source-bold" style="color: #fff;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Qué es Kananfleet?
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <h3 class="source-bold">¿Qué es Kananfleet?</h4>
                        <p class="source-regular">
                            KANANFLEET® es una tecnología que ayuda a la Administración y Gestión de su Flota Vehicular y Activos, ya sean unidades de transporte terrestre o marítima, maquinaria pesada, equipo en general .KANANFLEET® cuenta con una versión móvil, para controlar en ruta aspectos como las recargas de combustible, incidencias sobre el vehículo, incidencias sobre las llantas, estatus de viaje, gastos de viaje, reportes de órdenes de servicio, horas de productividad, etc.
                        </p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Que preguntas clave contesta Kananfleet?
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3 class="source-bold">
                                ¿Que preguntas clave contesta Kananfleet?
                            </h3>
                            <p class="source-regular">
                                Ayudamos a administrar y gestionar la flota vehicular o activos en general, mantener controlados los costos operativos y monitorear los indicadores de desempeño de la misma. Soportamos la toma de decisiones, contestando algunas de las preguntas clave asociada con los activos:
                            </p>
                            <ul>
                                <li class="source-regular">¿Cuál es la disponibilidad de mis vehículos o activos?</li>
                                <li class="source-regular">¿Cuáles están fuera de servicio y porque razón?</li>
                                <li class="source-regular">¿Cuánto me cuesta operar cada unidad?</li>
                                <li class="source-regular">¿Cuánto estoy perdiendo en combustible, llantas y mantenimientos?</li>
                                <li class="source-regular">¿Cuántas y cuáles unidades están asignadas a viajes?</li>
                                <li class="source-regular">¿Cuánto me cuesta cada viaje?</li>
                                <li class="source-regular">¿Cuánto me cuesta cada viaje?</li>
                            </ul>
                        </div>

                    </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Por qué es importante?
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <h3 class="source-bold">¿Por qué es importante?</h3>
                        <p class="source-regular">
                            La industria del transporte y la logística es la columna vertebral de cualquier economía y la fuerza impulsora de todos los sectores, ya sea la agricultura, la manufactura o los servicios.
                            Como toda industria se enfrenta a retos muy importantes, entre ellos:
                        </p>
                        <div class="text-center">
                            <img src="/img/banners/importante.svg" alt="" class="img-fluid">
                         </div>
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      ¿Para que giros es util?
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    <!--<p class="source-regular">
                        Ayudamos a administrar y gestionar la flota vehicular o activos en general, mantener controlados los costos operativos y monitorear los indicadores de desempeño de la misma.
                      </p>-->
                    <p class="source-regular">Empresas de cualquier giro que cuenten con vehículos o activos para su proceso comercial o productivo, y que deben mantenerse en perfecto estado de uso para no afectar la operación y rentabilidad del negocio.</p>
                  </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingfive">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                      ¿Cuáles son los activos ideales?
                    </button>
                  </h2>
                </div>
                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                  <div class="card-body">
                    <p class="source-regular">
                        Cualquiera que sea su giro y tipo de activo, requiere de una adecuada administración para no perder el control del costo asociado y mantener su rentabilidad.
                      </p>
                      <div class="text-center">
                        <img src="/img/activos.png" alt="" class="img-fluid">
                      </div>
                  </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingsix">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        ¿Con que sistemas es compatible?
                    </button>
                  </h2>
                </div>
                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                  <div class="card-body">
                    <p class="source-regular">
                        Kananfleet cuenta con una versión certificada por SAP a nivel internacional e integrada al ERP SAP B1.
                      </p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
