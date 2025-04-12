<?php
include('../App/config.php');
include('../Layout/sesion.php');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Better A&A</title>

        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo $URL;?>Public/css/login_admin.css">
        <!--Librería SweetAlert2-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">

        <?php
            session_start();
            if(isset($_SESSION['mensaje'])){
                $respuesta = $_SESSION['mensaje'];  ?>
                <script>
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "<?php echo $respuesta; ?>",
                        showConfirmButton: false,
                        timer: 3000
                    });
                </script>
        <?php
        }
        ?>

            <center>
                <img src="https://img.freepik.com/vector-gratis/analistas-demanda-dandose-mano-pantallas-portatiles-planificando-demanda-futura-planificacion-demanda-analisis-demanda-ilustracion-concepto-pronostico-ventas-digitales_335657-2098.jpg?w=826&t=st=1704333496~exp=1704334096~hmac=cda71f54c628986ce94a8eaeaa630bf3c56b3841b4429fd23978a71230aec2b3" alt="" width="300px">
            </center>
            <br>
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Sistema de</b><br>Ventas Betterware</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Ingrese sus datos</p>

                    <form action="../app/controlers/login/ingreso.php" method="post">
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password_user" class="form-control" placeholder="Contraseña">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <p class="mb-0">
                        <a href="<?php echo $URL;?>Admin/registro_admin.php" class="text-center">Registrar nueva cuenta</a>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
        <!-- /.card -->
        </div>
        <!-- /.login-box -->
    </body>
</html>

