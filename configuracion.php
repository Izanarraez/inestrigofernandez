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
    <title>Configuracion</title>

    <?php require_once("plantillas/links.html")?>

    <?php require_once("plantillas/Bootstrap.html")?>
</head>
<body>

    <?php require_once("plantillas/Navbar.php")?>
    

    <section class="container-fluid">

        <div class="row">
            <div class="col-12">
                <form>
                    <div class="row">
                        <fieldset class="col-12 col-md-12 mt-2">
                                    <legend>Inicio</legend>
                                    <div class="input_group">
                                        <label for="logo_1" class="d-none">Logo</label>
                                        <input type="text"
                                            name="logo_1"
                                            class="form-control"
                                            placeholder="Cambiar logo"
                                            id="logo_1">
                                    </div>
                                    <div class="input_group">
                                        <label for="nv_1" class="d-none">Fondo barra de navegacion</label>
                                        <input type="text"
                                            name="nv_1"
                                            class="form-control"
                                            placeholder="Cambiar fondo barra de navegacion"
                                            id="nv_1">
                                    </div>
                                    <div class="input_group">
                                        <label for="img_1" class="d-none">Imagen de fondo</label>
                                        <input type="text"
                                            name="img_1"
                                            class="form-control"
                                            placeholder="Cambiar imagen de fondo"
                                            id="img_1">
                                    </div>
                                    <div class="input_group">
                                        <label for="epp_1" class="d-none">Enlaces de pie de pagina</label>
                                        <input type="text"
                                            name="epp_1"
                                            class="form-control"
                                            placeholder="Cambiar color enlaces de pie de pagina"
                                            id="epp_1">
                                    </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>

    </section>
    
    <?php require_once("plantillas/Footer.php")?>

    <?php require_once('plantillas/whatsapp.html')?>

</body>
</html>