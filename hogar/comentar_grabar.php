<?php  
require_once("funciones.php");
require_once("Datos/comentarioDatos.php");

$xaccion=$_POST["accion"];

$objComentarioDatos = new ComentarioDatos();
    if(array_key_exists('comentario',$_POST) && $xaccion=="crear"){
        $conexion=new Mongo();
        $db=$conexion->SYC;
        $id_coment=$_POST["id"];
        $id_per=$_POST["id_per"];
        $id_publi=$_POST["id_publi"];
        $comentario=$_POST["comentario"];
        $objComentarioDatos->newComentario($id_coment,$id_publi,$id_per,$comentario);
        
    echo 1;
        }
    elseif ($xaccion=="") {//significa que estamos eliminadno el registro
   $id_coment=$_POST["id"];
   $objComentarioDatos->deleteComentario($id_coment);
  
    }
?>