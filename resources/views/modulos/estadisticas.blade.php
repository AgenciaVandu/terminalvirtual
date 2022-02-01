@extends('layouts.kanan')
@section('contenido')
@push('css')
<link rel="stylesheet" href="{{asset('/css/modulos.css')}}">
@endpush
<header>
    <div class="bg-estadisticas">
     <div class="container">
         <div class="cabecera-titular-3">
          <div class="row">
              <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                  <h1 class="source-bold">
                     Datos Estadísticos
                  </h2>
                  <p class="source-regular">
                     Consulte información en TIEMPO REAL sobre el presupuesto ejercido en Mantenimiento y Combustible
                  </p>
                  <a href="" class="btn btn-outline-light source-black">
                      SOLICITAR DEMO
                  </a>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 imagen m-auto">
                  <img src="/img/banners/8-estadisticas/1-banner.png" class="img-fluid" alt="">
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
                 <img src="/img/banners/8-estadisticas/2-visualicesu.png" class="img-fluid" alt="">
             </div>
             <div class="col-lg-5 col-md-12 col-sm-12 right m-auto">
                 <h4 class="source-bold pb">Visualice su información EN TIEMPO REAL.</h4>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">Gestione el presupuesto anual asignado a <br class="d-none d-sm-none d-md-none d-lg-block"> Mantenimiento y Combustible.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Consulte presupuestos ejercidos en los rubros<br class="d-none d-sm-none d-md-none d-lg-block"> de Mantenimiento y Combustible.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">
                             Consulte información por año, mes, semana y día.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                         <div class="check pr-2">
                             <span class="icon-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                         </div>
                         <p class="source-semibold">Exporte las gráficas a varios formatos.</p>
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
     <div class="container pt-5">
         <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
             <div class="carousel-inner">
               <div class="carousel-item active">
                 <div class="row">
                     <div class="col-lg-6 col-md-12 col-sm-12 d-flex m-auto justify-content-center">
                         <h1 class="source-black">Estadísticas <br> Por día</h1>
                     </div>
                     <div class="col-lg-6 col-md-12 col-sm-12">
                         <img src="/img/banners/8-estadisticas/3-Slide/1-pordia.png" loading="lazy" class="d-block w-100" alt="...">
                     </div>
                 </div>
               </div>
               <div class="carousel-item">
                 <div class="row">
                     <div class="col-lg-6 col-md-12 col-sm-12 d-flex m-auto justify-content-center">
                         <h1 class="source-black">Estadísticas <br> Por mes</h1>
                     </div>
                     <div class="col-lg-6 col-md-12 col-sm-12">
                         <img src="/img/banners/8-estadisticas/3-Slide/2-pormes.png" loading="lazy" class="d-block w-100" alt="...">
                     </div>
                 </div>
               </div>
               <div class="carousel-item">
                 <div class="row">
                     <div class="col-lg-6 col-md-12 col-sm-12 d-flex m-auto justify-content-center">
                         <h1 class="source-black">Estadísticas <br> Por año</h1>
                     </div>
                     <div class="col-lg-6 col-md-12 col-sm-12">
                         <img src="/img/banners/8-estadisticas/3-Slide/3-poranio.png" loading="lazy" class="d-block w-100" alt="...">
                     </div>
                 </div>
               </div>
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
