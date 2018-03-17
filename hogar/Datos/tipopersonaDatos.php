<?php 
require_once("../Modelos/tipopersona.php");
require_once("../funciones.php");
class TipoDatos{
    
       function getTipoById($id){
           
            $db=conectar();
            $tipo=new Tipo();
            $query = array('_id' => $id);
            $resultado = $db->tipopersona->find($query);
            foreach ($resultado as $doc=>$value) {
                $tipo->id_tipo_per=$value['_id'];
                $tipo->nom_tipo_per=$value['nom_tipo_per'];
            }
            return $tipo;
    }
	function getTipos(){
		$tipos[] = new Tipo;
        array_pop($tipos);
		$db = conectar();
		$consulta = $db->tipopersona->find();
		foreach($consulta as $doc=>$fila){
            $tipotemp=new Tipo();
            $tipotemp->id_tipo_per=$fila['_id'];
            $tipotemp->nom_tipo_per=$fila['nom_tipo_per'];
            array_push($tipos,$tipotemp);

        }
		return $tipos;        
	}
    function newTipo($xid_tipo_per,$xnom_tipo_per){
        $db=conectar();
        $xid_tipo_per=$xid_tipo_per*1;
        $registro = array('_id'=>$xid_tipo_per,'nom_tipo_per'=>$xnom_tipo_per);
        $db->tipopersona->insert($registro); 
    }
    function setTipo($xid_tipo_per,$xnom_tipo_per){
        $db=conectar();
        $xid_tipo_per=$xid_tipo_per*1;
        $db->tipopersona->update(array ('_id' => $xid_tipo_per), array('$set' => ['nom_tipo_per'=>$xnom_tipo_per]),array('upsert' => true) );   

    }
    function deleteTipo($xid_tipo_per){
        $db=conectar();
        $xid_tipo_per=$xid_tipo_per*1;
        $query = array('_id' => $xid_tipo_per);
        $db->tipopersona->remove($query);
    }
    function obtenerIdTipos($tipopersonas){
        $temp=0;
                 foreach($tipopersonas as $tipopersona){
                    $ultimo=($tipopersona->id_tipo_per)*1;
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
}
 ?>