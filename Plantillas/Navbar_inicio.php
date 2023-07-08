<nav class="container-fluid bg-navbar" role="navigation">
  <div class="row">
    <div class="navbar navbar-expand-md">
      <div class="container-fluid">
        <div class="row w-100 justify-content-between">
          <div class="col-9 col-md-5 d-flex justify-content-between align-items-start bg-navbarI">
            <img class="img-fluid w-25" id="logo_navbar" src="img/logo2_nuevo.png" alt="logo_empresa">
          </div>
          <div class="col-3 col-md-7 d-flex justify-content-end flex-wrap bg-navbarH">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end mt-3" id="navbarDropdown">
              <ul class="navbar-nav justify-content-between">
                <li class="nav-item">
                  <a class="nav-link text-end" href="inicio.php"><b>Inicio</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-end" href="quienSoy.php"><b>Quien soy</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-end" href="terapia.php"><b>Terapias</b></a>
                </li>
                  <!--<li class="nav-item">
                    <a class="nav-link text-end" href="pedirCita.php"><b>Pedir Cita</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-end" href="terapiaOnline.php"><b>Terapias Online</b></a>
                  </li>-->
                <li class="nav-item">
                  <a class="nav-link text-end" href="tarifas.php"><b>Tarifas</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-end" href="contacto.php"><b>Contacto</b></a>
                </li>
                <li>
                  <a class="nav-link text-end remove-bg" href="acceso.php" aria-label="Inicio de administrador"><?php require_once("svg/perfil.svg")?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>