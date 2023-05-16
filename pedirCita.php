<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedir Cita</title>

    <link rel="stylesheet" href="css/icon_was2.css">
    <link rel="stylesheet" href="css/footer2.css">
    <link rel="stylesheet" href="css/mode3.css">

    <?php require_once("plantillas/Bootstrap.html")?>
</head>
<body>

    <?php require_once("plantillas/Navbar.html")?>
    

    <section class="container-fluid d-quienSoy">

        <div class="row">
            <iframe src="https://calendar.google.com/calendar/embed?src=e7c894b211ea5d6a5bfeafcc7a7f3a20a8a690fa73f7e3daf8b10497481a2c06%40group.calendar.google.com&ctz=UTC" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>

        <?php require_once('plantillas/whatsapp.html')?>

    </section>
    
    <?php require_once("plantillas/Footer.php")?>

</body>
</html>