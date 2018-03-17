 <?php 

require_once("Modelos/comentario.php");
require_once("funciones.php");
class ComentarioDatos{
	function getComentariosBypubli($id_publi){
		$Comentarios[] = new Comentario;
        array_pop($Comentarios);
		$db = conectar();
        $query = array('id_publi' => $id_publi*1);
		$resul = $db->comentario->find($query);
		foreach($resul as $doc=>$fila){
                $coment=new Comentario();
                $coment->id_coment = $fila['_id'];
                $coment->id_publi = $fila['id_publi'];
                $coment->id_usu = $fila['id_usu'];
                $coment->comentario = $fila['comentario'];
                $coment->fec_coment = $fila['fecha'];
            array_push($Comentarios,$coment);

        }
		return $Comentarios;
    }
    
    function newComentario($id,$id_publi,$id_per,$comentario){
        $db=conectar();
        $xid_coment=$id*1;
        $xid_publi=$id_publi*1;
        $xid_per=$id_per*1;
        $fecha=date ("d/m/Y");
        $query = array('_id'=>$xid_coment,'id_publi'=>$xid_publi,'id_usu'=>$xid_per,'comentario'=>$comentario,'fecha'=>$fecha);
        $db->comentario->insert($query); 
    }
    function sizeComentario($id_publi){
        $db=conectar();
        $resul=$db->comentario->count(array('id_publi'=>$id_publi*1));
        return $resul;
    }
    function deleteComentario($xid_coment){
        $db=conectar();
        $xid_coment=$xid_coment*1;
        $query = array('_id' => $xid_coment);
        $db->comentario->remove($query);
    }
    function obtenerId(){
        $db=conectar();
       $resul = $db->comentario->find()->sort(array('_id' => -1))->limit(1);
        foreach($resul as $fila){
            $id=($fila['_id'])*1;
        }
        
        if($id==0)
				$xid = 1;
			else
                $xid = $id+ 1;
        
        return $xid;
    }
}

 ?>
       