<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PROYECTO GEEKODERS</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.maskedinput.js" type="text/javascript"></script>

    </head>
    <body>
      <?php
        include "conexion.php";
        $conexion = $base->query("SELECT * FROM empresas ");
        $registros = $conexion->fetchAll(PDO::FETCH_OBJ);
      //  $registros = $base->query("SELECT idEmpresa, nombreEmpresa FROM empresas ")>fetchAll(PDO::FETCH_OBJ);

      ?>
      <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">PROYECTO GEEKODERS</a>
                </div>
            </div>
      </nav>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-md-2 sidebar" id="sidebar">
              <ul class="nav nav-sidebar">
                  <li>
                      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Empresas</a>
                  </li>
              </ul>
              <ul class="nav nav-sidebar">
                  <li>
                      <a href="empleados.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Empleados</a>
                  </li>
              </ul>
              <ul class="nav nav-sidebar">
                  <li>
                      <a href="roles.php" class="w3-bar-item w3-button"><i class="fa fa-list-alt"></i> Roles</a>
                  </li>
              </ul>
            </div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="container" id="panelInfo">
              <div class="row">
                <div class="col-md-4">

                  <h5 id="nombreEmpresa">Nombre Empresa:  <?php echo $nombreEmpresa; ?></h5>
                  <h5 id="nit">Nit: <?php echo $nit; ?></h5>
                  <h5 id="telefono">Telefono: <?php echo $telefono; ?></h5>
                  <h5 id="municipio">Municipio: <?php  echo $municipio;?></h5>
                  <h5 id="departamento">Departamento: <?php  echo $departamento;?></h5>
                </div>
              </div>
            </div>
    </div>
    </div>
    </div>
  </body>
</html>
