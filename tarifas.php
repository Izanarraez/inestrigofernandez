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

       <div class="row justify-content-end">
           <div class="col-12 text-light">
                <div class="row">
                    <div class="col-12 bg-dark text-light">
                        <h3>Tarifas</h3>
                    </div>
                    <div class="col-12 col-md-8 justify-content-end">
                        <h5 class="my-4">Duración</h5>
                        <p>
                            Las sesiones suelen tener una duración de entre 45 y 50 minutos.
                        </p> 
                        <h5 class="my-4">Precios</h5>
                        <ul>
                            <li>
                                Una sesión: 60€
                            </li>
                            <li>
                                Bonos de 5 sesiones: 250€
                            </li>
                            <li>
                                Bonos de 10 sesiones: 450€
                            </li>
                        </ul>
                        <h5 class="my-4">Convenios</h5>
                        <p>
                            También tengo convenios con empresas y precios especiales en casos de bajos ingresos.
                        </p>
                    </div>
                </div>
           </div>
        </div>

    </section>
    
    <?php require_once("plantillas/Footer.php")?>

    <?php require_once('plantillas/Whatsapp.html')?>

</body>
</html>