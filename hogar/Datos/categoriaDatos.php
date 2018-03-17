<?php 
require_once("../Modelos/categoria.php");
require_once("../funciones.php");
class CategoriaDatos{
    
       function getCategoriaById($id){
           
            $db=conectar();
            $categoria=new Categoria();
            $query = array('_id' => $id);
            $reultado = $db->categoria->find($query);
            foreach ($reultado as $doc=>$value) {
                $categoria->id_cat=$value['_id'];
                $categoria->nom_cat=$value['nombre'];
            }
            return $categoria;
    }
    function getCategoriaByCategoria($xnom_cat){
           
            $db=conectar();
            $categoria=new Categoria();
            $query = array('nom_cat' => $xnom_cat);
            $reultado = $db->categoria->find($query);
            foreach ($reultado as $doc=>$value) {
                $categoria->id_cat=$value['_id'];
                $categoria->nom_cat=$value['nombre'];
            }
            return $categoria;
    }
	function getCategorias(){
		$categorias[] = new Categoria;
        array_pop($categorias);
		$db = conectar();
		$cates = $db->categoria->find();
		foreach($cates as $doc=>$fila){
            $cattemp=new Categoria();
            $cattemp->id_cat=$fila['_id'];
            $cattemp->nom_cat=$fila['nombre'];
            array_push($categorias,$cattemp);

        }
		return $categorias;
                   
	}
    function newCategoria($xid_cat,$xnom_cat){
        $db=conectar();
        $xid_cat=$xid_cat*1;
        $registro = array('_id'=>$xid_cat,'nombre'=>$xnom_cat);
        $db->categoria->insert($registro); 
    }
    function setCategoria($xid_cat,$xnom_cat){
        $db=conectar();
        $xid_cat=$xid_cat*1;
        //$nuevosdatos =['$set' =>['_id'=>$xid_cat,'nombre'=>$xnom_cat];
        //$query=['_id'=>$xid_cat];
        //$db->categoria->updateOne($query, $nuevodatos);
        $db->categoria->update(array ('_id' => $xid_cat), array('$set' => ['nombre' =>$xnom_cat]),array('upsert' => true) );   

    }
    function deleteCategoria($xid_cat){
        $db=conectar();
        $xid_cat=$xid_cat*1;
        $query = array('_id' => $xid_cat);
        $db->categoria->remove($query);
    }
    function obtenerId($categorias){
        $temp=0;
                 foreach($categorias as $categoria){
                    $ultimo=($categoria->id_cat)*1;
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