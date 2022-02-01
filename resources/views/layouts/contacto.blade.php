 <!-- Modal -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-kanan" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"></h4>
        </div>
        <div class="modal-body">
            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>
            <form  method="POST">
                @csrf
                <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
                </div>
                 <div class="form-group">
                <label for="empresa">Empresa</label>
                <input type="text" class="form-control" id="empresa" name="empresa">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="number" class="form-control" id="telefono" name="telefono">
                </div>
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo">
                </div>
                  <div class="form-group">
                <label for="pagina_web">Página Web</label>
                <input type="text" class="form-control" id="pagina_web" name="pagina_web">
                </div>
                <div class="form-group" align="center">
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                    <div class="g-recaptcha pt-2"  id="g-recaptcha-contacto" data-sitekey="6Lf4eMgUAAAAABHhv3lEMfIbP4tQQtqnHtJZn5Y2"></div>
                </div>
                <a href="#" id="enviar">
                    <img src="{{ asset('img/banners/boton/verde.png') }}" class="img-responsive center-block boton" alt="">
                </a>
                </form>
        </div>
    </div>
    </div>
</div>
