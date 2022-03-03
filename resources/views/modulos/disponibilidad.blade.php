@extends('layouts.kanan')
@section('contenido')
@push('css')
<link rel="stylesheet" href="{{asset('/css/modulos.css')}}">
@endpush
<header>
    <div class="bg-disponibilidad">
     <div class="container">
         <div class="cabecera-titular-3">
          <div class="row centro">
              <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                  <h2 class="source-bold panel-de">
                    PANEL DE DISPONIBILIDAD
                  </h2>
                  <p class="source-regular">
                     Consulte y agende el mantenimiento de todos sus activos
                  </p>
                  <a href="/contacto" class="btn btn-outline-light source-black">
                      SOLICITAR DEMO
                  </a>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 imagen m-auto">
                  <img src="/img/banners/7-disponibilidad/1-banner.png" class="img-fluid" alt="">
              </div>
          </div>
         </div>
      </div>
    </div>
 </header>
 <section id="kanan-mobile">
     <div class="container-fluid">
         <div class="row pt-5">
             <div class="col-lg-7 col-md-12 col-sm-12 orden text-center">
                 <img src="/img/banners/7-disponibilidad/2-conozcalacantidad.png" class="img-fluid" alt="">
             </div>
             <div class="col-lg-5 col-md-12 col-sm-12 right m-auto">
                 <h4 class="source-bold pb-3">Toda su información a un solo “CLICK”.</h4>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            ADMINISTRE sus unidades de transporte / activos <br> desde una sola pantalla.</p>
                        {{-- <p class="source-semibold">
                            Visualización de órdenes de servicio programadas y en mantenimiento.</p> --}}
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            EXPEDIENTE FOTOGRÁFICO de cada vehículo / activo.</p>
                        {{-- <p class="source-semibold">
                            Vehículos en estado de incidencia.</p> --}}
                     </div>
                 </li>
                 <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        GESTORÍA de documentos por cada vehículo / activo.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        SEMÁFORO DE COLORES para identificar la disponibilidad <br> de la flotilla / activos.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        ACCESOS DIRECTOS para gestionar información <br> de manera más dinámica.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        EXPORTACIÓN de información en varios formatos (PDF, Excel, CSV).</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        REPORTES informativos y estadísticos.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        Alertas vía EMAIL y en plataforma.</p>
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
