@extends('layouts.kanan')
@section('contenido')
@push('css')
<link rel="stylesheet" href="{{asset('/css/modulos.css')}}">
@endpush
<header>
    <div class="bg-disponibilidad">
     <div class="container">
         <div class="cabecera-titular-3">
          <div class="row">
              <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                  <h1 class="source-bold">
                     Panel de Disponibilidad
                  </h2>
                  <p class="source-regular">
                     Consulte y agende el mantenimiento de todos sus activos
                  </p>
                  <a href="" class="btn btn-outline-light source-black">
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
                 <h4 class="source-bold pb-3">Calendario disponible para la visualización de los vehículos que están asignados a mantenimiento.</h4>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Visualización de órdenes de servicio programadas y en mantenimiento.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Vehículos en estado de incidencia.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Entre otros.</p>
                     </div>
                 </li>
                 <li>
                     <a href="" class="btn btn-primary">SOLICITAR DEMO</a>
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
             <a href="" class="btn btn-primary">SOLICITAR DEMO</a> <br>
             <small class="source-light">Pónganse en contacto con nosotros</small>
         </div>
     </div>
 </section>
@endsection
