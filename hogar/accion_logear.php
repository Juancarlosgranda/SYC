<?php  
$conexion = new Mongo();
$db = $conexion->SYC;
$user=$_POST["log_per"];
$clave=$_POST["pass_per"];

$usuarios = $db->persona->findOne(array('log_per'=>$user,'pass_per'=>$clave));

        function analizar($array){
          $size=sizeof($array);  
        if($size==0){ return false;}
        else{ return true;}
        }

if(analizar($usuarios)==true){
    header('Location:home.php');
}

else{
     header('Location:login.php');
}

?>
