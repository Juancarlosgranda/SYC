<?php 
require_once("funciones.php");
    $nom_per=leerParam("nom_per","");
    $ape_per=leerParam("ape_per","");
    $fec_nac_per=leerParam("fec_nac_per","");
    $email_per=leerParam("email_per","");
    $tel_per=leerParam("tel_per","");
    $log_per=leerParam("log_per","");
    $pass_per=leerParam("pass_per","");
    $tipo_per=leerParam("tipo_per","");


    $conexion = new Mongo();
    $db = $conexion->SYC;
       $resultado = $db->persona->find()->sort(array('_id' => -1))->limit(1);
        foreach($resultado as $fila){
            $id=($fila['_id'])*1;
        }
        
        if($id==0)
				$xid = 1;
			else
                $xid = $id+ 1;

        $id_per=$xid*1;

        $resul = $db->publicacion->find()->sort(array('_id' => -1))->limit(1);
                foreach($resul as $fila){
                    $id=($fila['_id'])*1;
                }

                if($id==0)
                        $xid = 1;
                    else
                        $xid = $id+ 1;
       $db->persona->insert(array('_id'=>$id_per,'nom_per'=>$nom_per,'ape_per'=>$ape_per,'fec_nac_per'=>$fec_nac_per,'email_per'=>$email_per,'tel_per'=>$tel_per,'log_per'=>$log_per,'pass_per'=>$pass_per,'tipo_per'=>$tipo_per));
       
        header("Location: home.php");
        
    ?>
                    
    
