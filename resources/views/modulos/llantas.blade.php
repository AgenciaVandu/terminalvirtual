@extends('layouts.kanan')
@section('contenido')
@push('css')
<link rel="stylesheet" href="{{asset('/css/modulos.css')}}">
@endpush
<header>
    <div class="bg-mantenimiento">
     <div class="container">
         <div class="cabecera-titular-1">
          <div class="row centro">
              <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                  <h1 class="source-bold">
                    NEUMÁTICOS / LLANTAS
                  </h2>
                  <p class="source-regular">
                     Obtenga el máximo aprovechamiento de
                     sus neumáticos gestionando de manera gráfica
                     sus posiciones
                  </p>
                  <a href="/contacto" class="btn btn-outline-light source-black">
                      SOLICITAR DEMO
                  </a>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 m-auto">
                  <img src="/img/banners/5-llantas/1-banner.png" class="img-fluid" alt="">
              </div>
          </div>
         </div>
      </div>
    </div>
 </header>
 <section id="kanan-mobile">
     <div class="container-fluid">
         <div class="row pt-5">
             <div class="col-lg-6 col-md-12 col-sm-12 orden text-center m-auto">
                 <img src="/img/banners/5-llantas/2-gestionesusneumaticos.png" class="img-fluid" alt="">
             </div>
             <div class="col-lg-6 col-md-12 col-sm-12 right m-auto">
                 <h4 class="source-bold pb">Máximo aprovechamiento de sus <br class="d-none d-sm-none d-md-none d-lg-block">neumáticos / llantas</h4>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">Módulo compatible con KANANFLEET MOBILE® (Android).</p>
                         {{-- <p class="source-semibold">Visualización gráfica de llantas.</p> --}}
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">VISUALIZACIÓN GRÁFICA de neumáticos / llantas</p>
                        {{-- <p class="source-semibold">Registro de presión y desgaste.</p> --}}
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            Registro de INCIDENCIAS de neumáticos / llantas <br> con FOTOGRAFÍAS y GEOPOSICIÓN</p>
                         {{-- <p class="source-semibold">
                             Registro de incidencia de las llantas.</p> --}}
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">CHASIS VIRTUAL para la administración de neumáticos / llantas</p> 
                        {{-- <p class="source-semibold">Registro de cambio de llantas en las unidades.</p> --}}
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            PROGRAMACIÓN DE ALERTAS para cambio <br> de neumáticos / llantas</p>
                        {{-- <p class="source-semibold">
                             Chasis virtual para la asignación de llantas.</p> --}}
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            PARAMETRIZACIÓN DEL DESGASTE por kilómetro<br> recorrido y/o por treadware</p>
                         {{-- <p class="source-semibold">
                             Control de llantas de refacción en unidades.</p> --}}
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            Control eficiente por <br> REENCAUCHAMIENTO / REVESTIMIENTO / RENOVACIÓN</p>
                         {{-- <p class="source-semibold">
                             Programación de alertas para cambio de llantas.</p> --}}
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            Gestión de neumáticos / llantas por SEMÁFORO DE COLORES</p>
                        {{-- <p class="source-semibold">
                            Parametrización del desgaste por llanta.</p> --}}
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            REPORTES informativos y estadísticos</p>
                        {{-- <p class="source-semibold">
                            Monitoreo con semáforo de colores.</p> --}}
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         {{-- <p class="source-semibold">
                             Visualización de inventario de llantas activas.</p> --}}
                             <p class="source-semibold">
                                Alertas vía EMAIL y en plataforma</p>
                     </div>
                 </li>
                 {{-- <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Visualización de pila de desecho de llantas.</p>
                     </div>
                 </li> --}}
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Entre otras bondades</p>
                     </div>
                 </li>
                 <li>
                     <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a>
                 </li>
             </div>
         </div>
     </div>
 </section>
 <section id="hightlights-1">
     <div class="container-fluid pt-5">
         <div class="row">
             <div class="col-lg-6 col-md-12 col-sm-12 left m-auto">
                 <h4 class="source-bold pb-3">Reportes, la forma más práctica de tener la información más importante de sus activos <br> <span class="source-regular" style="color: gray; font-size: .7em;">En el módulo de llantas es posible generar reportes de todo tipo, así como la información de mayor importancia para la toma de decisiones.</span></h4>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">Reporte de Kilometraje acumulado por uso.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Reporte de desgaste vs kilometraje recorrido.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Reporte de inversión en llantas.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Historial de uso de llantas.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                            Entre otras bondades.</p>
                     </div>
                 </li>

                 <li>
                     <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a>
                 </li>
             </div>
             <div class="col-lg-6 col-md-12 col-sm-12 text-right p-0">
                 <img src="/img/banners/5-llantas/3-reportes.png" class="img-fluid" alt="">
             </div>
         </div>
     </div>
 </section>
 <section id="CTA" class="m-5">
     <div class="container text-center">
         <div class="pad-1">
             <h3 class="source-bold">¿Ya cuenta con un sistema de control administrativo?</h3>
             <p class="source-regular" style="color: gray;">Kananfleet ® se adapta a cualquier entorno, no importa si es un software de
                 contabilidad, CRM o ERP. Nosotros creamos las integraciones necesarias.
             </p>
             <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a> <br>
             <small class="source-light">Pónganse en contacto con nosotros</small>
         </div>
     </div>
 </section>
@endsection
