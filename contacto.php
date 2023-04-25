<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    <link rel="stylesheet" href="css/icon_was.css">
    <link rel="stylesheet" href="css/footer.css">

    <?php require_once("Plantillas/Bootstrap.html")?>

</head>
<body>
    <div id="navbar">
        <?php require_once("Plantillas/Navbar.html")?>
    </div>

    <section class="container-fluid">

        <div class="row">
            <div class="col-12 my-3 d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.1321385310744!2d-3.8767907235157493!3d40.45021225360008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4184e2b3353901%3A0x73eae46d77ea86f5!2sHospital%20Universitario%20Puerta%20De%20Hierro!5e0!3m2!1ses!2ses!4v1681808206561!5m2!1ses!2ses" width="2000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-6 col-md-8 d-flex ">
                <div class="row w-100 justify-content-between align-items-center">
                    <div class="col-12 col-md-6 mt-4 d-flex justify-content-end flex-wrap">
                        <h3 class="text-center w-100">Contacto</h3>
                        <p class="w-75"><?php require_once('svg/telefono.svg')?>  000 00 00 00</p>
                        <p class="w-75"><?php require_once('svg/gmail.svg')?>  inestrigofernandez@gmail.com</p>
                    </div>
                    <div class="col-12 col-md-6 mt-4 d-flex justify-content-center flex-wrap">
                        <h3 class="text-center w-100">Como llegar</h3>
                        <div class="row w-100">
                            <div class="col-12 text-center">
                                <a href="https://goo.gl/maps/YESmsVfj5hVUL9vU6" class="btn btn-warning w-50" style="text-decoration: none; color:black">Pulsa Aquí</a>
                            </div>
                        </div>
                        <p class=" text-center w-100 mt-1"><?php require_once('svg/ubicacion.svg')?>  Avenida los alamon Nª32</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 mt-4 d-flex justify-content-center flex-wrap">
                <h3 class="text-center">Horarios</h3>
                <div class="row align-items-start">
                    <div class="col-4">
                        <ul class="me-3">
                            <li>10:00</li>
                            <li>12:00</li>
                            <li>15:00</li>
                            <li>17:00</li>
                            <li>19:00</li>
                            <li>21:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('Plantillas/whatsapp.html')?>
    </section>
    
    <?php require_once("Plantillas/Footer.php")?>
    
</body>
</html>