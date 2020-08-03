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

        if (!isset($_POST["modificar"])) {
          $idEmpresa=$_GET["idEmpresa"];
          $nombreEmpresa=$_GET["nombreEmpresa"];
          $nit=$_GET["nit"];
          $telefono=$_GET["telefono"];
          $direccion=$_GET["direccion"];
          $municipio=$_GET["municipio"];
          $departamento=$_GET["departamento"];
        }else {
          $idEmpresa=$_POST["idEmpresa"];
          $nombreEmpresa=$_POST["nombreEmpresa"];
          $nit=$_POST["nit"];
          $telefono=$_POST["telefono"];
          $direccion=$_POST["direccion"];
          $municipio=$_POST["municipio"];
          $departamento=$_POST["departamento"];

          $sql="UPDATE empresas SET nombreEmpresa=:minombreEmpresa, nit=:minit, telefono=:mitelefono, direccion=:midireccion, municipio=:mimunicipio, departamento=:midepartamento WHERE idEmpresa=:miidEmpresa";
          $resultado=$base->prepare($sql);
          $resultado->execute(array(":miidEmpresa"=>$idEmpresa, ":minombreEmpresa"=>$nombreEmpresa, ":minit"=>$nit, ":mitelefono"=>$telefono, ":midireccion"=>$direccion, ":mimunicipio"=>$municipio, ":midepartamento"=>$departamento));

          header("Location:index.php");
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

    <form name="modificarEmpresa" class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="idEmpresa"></label>
        <div class="col-md-5">
          <input type="hidden" id="idEmpresa" name="idEmpresa" class="form-control input-md"  value="<?php echo $idEmpresa ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="nombreEmpresa">Nombre</label>
        <div class="col-md-5">
          <input type="text" id="nombreEmpresa" name="nombreEmpresa" class="form-control input-md"  value="<?php echo $nombreEmpresa ?>" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="nit">NIT</label>
        <div class="col-md-5">
          <input type="text" id="nit" name="nit"  class="form-control input-md" maxlength="17" value="<?php echo $nit ?>">

        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="telefono">Telefono</label>
        <div class="col-md-5">
          <input type="text" id="telefono" name="telefono" class="form-control input-md"  maxlength="9" value="<?php echo $telefono ?>">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="direccion">Direccion</label>
        <div class="col-md-5">
          <input type="text" id="direccion" name="direccion" class="form-control input-md" value="<?php echo $direccion ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="municipio">Municipio</label>
        <div class="col-md-5">
          <input type="text" id="municipio" name="municipio" class="form-control input-md"  value="<?php echo $municipio ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="departamento">Departamento</label>
        <div class="col-md-5">
          <input type="text" id="departamento" name="departamento" class="form-control input-md" value="<?php echo $departamento ?>">
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group" align="center">
        <input type="submit" id="modificar" name="modificar" value="Guardar Cambios" class="btn btn-primary">
      </div>
    </form>
    </div>
    </div>
    </div>
  </body>
</html>
