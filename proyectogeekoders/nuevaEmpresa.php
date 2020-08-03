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

        if (isset($_POST["guardarEmpresa"])) {
          $idEmpresa=$_POST["idEmpresa"];
          $nombreEmpresa=$_POST["nombreEmpresa"];
          $nit=$_POST["nit"];
          $telefono=$_POST["telefono"];
          $direccion=$_POST["direccion"];
          $municipio=$_POST["municipio"];
          $departamento=$_POST["departamento"];

          $sql="INSERT INTO empresas (idEmpresa, nombreEmpresa, nit, telefono, direccion, municipio, departamento)
          VALUES(:miidEmpresa, :minombreEmpresa, :minit, :mitelefono, :midireccion, :mimunicipio, :midepartamento)";

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
        <form class="form-horizontal" id="agregarEmpresa" name="agregarEmpresa" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label class="col-md-4 control-label" for="idEmpresa">Id Empresa</label>
            <div class="col-md-4">
              <input id="idEmpresa" name="idEmpresa" placeholder="Ingrese ID" class="form-control input-md" required type="text" maxlength="5">
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label" for="nombreEmpresa">Nombre de la Empresa</label>
              <div class="col-md-4">
                <input id="nombreEmpresa" name="nombreEmpresa" placeholder="Ingrese Nombre" class="form-control input-md" required type="text" maxlength="45">
              </div>
          </div>

      <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nit">Nit de la Empresa</label>
              <div class="col-md-5">
                <input id="nit" name="nit" placeholder="Ingrese nit" class="form-control input-md" required type="text" onkeypress="return validar(event)">
              </div>
          </div>

      <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="telefono">Telefono de la Empresa</label>
              <div class="col-md-5">
                <input id="telefono" name="telefono" placeholder="Ingrese el Telefono" class="form-control input-md" required type="text" onkeypress="return validar(event)">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="direccion">Direccion de la Empresa</label>
              <div class="col-md-5">
                <input id="direccion" name="direccion" placeholder="Ingrese la Direccion" class="form-control input-md" required type="text" onkeypress="return validar(event)">
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="municipio">Municipio</label>
              <div class="col-md-5">
                <input id="municipio" name="municipio" placeholder="Ingrese el municipio" class="form-control input-md" required type="text" onkeypress="return validar(event)">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="departamento">Departamento</label>
              <div class="col-md-5">
                <input id="departamento" name="departamento" placeholder="Ingrese el Departamento" class="form-control input-md" required type="text" onkeypress="return validar(event)">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="guardarEmpresa"></label>
              <div class="col-md-4">
                <input type="submit" name="guardarEmpresa" class="btn btn-primary" value="Guardar Empresa">

              </div>
          </div>
       </form>
        </div>
        </div>
        </div>
        </body>
</html>
