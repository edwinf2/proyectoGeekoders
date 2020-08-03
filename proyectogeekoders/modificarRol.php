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

        if (!isset($_POST["modificarRol"])) {
          $idRol=$_GET["idRol"];
          $nombreRol=$_GET["nombreRol"];
          $descripcionRol=$_GET["descripcionRol"];
          $permisos=$_GET["permisos"];
          $rolEmpresas=$_GET["rolEmpresas"];
        }else {
          $idRol=$_POST["idRol"];
          $nombreRol=$_POST["nombreRol"];
          $descripcionRol=$_POST["descripcionRol"];
          $permisos=$_POST["permisos"];
          $rolEmpresas=$_POST["rolEmpresas"];

          $sql="UPDATE roles SET nombreRol=:minombreRol, descripcionRol=:midescripcionRol, permisos=:mipermisos, rolEmpresas=:mirolEmpresas WHERE idRol=:miidRol";
          $resultado=$base->prepare($sql);
          $resultado->execute(array(":miidRol"=>$idRol, ":minombreRol"=>$nombreRol, ":midescripcionRol"=>$descripcionRol, ":mipermisos"=>$permisos, ":mirolEmpresas"=>$rolEmpresas));

          header("Location:roles.php");
        }

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

    <form name="modificarRol" class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="idRol"></label>
        <div class="col-md-5">
          <input type="hidden" id="idRol" name="idRol" class="form-control input-md"  value="<?php echo $idRol ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="nombreRol">Nombre</label>
        <div class="col-md-5">
          <input type="text" id="nombreRol" name="nombreRol" class="form-control input-md"  value="<?php echo $nombreRol?>" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="descripcionRol">Descripcion</label>
        <div class="col-md-5">
          <input type="text" id="descripcionRol" name="descripcionRol" class="form-control input-md"  value="<?php echo $descripcionRol ?>" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="permisos">Permisos</label>
        <div class="col-md-5">
          <input type="text" id="permisos" name="permisos" class="form-control input-md"  value="<?php echo $permisos ?>" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="rolEmpresas">Empresa</label>
        <div class="col-md-5">
          <input type="text" id="rolEmpresas" name="rolEmpresas" class="form-control input-md"  value="<?php echo $rolEmpresas ?>" >
        </div>
      </div>

      <div class="form-group" align="center">
        <input type="submit" id="modificarRol" name="modificarRol" value="Guardar Cambios" class="btn btn-primary">
      </div>
    </form>
    </div>
    </div>
    </div>
  </body>
</html>
