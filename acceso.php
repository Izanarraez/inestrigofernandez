<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="copyright" content="Psicología Ines Trigo Fernandez">
    <meta name="author" content="Ines Trigo Fernandez">
    <meta name="description" content="Web de Pisicologio en Madrid">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="img/logo2_nuevo.png">
    <title>Acceso</title>

    <?php require_once("plantillas/links.php")?>

    <?php require_once("plantillas/Bootstrap.html")?>
</head>
<body>
<?php require_once("plantillas/Navbar.php")?>
    

    <section class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-12 col-md-4 m-5">
                <form>
                    <div class="row justify-content-center">
                        <fieldset class="col-12 col-md-12 mt-2">
                            <legend>Usuario</legend>
                            <div class="input_group">
                                <label for="usuario" class="d-none">Usuario</label>
                                <input type="text"
                                    name="usuario"
                                    class="form-control"
                                    placeholder="Usuario"
                                    id="usuario_acceso">
                            </div>
                        </fieldset>
                        <fieldset class="col-12 col-md-12 mt-2">
                            <legend>Contrasena</legend>
                            <div class="input_group">
                                <label for="correo" class="d-none">Contrasena</label>
                                <input type="password"
                                    name="contraseña"
                                    class="form-control"
                                    placeholder="Contraseña"
                                    id="contraseña_acceso">
                            </div>
                        </fieldset>
                        <fieldset class="col-12 d-flex justify-content-center">
                            <a href="#" class="btn btn-rp m-2" id="boton_acceso">Entrar</a>
                        </fieldset>
                </form>
            </div>
        </div>
        
    </section>

    <script src="js/acceso.js"></script>
    
    <?php require_once("plantillas/Footer.php")?>

</body>
</html>