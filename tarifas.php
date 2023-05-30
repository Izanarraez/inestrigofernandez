<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifas</title>

    <?php require_once("plantillas/links.html")?>

    <?php require_once("plantillas/Bootstrap.html")?>
</head>
<body>

    <?php require_once("plantillas/Navbar.html")?>
    

    <section class="container-fluid bg-reloj">

        <div class="row">
            <div class="col-12 bg-dark text-light bg-relojTi">
                <h3 class="text-center">Tarifas</h3>
            </div>
        </div>
       <div class="row justify-content-center">
           <div class="col-8 text-light">
                <div class="row">
                    <div class="col-12 col-md-6 justify-content-end bg-relojT">
                        <h5 class="mt-5">Duración</h5>
                        <p class="mt-4">
                            Las sesiones tienen una duración de entre 45 y 50 minutos.
                        </p> 
                        <h5 class="mt-5">Precios</h5>
                        <ul class="mt-4">
                            <li>
                                Una sesión: 60€
                            </li>
                            <li>
                                Bonos de 5 sesiones: 250€
                            </li>
                            <!--<li>
                                Bonos de 10 sesiones: 450€
                            </li>-->
                        </ul>  
                    </div>
                    <div class="col-12 col-md-6 bg-relojT">
                        <h5 class="mt-5">Convenios</h5>
                        <p class="mt-4">
                            También se ofrecen tarifas especiales para empleados de empresas con las que tenemos convenio y en caso de bajos ingresos. No dudes en consultar.
                        </p>
                        <div class="row align-items-center my-4">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="contacto.php" class="btn btn-warning h-5 mx-2">Contactanos</a>
                                <a href="pedirCita.php" class="btn btn-warning h-5 mx-2">Pide Cita</a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>

    </section>
    
    <?php require_once("plantillas/Footer.php")?>

    <?php require_once('plantillas/Whatsapp.html')?>

</body>
</html>