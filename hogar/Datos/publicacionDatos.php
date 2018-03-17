 <?php 

require_once("Modelos/publicacion.php");
require_once("funciones.php");
class PublicacionDatos{
	function getPublicacionById($id){
            $db=conectar();
            $publi=new Publicacion();
            $query = array('_id' => $id*1);
            $resultado = $db->publicacion->find($query);
            foreach ($resultado as $doc=>$fila) {
                $publi->id_publi = $fila['_id'];
                $publi->id_cate = $fila['id_cate'];
                $publi->tit_publi = $fila['tit_publi'];
                $publi->desc_publi = $fila['desc_publi'];
                $publi->img_publi = $fila['img_publi'];
                $publi->pre_publi = $fila['pre'];
                $publi->mon_publi = $fila['mon_publi'];
                $publi->tra_publi = $fila['tra_publi'];
                $publi->fec_publi = $fila['fec_publi'];
                
            }
            return $publi;
    }
    function getPublicacionByIdCategoria($id_cate){
            $db=conectar();
            $publi=new Publicacion();
            $query = array('i_cate' => $id_cate*1);
            $resultado = $db->publicacion->find($query);
            foreach ($resultado as $doc=>$fila) {
                $publi->id_publi = $fila['_id'];
                $publi->id_cate = $fila['id_cate'];
                $publi->tit_publi = $fila['tit_publi'];
                $publi->desc_publi = $fila['desc_publi'];
                $publi->img_publi = $fila['img_publi'];
                $publi->pre_publi = $fila['pre'];
                $publi->mon_publi = $fila['mon_publi'];
                $publi->tra_publi = $fila['tra_publi'];
                $publi->fec_publi = $fila['fec_publi'];
                
            }
            return $publi;
    }
    function getPublicacionByPersona($xid_per){
           $publicaciones[] = new Publicacion;
            $db=conectar();
             array_pop($publicaciones);
            $query = array('id_per' => $xid_per*1);
            $resultado = $db->publicacion->find($query);
            foreach ($resultado as $doc=>$fila) {
                $publi=new Publicacion();
                $publi->id_publi = $fila['_id'];
                $publi->id_cate = $fila['id_cate'];
                $publi->id_per = $fila['id_per'];
                $publi->tit_publi = $fila['tit_publi'];
                $publi->desc_publi = $fila['desc_publi'];
                $publi->img_publi = $fila['img_publi'];
                $publi->pre_publi = $fila['pre'];
                $publi->mon_publi = $fila['mon_publi'];
                $publi->tra_publi = $fila['tra_publi'];
                $publi->fec_publi = $fila['fec_publi'];
            array_push($publicaciones,$publi);
            }
            return $publicaciones;
    }
	function getPublicaciones(){
		$publicaciones[] = new Publicacion;
        array_pop($publicaciones);
		$db = conectar();
		$publis = $db->publicacion->find();
		foreach($publis as $doc=>$fila){
            $publi=new Publicacion();
                $publi->id_publi = $fila['_id'];
                $publi->id_cate = $fila['id_cate'];
                $publi->id_per = $fila['id_per'];
                $publi->tit_publi = $fila['tit_publi'];
                $publi->desc_publi = $fila['desc_publi'];
                $publi->img_publi = $fila['img_publi'];
                $publi->pre_publi = $fila['pre'];
                $publi->mon_publi = $fila['mon_publi'];
                $publi->tra_publi = $fila['tra_publi'];
                $publi->fec_publi = $fila['fec_publi'];
            array_push($publicaciones,$publi);

        }
		return $publicaciones;
    }
    function getPublicacionByCadena($cadena){
             $publicaciones[] = new Publicacion;
             $db=conectar();
             array_pop($publicaciones);

            $search_string=$cadena;
            $searchQuery = array(
                        '$or' => array(
                            array(
                                'tit_publi' => new MongoRegex("/.*$cadena.*/"),
                                ),
                            array(
                                'desc_publi' => new MongoRegex("/.*$cadena.*/"),
                                ),
                            )
                        );
            $resultado = $db->publicacion->find($searchQuery);
            foreach ($resultado as $doc=>$fila) {
                $publi=new Publicacion();
                $publi->id_publi = $fila['_id'];
                $publi->id_cate = $fila['id_cate'];
                $publi->id_per = $fila['id_per'];
                $publi->tit_publi = $fila['tit_publi'];
                $publi->desc_publi = $fila['desc_publi'];
                $publi->img_publi = $fila['img_publi'];
                $publi->pre_publi = $fila['pre'];
                $publi->mon_publi = $fila['mon_publi'];
                $publi->tra_publi = $fila['tra_publi'];
                $publi->fec_publi = $fila['fec_publi'];
            array_push($publicaciones,$publi);
            }
            return $publicaciones;
    }
    
    function newPublicacion($objPublicacion){
        $db=conectar();
        $xid_publi=($objPublicacion->id_publi)*1;
        $xid_cat=($objPublicacion->id_cate)*1;
        $xid_per=($objPublicacion->id_per)*1;
        $persona = array('_id'=>$xid_publi,'id_cate'=>$xid_cat,'id_per'=>$xid_per,'tit_publi'=>$objPublicacion->tit_publi,'desc_publi'=>$objPublicacion->desc_publi,'img_publi'=>$objPublicacion->img_publi,'pre'=>$objPublicacion->pre_publi,'mon_publi'=>$objPublicacion->mon_publi,'tra_publi'=>$objPublicacion->tra_publi,'fec_publi'=>$objPublicacion->fec_publi);
        $db->publicacion->insert($persona); 
    }
    function setPublicacion($objPublicacion){
        $db=conectar();
        $xid_publi=($objPublicacion->id_publi)*1;
        $xid_cat=($objPublicacion->id_cate)*1;
        $xid_per=($objPublicacion->id_per)*1;
        $db->publicacion->update(array ('_id' => $xid_publi), array('$set' => ['id_cate'=>$xid_cat,'id_per'=>$xid_per,'tit_publi'=>$objPublicacion->tit_publi,'desc_publi'=>$objPublicacion->desc_publi,'img_publi'=>$objPublicacion->img_publi,'pre'=>$objPublicacion->pre_publi,'mon_publi'=>$objPublicacion->mon_publi,'tra_publi'=>$objPublicacion->tra_publi,'fec_publi'=>$objPublicacion->fec_publi]),array('upsert' => true));
    }
    function deletePublicacion($xid_publi){
        $db=conectar();
        $id_publi=$xid_publi*1;
        $query = array('_id' => $id_publi);
        $db->publicacion->remove($query);
    }
    function obtenerId(){
        $db=conectar();
       $resul = $db->publicacion->find()->sort(array('_id' => -1))->limit(1);
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
       