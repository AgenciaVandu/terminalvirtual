@extends('layouts.Kananfleet2')

@section('content')
<header id="first" class="cht">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 gracias">
                <h1 class="lead">Gracias por su interés <br>en Kananfleet® & Kananfleet Mobile®</h1>
                <p class="parrafo-intro">Complete el siguiente formulario y nos aseguraremos de que un agente <br>
                    se comunique en breve con usted para organizar una demo de nuestra solución.</p>
            </div>
            <div class="col-lg-6 col-md-12 formulario">
                <div class="card">
                    <form action="post">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="empresa">Empresa</label>
                            <input type="text" class="form-control" id="empresa" name="empresa" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="text" class="form-control" id="correo" name="correo" required>
                        </div>
                        <div class="form-group">
                            <label for="pagina_web">Página Web</label>
                            <input type="text" class="form-control" id="pagina_web" name="pagina_web" required>
                        </div>
                        <div class="form-group" align="center">
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                            <div class="g-recaptcha pt-2"  id="g-recaptcha-contacto" data-sitekey="6Lf4eMgUAAAAABHhv3lEMfIbP4tQQtqnHtJZn5Y2"></div>
                        </div>
                        <a href="#" id="enviar">
                            <img src="{{ asset('img/banners/boton/verde.png') }}" class="img-responsive center-block boton" alt="">
                        </a>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</header>
<section id="carousel">
    <div class="container clientes-titulo">
        <div class="row clientes">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('img/logos-1-1.png') }}" class="img-responsive" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('img/logos-2-2.png') }}" class="img-responsive" alt="">
            </div>
        </div>
    </div>
</section>
<section id="opiniones">
    <div class="container">
        <div class="row">
            <h1 class="lead" style="text-align: center;">Descubra por que confían en nosotros</h1>
            <div class="col-lg-7 col-md-7 col-sm-12 uno">
                <img src="{{ asset('img/Logo-CocaCola.png') }}" class="img-fluid logo-1" style="width: 40%;" alt="">
                <p class="review">Amablemente me permito recomendar a la empresa ETECNO SA DE CV, así como las
                    plataformas tecnológicas KANANFLEET® y KANANFLEET MOBILE®.  Cabe mencionar que dichas plataformas
                    fueron implementadas en la empresa BEPENSA REPÚBLICA DOMINICANA (COCA-COLA) con el objetivo de
                    administrar de manera eficiente los activos (fijos y móviles).
                    </p>
                <h5 class="t-review">Julio Acosta</h5>
                <p class="review">BEPENSA DOMINICANA.</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 dos-dos">
                <img src="/img/hertz-logo.png" class="img-fluid logo-2" style="width: 40%;" alt="">
                <p class="review-1">Por este medio hacemos constar que la empresa Etecno SA de CV es proveedor
                    nuestro y actualmente está implementando el software de mantenimiento “Kananleet®” para nuestra
                    flota de vehículos de todas nuestras sucursales en Honduras.</p>
                <h5 class="t-review">Rodolfo Galdámez</h5>
                <p class="review">Líder de proyectos.</p>
            </div>
        </div>
    </div>
</section>

@endsection
