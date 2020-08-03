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

        if (!isset($_POST["modificarEmpleado"])) {
          $idEmpleado=$_GET["idEmpleado"];
          $nombreEmpleado=$_GET["nombreEmpleado"];
          $apellidoEmpleado=$_GET["apellidoEmpleado"];
          $dui=$_GET["dui"];
          $nit=$_GET["nit"];
          $estado=$_GET["estado"];
          $empresaEmpleado=$_GET["empresaEmpleado"];
          $rolEmpleado=$_GET["rolEmpleado"];
        }else {
          $idEmpleado=$_POST["idEmpleado"];
          $nombreEmpleado=$_POST["nombreEmpleado"];
          $apellidoEmpleado=$_POST["apellidoEmpleado"];
          $dui=$_POST["dui"];
          $nit=$_POST["nit"];
          $estado=$_POST["estado"];
          $empresaEmpleado=$_POST["empresaEmpleado"];
          $rolEmpleado=$_POST["rolEmpleado"];

          $sql="UPDATE empleados SET nombres=:minombreEmpleado,apellidos=:miapellidoEmpleado, dui=:midui, nit=:minit, estado=:miestado, empresaEmpleado=:miempresaEmpleado, rolEmpleado=:mirolEmpleado WHERE idEmpleado=:miidEmpleado";
          $resultado=$base->prepare($sql);
          $resultado->execute(array(":miidEmpleado"=>$idEmpleado, ":minombreEmpleado"=>$nombreEmpleado, ":miapellidoEmpleado"=>$apellidoEmpleado, ":midui"=>$dui, ":minit"=>$nit, ":miestado"=>$estado, ":miempresaEmpleado"=>$empresaEmpleado, ":mirolEmpleado"=>$rolEmpleado));

          header("Location:empleados.php");
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

    <form name="modificarEmpleado" class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="idEmpleado">ID</label>
        <div class="col-md-5">
          <input type="hidden" id="idEmpleado" name="idEmpleado" class="form-control input-md"  value="<?php echo $idEmpleado ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="nombreEmpleado">Nombre</label>
        <div class="col-md-5">
          <input type="text" id="nombreEmpleado" name="nombreEmpleado" class="form-control input-md"  value="<?php echo $nombreEmpleado ?>" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="apellidoEmpleado">Apellidos</label>
        <div class="col-md-5">
          <input type="text" id="apellidoEmpleado" name="apellidoEmpleado" class="form-control input-md"  value="<?php echo $apellidoEmpleado ?>" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="dui">DUI</label>
        <div class="col-md-5">
          <input type="text" id="dui" name="dui" class="form-control input-md" maxlength="9"  value="<?php echo $dui ?>" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="nit">NIT</label>
        <div class="col-md-5">
          <input type="text" id="nit" name="nit"  class="form-control input-md" maxlength="17" value="<?php echo $nit ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="estado">Estado</label>
        <div class="col-md-5">
          <input type="text" id="estado" name="estado" class="form-control input-md" value="<?php echo $estado ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="empresaEmpleado">Empresa</label>
        <div class="col-md-5">
          <input type="text" id="empresaEmpleado" name="empresaEmpleado" class="form-control input-md"  value="<?php echo $empresaEmpleado ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="rolEmpleado">Roles</label>
        <div class="col-md-5">
          <input type="text" id="rolEmpleado" name="rolEmpleado" class="form-control input-md" value="<?php echo $rolEmpleado ?>">
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group" align="center">
        <input type="submit" id="modificarEmpleado" name="modificarEmpleado" value="Guardar Cambios" class="btn btn-primary">
      </div>
    </form>
    </div>
    </div>
    </div>
  </body>
</html>
