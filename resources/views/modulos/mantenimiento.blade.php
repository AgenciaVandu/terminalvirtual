@extends('layouts.kanan')
@section('contenido')
@push('css')
<link rel="stylesheet" href="{{asset('/css/modulos.css')}}">
@endpush
<header>
    <div class="bg-mantenimiento">
     <div class="container">
         <div class="cabecera-titular-1">
          <div class="row">
              <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                  <h1 class="source-bold">
                      Mantenimiento
                  </h2>
                  <p class="source-regular">
                      Gestione de manera eficiente los servicios de mantenimiento preventivo y correctivo
                  </p>
                  <a href="" class="btn btn-outline-light source-black">
                      SOLICITAR DEMO
                  </a>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 m-auto">
                  <img src="/img/banners/2-mantenimiento/1-banner.png" class="img-fluid" alt="">
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
                 <img src="/img/banners/2-mantenimiento/2-organiceyprograme.png" class="img-fluid" alt="">
             </div>
             <div class="col-lg-5 col-md-12 col-sm-12 right m-auto">
                 <h4 class="source-bold pb-3">Organice y programe<br class="d-none d-sm-none d-md-none d-lg-block">
                     los servicios de mantenimiento</h4>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">Registro de mantenimiento y sus costos.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Parametrización de alertas de mantenimiento.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Alertas por vencimiento de pólizas.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">Alertas por vencimiento de mantenimiento.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Panel de disponibilidad según estatus.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Información a detalle de sus activos.</p>
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
 <section id="hightlights-1">
     <div class="container-fluid pt-5">
         <div class="row">
             <div class="col-lg-6 col-md-12 col-sm-12 left m-auto">
                 <h4 class="source-bold pb-3">Reportes, la forma más práctica de tener la información más importante de sus unidades <br> <span class="source-regular" style="color: gray; font-size: .7em;">En el módulo de mantenimiento es posible generar reportes de todo tipo, así como la información de mayor importancia para la toma de decisiones.</span></h4>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">Reporte de costos por tipo de mantenimiento.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Reporte de historial de mantenimiento.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Reporte de próximos servicios a vencer.</p>
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
             <div class="col-lg-6 col-md-12 col-sm-12 text-right p-0">
                 <img src="/img/banners/2-mantenimiento/3-reportesmantenimiento.png" class="img-fluid" alt="">
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
