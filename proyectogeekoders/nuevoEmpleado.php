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

        if (isset($_POST["guardarEmpleado"])) {
          $idEmpleado=$_POST["idEmpleado"];
          $nombreEmpleado=$_POST["nombreEmpleado"];
          $apellidoEmpleado=$_POST["apellidoEmpleado"];
          $dui=$_POST["dui"];
          $nit=$_POST["nit"];
          $estado=$_POST["estado"];
          $empresaEmpleado=$_POST["empresaEmpleado"];
          $rolEmpleado=$_POST["rolEmpleado"];

          $sql="INSERT INTO empleados (idEmpleado, nombres, apellidos, dui, nit, estado, empresaEmpleado, rolEmpleado)
          VALUES(:miidEmpleado, :minombreEmpleado, :miapellidoEmpleado, :midui, :minit, :miestado, :miempresaEmpleado, :mirolEmpleado)";

          $resultado=$base->prepare($sql);
          $resultado->execute(array(":miidEmpleado"=>$idEmpleado, ":minombreEmpleado"=>$nombreEmpleado, ":miapellidoEmpleado"=>$apellidoEmpleado, ":midui"=>$dui, ":minit"=>$nit, ":miestado"=>$estado, ":miempresaEmpleado"=>$empresaEmpleado, ":mirolEmpleado"=>$rolEmpleado));

          header("Location:empleados.php");
        }

      ?>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <p class="navbar-brand">PROYECTO GEEKODERS</p>
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
        <form class="form-horizontal" id="agregarEmpleado" name="agregarEmpleado" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label class="col-md-4 control-label" for="idEmpleado">Id Emmpleado</label>
            <div class="col-md-4">
              <input type="text" id="idEmpleado" name="idEmpleado" placeholder="Ingrese ID" class="form-control input-md" required  maxlength="5">
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label" for="nombreEmpleado">Nombres</label>
              <div class="col-md-4">
                <input type="text" id="nombreEmpleado" name="nombreEmpleado" placeholder="Ingrese Nombre" class="form-control input-md" required  maxlength="45">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="apellidoEmpleado">Apellidos</label>
              <div class="col-md-4">
                <input type="text" id="apellidoEmpleado" name="apellidoEmpleado" placeholder="Ingrese Apellidos" class="form-control input-md" required  maxlength="45">
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="dui">DUI</label>
              <div class="col-md-5">
                <input required type="text" id="dui" name="dui" placeholder="Ingrese dui" class="form-control input-md"  maxlength="9">
              </div>
          </div>

      <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nit">Nit</label>
              <div class="col-md-5">
                <input type="text" id="nit" name="nit" placeholder="Ingrese nit" class="form-control input-md" required >
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="estado">Estado</label>
              <div class="col-md-5">
                <input type="estado" id="estado" name="estado" placeholder="estado" class="form-control input-md" required >
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="empresaEmpleado">Empresa</label>
              <div class="col-md-5">
                <input type="text"  id="empresaEmpleado" name="empresaEmpleado" class="form-control input-md" required >
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="rolEmpleado">Rol</label>
              <div class="col-md-5">
                <input type="text" id="rolEmpleado" name="rolEmpleado" class="form-control input-md" required  >
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="guardarEmpleado"></label>
              <div class="col-md-4">
                <input type="submit" name="guardarEmpleado" class="btn btn-primary" value="Guardar Empleado">
              </div>
          </div>
       </form>
        </div>
        </div>
        </div>
        </body>
</html>
