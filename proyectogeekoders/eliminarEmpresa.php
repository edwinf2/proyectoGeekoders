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

    $idEmpresa=$_GET["idEmpresa"];

    $base->query("DELETE FROM empresas WHERE idEmpresa='$idEmpresa'");

    header("Location:index.php");
    
    $registros = $conexion->fetchAll(PDO::FETCH_OBJ);
  //  $registros = $base->query("SELECT idEmpresa, nombreEmpresa FROM empresas ")>fetchAll(PDO::FETCH_OBJ);

  ?>


</body>
