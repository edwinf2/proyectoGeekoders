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
    $conexion = $base->query("SELECT * FROM empresas ");
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
            <h1 class="page-header">Empresas</h1>
            <div class="col-md-8">
                <!--<input type="text" class="form-control" name="busqueda" autocomplete="off" id="busqueda" onkeyup="buscarEmpresa();" placeholder="Buscar...">-->
            </div>
            <a href="nuevaEmpresa.php" class="btn btn-default"><i class="fa fa-plus"></i> Nueva Empresa</a>
        </div>
        <br>

  <table class="table table-condensed">
      <thead>
        <tr>
            <td>ID</td>
            <td>Nombre Empresa</td>
            <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($registros as $empresa):
        ?>

        <tr>
            <td><?php echo $empresa->idEmpresa  ?></td>
            <td><?php echo $empresa->nombreEmpresa  ?></td>

            <td>
              <a href="detalleEmpresa.php"><button type="button" name="verEmpresa" class="btn btn-primary"><span class="fa fa-save"></span> Ver</button></a>
              <a href="modificarEmpresa.php?idEmpresa=<?php echo $empresa->idEmpresa  ?>
                & nombreEmpresa=<?php echo $empresa->nombreEmpresa?>
                & nit=<?php echo $empresa->nit?>
                & telefono=<?php echo $empresa->telefono?>
                & direccion=<?php echo $empresa->direccion ?>
                & municipio=<?php echo $empresa->idEmpresa ?>
                & departamento=<?php echo $empresa->departamento ?> "> <input type="button" name="modificar" value="Modificar" class="btn btn-info"></a>
              <a href="eliminarEmpresa.php?idEmpresa=<?php echo $empresa->idEmpresa  ?>"> <input type="button" name="eliminarEmpresa" value="Eliminar" class="btn btn-sm btn-info"></a>
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
