<?php
  require_once("funciones.php");

  $user = leerParam('log_per','' );
  $clave  = leerParam('pass_per','' );

  $db = conectar();
  $xcan = $db->persona->count(array('log_per'=>$user,'pass_per'=>$clave));

  if ($xcan>0) {
	session_start();
            $query = array('log_per' => $user,'pass_per' => $clave);
            $resultado = $db->persona->find($query);
            foreach ($resultado as $doc=>$fila) {
                $id_per=$fila['_id'];
                $_SESSION["id_per"] = $id_per*1;
                $_SESSION["nom_per"] = $fila['nom_per'];
                $_SESSION["ape_per"] = $fila['ape_per'];
                $_SESSION["tel_per"] = $fila['tel_per'];
                $tipo_per = $fila['tipo_per'];
            }
          
		if($tipo_per== "1"){					
			 header("Location: home.php");
		}else{
			if($tipo_per== '2'){							
				 header("Location: home_visitante.php");
			}
		}
  }
  else
  {
    header("Location: index.php");
  }
?>
