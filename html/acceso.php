<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Description" content="Control de stock de frutería"/>
        <meta name="keywords" content="fruta, stock, control"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Vicent Calderón Gómez"/>
        <style>
            .bg{
                background-image: url(./../img/loginbackground.webp);
                background-position: center center;
                background-repeat: no-repeat;
            }
        </style>
        <!-- CSS Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Registro</title>
    </head>
    <body>
        

        <div class="container">
            <div class="row">
                <div class="col bg">

                </div>

                <div class="col">
                    <div class="text-end">
                        <img src="./../img/logotipo.jpg" width="48" alt="">
                    </div>
                    <h2 class="fw-bold py-5">Bienvenido</h2>

                    <!--Login-->

                    <form action="#">
                        <div class="mb-4">
                            <label for="user" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="user">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" name="connected" class="form-check-input">
                            <label for="checkbox" class="form-check-label">Mantener iniciado</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Iniciar sesión</button>
                        </div>

                        <div class="my-3">
                            <span>No tienes cuenta? <a href="#">Registrate</a></span><br>
                            <span><a href="#">Recuperar contraseña</a></span>
                        </div>
                    </form>

                    <!--Login con redes sociales-->
                    <div class="container w-100 my-5">
                        <div class="row text-center">
                            <div class="col-12">Iniciar sesión</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-dark w-100 my-1">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <img src="./../img/facebook_logo.png" width="32" alt="Facebook">
                                        </div>

                                        <div class="col-10 text-center">Facebook</div>
                                    </div>
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-danger w-100 my-1">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <img src="./../img/google_logo.png" width="32" alt="Google">
                                        </div>
                                        <div class="col-10 text-center">Google</div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
    <footer>

    </footer>
</html>