@extends('layouts.kanan')
@section('contenido')
@push('css')
<link rel="stylesheet" href="{{asset('/css/modulos.css')}}">
@endpush
<header>
    <div class="bg-carta-porte">
     <div class="container">
         <div class="cabecera-titular-1">
          <div class="row centro">
              <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                  <h1 class="source-bold">
                    VIAJES / COMPLEMENTO CARTA PORTE
                  </h2>
                  <p class="source-regular">
                     Gestione cartas porte, liquidación de viaje y caja chica
                  </p>
                  <a href="/contacto" class="btn btn-outline-light source-black">
                      SOLICITAR DEMO
                  </a>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 imagen m-auto">
                  <img src="/img/banners/3-cartaporte/1-banner.png" class="img-fluid" alt="">
              </div>
          </div>
         </div>
      </div>
    </div>
 </header>
 <section id="kanan-mobile">
     <div class="container-fluid">
         <div class="row pt-5">
             <div class="col-lg-7 col-md-12 col-sm-12 orden text-center m-auto">
                 <img src="/img/banners/3-cartaporte/2-tengaelcontrol.png" class="img-fluid" alt="">
             </div>
             <div class="col-lg-5 col-md-12 col-sm-12 right m-auto">
                 <h4 class="source-bold pb-3">Obtenga el control de sus viajes operativos
                     {{-- Tenga el control sobre la Carta Porte. --}}</h4>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            Módulo compatible con KANANFLEET MOBILE® (Android).
                        </p>
                        {{--  <p class="source-semibold">
                             Genere cartas porte.</p> --}}
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            Genere su DOCUMENTO DE VIAJE (Carta Porte) <br> de manera dinámica.
                        </p>
                         {{-- <p class="source-semibold">
                             Liquide gastos por viajes generados.</p> --}}
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            Gestión de COMPLEMENTO CARTA PORTE <br> (Documento Tipo Ingreso).
                        </p>
                         {{-- <p class="source-semibold">
                             Gestione la caja chica del viaje.</p> --}}
                     </div>
                 </li>
                 <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        Gestión de COMPLEMENTO CARTA PORTE <br> (Documento Tipo Traslado).
                       </p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        DOCUMENTO DE LIQUIDACIÓN sobre gastos de viaje.
                       </p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        Administración de TRANSFER.
                       </p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        IMPORTACIÓN de archivo CAPUFE sobre cruce de casetas.
                       </p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                        <p class="source-semibold">
                            Configuración de VALES.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                        <p class="source-semibold">
                            SEMÁFORO DE COLORES para identificar ESTATUS DE VIAJE.</p>
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
 {{-- <section id="hightlights-1">
     <div class="container-fluid pt-5">
         <div class="row">
             <div class="col-lg-6 col-md-12 col-sm-12 left m-auto">
                 <h4 class="source-bold pb-3">Reportes, la forma más práctica de tener la información más importante de sus activos <br> <span class="source-regular" style="color: gray; font-size: .7em;">En el módulo de Carta Porte es posible generar reportes de todo tipo, así como la información de mayor importancia para la toma de decisiones.</span></h4>  
                 <li class="source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                        <p class="source-semibold">
                            REPORTES informativos y estadísticos.</p>
                    </div>
                </li>   
                <li class="source-semibold">
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
             <div class="col-lg-6 col-md-12 col-sm-12 text-right p-0">
                 <img src="/img/banners/3-cartaporte/3-reportes.png" class="img-fluid" alt="">
             </div>
         </div>
     </div>
 </section> --}}
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
