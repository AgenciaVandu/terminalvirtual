@extends('layouts.kanan')
@section('contenido')
@push('css')
    <style>
        .bg-kanan {
            background-color: #004c98 ;
        }
    </style>
@endpush
<section id="mapa-aliados" class="mapa-aliados">
    <div class="container text-center">
        <h2 class="source-bold text-center">Kananfleet® está presente en</h2>
        <img src="/img/mapa-aliados.png" alt="" class="img-fluid">
    </div>
</section>
<section id="aliados">
    <div class="container-fluid">
        <div class="d-none d-sm-none d-md-block d-lg-block">
            <div class="row pt-5 aliados text-center">
                <div class="col-12">
                    <h2 class="source-bold text-center">Nuestros aliados</h2>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/algory.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/b1pro.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/beelog.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/corponet.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/dintec.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/evolve.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/ework.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/GRUPO-CONSULTORES.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/ijam.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/INFORUM.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/interlatin.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/intic.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/kaitzen.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/PRIZMA-SOFTWARE.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/sap.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/sineti.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/sixma.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/soluone.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/vectium.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/xamai.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="{{asset('/img/aliados/zentius.png')}}" alt="" class="img-flui">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img src="/img/aliados/zpertlink.png" alt="" class="img-flui">
                </div>
            </div>
        </div>
        <div class="d-block d-sm-block d-md-none d-lg-none mt-4">
            <div class="carousel">
                <div class="carousel__contenedor mb-5">
                    <button aria-label="anterior" class="carousel__anterior">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="carousel__lista1">
                        <!--1-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col aliado-elemento">
                                        <img src="{{asset('/img/aliados/algory.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--2-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/b1pro.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--3-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/beelog.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--4-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/corponet.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--5-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/dintec.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--6-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/evolve.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--7-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/ework.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--8-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/ijam.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--9-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/INFORUM.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--10-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/interlatin.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--11-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/intic.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--12-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/kaitzen.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--13-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/PRIZMA-SOFTWARE.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--14-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/sap.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--15-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/sineti.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--15-->
                        <div class="carousel__elemento">
                            <div class="row">
                                <a href="">
                                    <div class="col">
                                        <img src="{{asset('/img/aliados/sixma.png')}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <button aria-label="siguiente" class="carousel__siguiente">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="CTA" class="m-5">
    <div class="container text-center">
        <div class="pad-1">
            <h4 class="source-bold">Kananfleet cuenta con un atractivo esquema de negocio, programa de recompensas y apoyo para la generación de oportunidades</h4>
            <p class="source-regular " style="color: gray;">¿Estaría interesado en formar parte de nuestra red de alianzas?
            </p>
            <a href="/contacto" class="btn btn-primary">Enviar un mensaje</a> <br>
            <small class="source-light">Pónganse en contacto con nosotros</small>
        </div>
    </div>
</section>
@endsection
