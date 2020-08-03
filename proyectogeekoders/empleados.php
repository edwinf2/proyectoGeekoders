<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto Geekoders</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    include "conexion.php";
    $conexion = $base->query("SELECT * FROM empleados ");
    $registros = $conexion->fetchAll(PDO::FETCH_OBJ);
  //  $registros = $base->query("SELECT idEmpresa, nombreEmpresa FROM empresas ")>fetchAll(PDO::FETCH_OBJ);

  ?>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
              <p class="navbar-brand" >PROYECTO GEEKODERS</p>
          </div>
      </div>
  </nav>

  <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
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
        <div class="container">
            <h1 class="page-header">Empleados</h1>
            <div class="col-md-8">
                <!--<input type="text" class="form-control" name="busqueda" autocomplete="off" id="busqueda" onkeyup="buscarEmpresa();" placeholder="Buscar...">-->
            </div>
            <a href="nuevoEmpleado.php" class="btn btn-default"><i class="fa fa-plus"></i> Nuevo Empleado</a>
        </div>
        <br>

  <table class="table table-condensed">
      <thead>
        <tr>
            <td>ID</td>
            <td>Nombre Empleado</td>
            <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($registros as $empleado):
        ?>

        <tr>
            <td><?php echo $empleado->idEmpleado  ?></td>
            <td><?php echo $empleado->nombres ?></td>

            <td>
              <a href="detalleEmpleado.php"><button type="button" name="verEmpleado" class="btn btn-primary"><span class="fa fa-save"></span> Ver</button></a>
              <a href="modificarEmpleado.php?idEmpleado=<?php echo $empleado->idEmpleado  ?>
                & nombres=<?php echo $empleado->nombres?>
                & apellidos=<?php echo $empleado->apellidos?>
                & dui=<?php echo $empleado->dui?>
                & nit=<?php echo $empleado->nit?>
                & estado=<?php echo $empleado->estado?>
                & empresaEmpleado=<?php echo $empleado->empresaEmpleado ?>
                & rolEmpleado=<?php echo $empleado->rolEmpleado ?> "> <input type="button" name="modificar" value="Modificar" class="btn btn-info"></a>
              <a href="eliminarEmpleado.php?idEmpleado=<?php echo $empleado->idEmpleado  ?>"> <input type="button" name="eliminarEmpleado" value="Eliminar" class="btn btn-sm btn-info"></a>
            </td>
          </tr>
        <?php
          endforeach;
        ?>

      </tbody>
  </table>
</div>
</div>
</div>


</body>
