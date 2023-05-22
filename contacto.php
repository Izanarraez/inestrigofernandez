<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    <?php require_once("plantillas/links.html")?>

    <?php require_once("plantillas/Bootstrap.html")?>

</head>
<body>
    
    <?php require_once("plantillas/Navbar.html")?>
    

    <section class="container-fluid">

        <div class="row">
            <div class="col-12 bg-dark text-light">
                <h3 class="text-center">Contacto</h3>
            </div>
            <div class="col-12 my-3 d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.97622185636!2d-3.691775623513976!3d40.49790885069385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422bd9175daf99%3A0x4b0cf71f62e8c71c!2sC.%20Afueras%20a%20Valverde%2C%2016%2C%2028034%20Madrid!5e0!3m2!1ses!2ses!4v1684758742432!5m2!1ses!2ses" width="2000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="d-block w-100" title="Ubicación en Google Maps"></iframe>
            </div>
            <div class="col-12 col-md-4 mt-4 d-flex justify-content-center flex-wrap">
                <h3 class="text-center w-100">Contacto</h3>
                <p class="w-75 ms-5"><?php require_once('svg/telefono.svg')?>  699 673 451</p>
                <p class="w-75 ms-5"><?php require_once('svg/gmail.svg')?>  itfserviciopsicología@gmail.com</p>
            </div>
            <div class="col-12 col-md-4 mt-4 d-flex justify-content-center flex-wrap">
                        <h3 class="text-center w-100">Como llegar</h3>
                        <div class="row w-100">
                            <div class="col-12 text-center">
                                <a href="https://www.google.es/maps/place/C.+Afueras+a+Valverde,+16,+28034+Madrid/@40.4979089,-3.6917756,17z/data=!3m1!4b1!4m6!3m5!1s0xd422bd9175daf99:0x4b0cf71f62e8c71c!8m2!3d40.4979048!4d-3.6892007!16s%2Fg%2F11csntgg44?hl=es" class="btn btn-warning w-50" style="text-decoration: none; color:black" target="_blank">Pulsa Aquí</a>
                            </div>
                        </div>
                        <p class=" text-center w-100 mt-1"><?php require_once('svg/ubicacion.svg')?>  Travesía vistas a la moraleja, 16. 28034 MADRID</p>
            </div>
            <div class="col-12 col-md-4 mt-4 d-flex justify-content-center flex-wrap">
                <h3 class="text-center w-75 me-5">Horarios</h3>
                <ul class="me-3">
                    <li>Lunes de 10:00 a 21:00</li>
                    <li>Martes de 10:00 a 21:00</li>
                    <li>Miercoles de 10:00 a 21:00</li>
                    <li>Jueves de 10:00 a 21:00</li>
                    <li>Viernes de 15:00 a 21:00</li>
                    <li>Sabado de 15:00 a 21:00</li>
                </ul>
            </div>
        </div>
        
    </section>
    
    <?php require_once("plantillas/Footer.php")?>

    <?php require_once('plantillas/Whatsapp.html')?>
    
</body>
</html>