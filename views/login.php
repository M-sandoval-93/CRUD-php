<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>

    <link rel="stylesheet" href="pluggins/Boostrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="pluggins/sweetalert2/sweetalert2.min.css">
</head>
<body>

    <!-- Formulario principal de inicio de sesión -->
    <div id="login">
        <h3 class="text-center text-white display-4">Control de inventario</h3>
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-colum" class="col-md-6">
                    
                    <div id="login-box" class="col-md-12 bg-light text-dark">
                        <form id="login_form" class="form" action="" method="post">
                            <h3 class="text-center text-dark">Iniciar Sesion</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-dark">Usuario</label>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="clave" class="text-dark">Contraseña</label>
                                <input type="password" name="clave" id="clave" class="form-control">
                            </div>

                            <div class="form-gropu text-center">
                                <input type="submit" name="ingresar" value="Ingresar" class="btn btn-dark btn-lg btn-block">
                            </div>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

    
    <script src="pluggins/jQuery/jquery-3.6.0.min.js"></script>
    <script src="pluggins/Boostrap4/js/bootstrap.min.js"></script>
    <script src="pluggins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="js/controller/login.js"></script>

</body>
</html>
