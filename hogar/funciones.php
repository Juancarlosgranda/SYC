<?php
  function leerParam($param, $default) {
     if ( isset($_POST["$param"] ) )
        return $_POST["$param"];
     if ( isset($_GET["$param"] ) )
        return $_GET["$param"];
     return $default;
  }
  function conectar() {
     //$conexion = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $conexion=new Mongo();
        $db=$conexion->SYC;
            return $db;
  }
  
?>
