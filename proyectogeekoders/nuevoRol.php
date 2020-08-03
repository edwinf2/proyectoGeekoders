<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proyecto Geekoders</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
      <?php
        include "conexion.php";

        if (isset($_POST["guardarRol"])) {
          $idRol=$_POST["idRol"];
          $nombreRol=$_POST["nombreRol"];
          $descripcionRol=$_POST["descripcionRol"];
          $permisos=$_POST["permisos"];
          $rolEmpresas=$_POST["rolEmpresas"];

          $sql="INSERT INTO roles (idRol, nombreRol, descripcionRol, permisos, rolEmpresas)
          VALUES(:miidRol, :minombreRol, :midescripcionRol, :mipermisos, :mirolEmpresas)";

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
        <form class="form-horizontal" id="agregarRol" name="agregarRol" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label class="col-md-4 control-label" for="idRol">Id Rol</label>
            <div class="col-md-4">
              <input id="idRol" name="idRol" placeholder="Ingrese ID" class="form-control input-md" required type="text" maxlength="5">
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label" for="nombreRol">Nombre</label>
              <div class="col-md-4">
                <input id="nombreRol" name="nombreRol" placeholder="Ingrese Nombre" class="form-control input-md" required type="text" maxlength="45">
              </div>
          </div>

      <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="descripcionRol">Descripcion</label>
              <div class="col-md-5">
                <input id="descripcionRol" name="descripcionRol" placeholder="Ingrese nit" class="form-control input-md" required type="text">
              </div>
          </div>

      <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="permisos">Permisos</label>
              <div class="col-md-5">
                <input id="permisos" name="permisos" placeholder="permisos" class="form-control input-md" required type="text" >
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="rolEmpresas">Empresa</label>
              <div class="col-md-5">
                <input id="rolEmpresas" name="rolEmpresas" placeholder="Empresa" class="form-control input-md" required type="text">

              </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="guardarRol"></label>
              <div class="col-md-4">
                <input type="submit" name="guardarRol" class="btn btn-primary" value="Guardar Rol">
              </div>
          </div>
       </form>
        </div>
        </div>
        </div>
        </body>
</html>
