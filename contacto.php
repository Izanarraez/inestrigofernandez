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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.3369984300368!2d-3.6863336682663492!3d40.49782024745823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422bdee900fc2d%3A0xb9b3eca08212decd!2sTr.%C2%AA%20Vistas%20a%20la%20Moraleja%2C%2016%2C%2028034%20Madrid!5e0!3m2!1ses!2ses!4v1683108154954!5m2!1ses!2ses" width="2000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="d-block w-100" title="Ubicación en Google Maps"></iframe>
            </div>
            <!--<div class="col-6 col-md-8 d-flex ">
                <div class="row w-100 justify-content-between align-items-center">
                    <div class="col-12 col-md-6 mt-4 d-flex justify-content-end flex-wrap">
                        <h3 class="text-center w-100">Contacto</h3>
                        <p class="w-75"><-?php require_once('svg/telefono.svg')?>  000 00 00 00</p>
                        <p class="w-75"><-?php require_once('svg/gmail.svg')?>  inestrigofernandez@gmail.com</p>
                    </div>
                    <div class="col-12 col-md-6 mt-4 d-flex justify-content-center flex-wrap">
                        <h3 class="text-center w-100">Como llegar</h3>
                        <div class="row w-100">
                            <div class="col-12 text-center">
                                <a href="https://goo.gl/maps/YESmsVfj5hVUL9vU6" class="btn btn-warning w-50" style="text-decoration: none; color:black">Pulsa Aquí</a>
                            </div>
                        </div>
                        <p class=" text-center w-100 mt-1"><-?php require_once('svg/ubicacion.svg')?>  Avenida los alamon Nª32</p>
                    </div>
                </div>
            </div>-->
            <div class="col-12 col-md-4 mt-4 d-flex justify-content-center flex-wrap">
                <h3 class="text-center w-100">Contacto</h3>
                <p class="w-75 ms-5"><?php require_once('svg/telefono.svg')?>  699 673 451</p>
                <p class="w-75 ms-5"><?php require_once('svg/gmail.svg')?>  itfserviciopsicología@gmail.com</p>
            </div>
            <div class="col-12 col-md-4 mt-4 d-flex justify-content-center flex-wrap">
                        <h3 class="text-center w-100">Como llegar</h3>
                        <div class="row w-100">
                            <div class="col-12 text-center">
                                <a href="https://www.google.es/maps/place/Tr.%C2%AA+Vistas+a+la+Moraleja,+16,+28034+Madrid/@40.4977181,-3.6865419,19z/data=!4m5!3m4!1s0xd422bdee900fc2d:0xb9b3eca08212decd!8m2!3d40.4980877!4d-3.6862037?hl=es" class="btn btn-warning w-50" style="text-decoration: none; color:black" target="_blank">Pulsa Aquí</a>
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