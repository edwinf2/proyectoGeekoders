<?php

try {
  $base= new PDO('mysql:host=localhost; dbname=corporacion', 'admin', '12345');
  $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $base -> exec("SET CHARACTER SET UTF8");

} catch (\Exception $e) {
  die('Error' . $e->getMessage() );
  echo "Linea del error" . $e->getLine();
}

?>
