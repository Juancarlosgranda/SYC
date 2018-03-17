<?php  
require_once("header.php");
require_once("../funciones.php");
require_once("../Datos/categoriaDatos.php");

$xaccion=leerParam("accion","");
$objCategoriaDatos = new CategoriaDatos();

if($xaccion=='crear'){

$xnom_cat=leerParam("nom_cat","");
$categorias=$objCategoriaDatos->getCategorias();
$xid_cat=$objCategoriaDatos->obtenerId($categorias);
 
$objCategoriaDatos->newCategoria($xid_cat,$xnom_cat);

    
}
elseif($xaccion=='editar'){
$xid_cat=leerParam("xid_cat","");
$xnom_cat=leerParam("nom_cat","");

    $objCategoriaDatos->setCategoria($xid_cat,$xnom_cat);
}
elseif($xaccion==""){
    $xid_cat=leerParam("xid_cat","");
    $objCategoriaDatos->deleteCategoria($xid_cat);
}

?> 
              <div id="page-wrapper">
               <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Categoría
                                      <?php  
                                if($xaccion=="crear"){
                                    echo"<small>    creado correctamente</small>";
                                }
                                else if($xaccion=="editar"){
                                    echo"<small>    editado correctamente</small>";
                                    
                                }
                                if($xaccion==""){
                                     echo"<small>   eliminado correctamente</small>";
                                }
                                    
                                ?>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="categorias.php">Ver categorías</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->
                </div>
            <?php  
require_once("footer.php");
?> 