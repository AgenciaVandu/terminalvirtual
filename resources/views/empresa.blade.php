@extends('layouts.kanan')
@section('contenido')
@push('css')
    <style>
        .bg-kanan {
            background-color: #004c98 ;
        }
    </style>
@endpush
<section id="empresa">
    <div class="container text-center">
        <h2 class="source-bold">Más de 15 años de experiencia a su servicio
        </h2>
        <p class="source-regular mb-4">GRUPO ETECNO, es una empresa 100% mexicana ubicada en la ciudad de Mérida, Yucatán, México; propietaria de la tecnología Kananfleet®, la cuál fue desarrollada para ayudar a nuestros clientes a llevar una mejor Administración y Gestión de sus Flotillas Vehiculares y Activos en general. Detrás de esta tecnología hay más de 15 años de experiencia en el sector de las TICs, en la vertical de logística y transporte:
        </p>
        <div class="row espacio-empresa">
            <div class="col">
                <img src="{{asset('/img/icons/user.svg')}}" width=90" alt="">
                <h5 class="source-semibold pt-2">
                    Más de 100 clientes satisfechos
                </h5>
            </div>
            <div class="col">
                <img src="{{asset('/img/icons/logistic.svg')}}" width=90" alt="">
                <h5 class="source-semibold pt-2">
                    Más de 8,000 unidades administradas
                </h5>
            </div>
            <div class="col">
                <img src="{{asset('/img/icons/latin-a.svg')}}" width=90" alt="">
                <h5 class="source-semibold pt-2">
                    Clientes en México, Centro América, Sur América y el Caribe
                </h5>
            </div>
        </div>
    </div>
</section>
<!--<section id="mision">
    <div class="container">

    </div>
</section>-->
<section id="clientes">
    <div class="container text-center">
        <div class="carousel">
            <div class="carousel__contenedor mb-5">
                <button aria-label="anterior" class="carousel__anterior">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="carousel__lista2">
                    <!--1-->
                    <div class="carousel__elemento">
                        <div class="row">
                            <a href="">
                                <div class="col">
                                    <img src="{{asset('/img/clientes/coca.png')}}" class="img-fluid">
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--2-->
                    <div class="carousel__elemento">
                        <div class="row">
                            <a href="">
                                <div class="col">
                                    <img src="{{asset('/img/clientes/explosivos.png')}}" class="img-fluid">
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--3-->
                    <div class="carousel__elemento">
                        <div class="row">
                            <a href="">
                                <div class="col">
                                    <img src="{{asset('/img/clientes/hertz.png')}}" class="img-fluid">
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--4-->
                    <div class="carousel__elemento">
                        <div class="row">
                            <a href="">
                                <div class="col">
                                    <img src="{{asset('/img/clientes/squirt.png')}}" class="img-fluid">
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--5-->
                    <div class="carousel__elemento">
                        <div class="row">
                            <a href="">
                                <div class="col">
                                    <img src="{{asset('/img/clientes/flosol.png')}}" class="img-fluid">
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--6-->
                    <div class="carousel__elemento">
                        <div class="row">
                            <a href="">
                                <div class="col">
                                    <img src="{{asset('/img/clientes/technip.png')}}" class="img-fluid">
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
    <div class="container pt-4 pb-4 bord">
        <div class="row p-3">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <p class="source-regular m-auto pt-3">
                Kananfleet® cuenta con la certificación de SAP® como producto Integrado al ERP Business One.  Esta certificación nos ha permitido ofrecer a clientes de Business One en toda América Latina, nuestro producto para así ofrecerles un valor agregado.
            </p>
            <a href="/sap" class="btn btn-primary mt-3">SOLICITAR DEMO</a>
            </div> 
            <!--Logotipo de clientes-->
            <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                <img src="{{asset('/img/sap-logo-4.svg')}}" alt="" width="img-fluid">
            </div>
        </div>
    </div>
</section>

@endsection
