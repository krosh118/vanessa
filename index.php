<?php

// Iniciamos la sesión
session_start();

// Comprobamos si ya inició sesión
if(isset($_SESSION['userName'])){
    
    // El usuario ya ha iniciado sesión, lo redireccionamos a la pantalla principal
    $destino = "";
    
}else{
    
    // Creamos e inicializamos las variables para el header de la página
    $titulo = "SIGEPSA";
    $js = '<script src="./js/login.js"></script>';
    $css = '<link href="./css/login.css" rel="stylesheet">';
    
    // El usuario no ha iniciado sesión, armamos el formulario respectivo
    include './header.php';
?>
    <body class="colorLogin">

        <section id="login">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="cabecera">
<!--                            <img src="images/Logo.png">-->
                            <p style="font-size: 67px; font-family: 'roboto';">SIGEPSA</p>
                            <p style="font-size: 14px; font-family: 'roboto';">Sistema de Gestion de Pagos y Solvencia de Alumnos</p>
                        </div>
                    </div>
                </div>
                <div class="row" id="divForm">
                    <div class="col-xs-12">
                        <div class="form-wrap colorForm">
                            <h1>INICIO DE SESIÓN</h1>
                            <div class="err" id="add_err"></div>
                            <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                                <div class="form-group">
                                    <label for="usuario" class="sr-only">Usuario</label>
                                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required>
                                </div>
                                <div class="form-group">
                                    <label for="pass" class="sr-only">Contraseña</label>
                                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña" required>
                                </div>
                                <div class="checkbox">
                                    <span class="character-checkbox" onclick="showPassword()"></span>
                                    <span class="label">Mostrar contraseña</span>
                                </div>
                                <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Iniciar sesión">
                            </form>
                            <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">¿Olvidaste tu contraseña?</a>

                        </div>
                    </div> <!-- /.col-xs-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section>

        <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                        <h4 class="modal-title">RECUPERAR CONTRASEÑA</h4>
                    </div>
                    <div class="modal-body">
                        <p>Ingresa tu cuenta de correo electrónico</p>
                        <input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-custom">Recuperar</button>
                    </div>
                </div> <!-- /.modal-content -->
            </div> <!-- /.modal-dialog -->
        </div> <!-- /.modal -->

        <?php include './footer.php';?>
      
    </body>
</html>
<?php    
}

?>