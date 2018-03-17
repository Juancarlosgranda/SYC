<?php 
require_once("../Modelos/persona.php");
require_once("../funciones.php");

class PersonaDatos{
	function getPersonaById($id){
           
            $db=conectar();
            $persona=new Persona();
            $query = array('_id' => $id);
            $resultado = $db->persona->find($query);
            foreach ($resultado as $doc=>$fila) {
                $persona->id_per = $fila['_id'];
                $persona->nom_per = $fila['nom_per'];
                $persona->ape_per = $fila['ape_per'];
                $persona->email_per = $fila['email_per'];
                $persona->tel_per = $fila['tel_per'];
                $persona->log_per = $fila['log_per'];
                $persona->pass_per = $fila['pass_per'];
                $persona->tipo_per = $fila['tipo_per'];
                $persona->fec_nac_per = $fila['fec_nac_per'];
            }
            return $persona;
    }
    function getLoginByPersona($xlog_per,$xpass_per){
           
            $db=conectar();
            $persona=new Persona();
            $query = array('log_per' => $xlog_per,'pass_per' => $xpass_per);
            $resultado = $db->persona->find($query);
            foreach ($resultado as $doc=>$fila) {
                $persona->id_per = $fila['_id'];
                $persona->nom_per = $fila['nom_per'];
                $persona->ape_per = $fila['ape_per'];
                $persona->email_per = $fila['email_per'];
                $persona->cel_per = $fila['tel_per'];
                $persona->log_per = $fila['log_per'];
                $persona->pass_per = $fila['pass_per'];
                $persona->tipo_per = $fila['tipo_per'];
                $persona->fec_nac_per = $fila['fec_nac_per'];
            }
            return $persona;
    }
	function getPersonas(){
		$personas[] = new Persona;
        array_pop($personas);
		$db = conectar();
		$pers = $db->persona->find();
		foreach($pers as $doc=>$fila){
            $persona=new Persona();
                $persona->id_per = $fila['_id'];
                $persona->nom_per = $fila['nom_per'];
                $persona->ape_per = $fila['ape_per'];
                $persona->email_per = $fila['email_per'];
                $persona->cel_per = $fila['tel_per'];
                $persona->log_per = $fila['log_per'];
                $persona->pass_per = $fila['pass_per'];
                $persona->tipo_per = $fila['tipo_per'];
                $persona->fec_nac_per = $fila['fec_nac_per'];
            array_push($personas,$persona);

        }
		return $personas;
                   
	}
    function newPersona($objPersonas){
        $db=conectar();
        $xid_per=($objPersonas->id_per)*1;
        $persona = array('_id'=>$xid_per,'nom_per'=>$objPersonas->nom_per,'ape_per'=>$objPersonas->ape_per,'email_per'=>$objPersonas->email_per,'tel_per'=>$objPersonas->tel_per,'log_per'=>$objPersonas->log_per,'pass_per'=>$objPersonas->pass_per,'tipo_per'=>$objPersonas->tipo_per,'fec_nac_per'=>$objPersonas->fec_nac_per);
        $db->persona->insert($persona); 
    }
    function setPersona($objPersonas){
        $db=conectar();
        $xid_per=($objPersonas->id_per)*1;
        //$nuevosdatos =['$set' =>['_id'=>$xid_cat,'nombre'=>$xnom_cat];
        //$query=['_id'=>$xid_cat];
        //$db->categoria->updateOne($query, $nuevodatos);
        $db->persona->update(array ('_id' => $xid_per), array('$set' => ['nom_per'=>$objPersonas->nom_per,'ape_per'=>$objPersonas->ape_per,'email_per'=>$objPersonas->email_per,'tel_per'=>$objPersonas->tel_per,'log_per'=>$objPersonas->log_per,'pass_per'=>$objPersonas->pass_per,'tipo_per'=>$objPersonas->tipo_per,'fec_nac_per'=>$objPersonas->fec_nac_per]),array('upsert' => true) );   

    }
    function deletePersona($xid_per){
        $db=conectar();
        $xid_per=$xid_per*1;
        $query = array('_id' => $xid_per);
        $db->persona->remove($query);
    }
    function obtenerId($personas){
        $temp=0;
                 foreach($personas as $persona){
                    $ultimo=($persona->id_per)*1;
                                if($ultimo<2){
                                    $temp=2;
                                }else{                                            
                                    if($temp<$ultimo){
                                            $temp=$ultimo;
                                            }
                                    }

                             }
        $temp++;
       return $temp;
    }
    function logear($log_per,$pass_per){
        $db=conectar();
        $usuarios = $db->persona->findOne(array('log_per'=>$log_per,'pass_per'=>$pass_per));
        
        return $usuarios;
    }
	
}
 ?>
       