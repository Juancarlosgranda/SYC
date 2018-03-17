<?php  
require_once("header.php");
require_once("../funciones.php");
require_once("../Datos/tipopersonaDatos.php");

$xaccion=leerParam("accion","");
$objTipoDatos = new TipoDatos();

if($xaccion=='crear'){

$xnom_tipo_per=leerParam("nom_tipo_per","");
$tipos_listar=$objTipoDatos->getTipos();
$xid_tipo_per=$objTipoDatos->obtenerIdTipos($tipos_listar);
 
$objTipoDatos->newTipo($xid_tipo_per,$xnom_tipo_per);

    
}
elseif($xaccion=='editar'){
$xid_tipo_per=leerParam("xid_tipo_per","");
$xnom_tipo_per=leerParam("nom_tipo_per","");

    $objTipoDatos->setTipo($xid_tipo_per,$xnom_tipo_per);
}
elseif($xaccion==""){
$xid_tipo_per=leerParam("xid_tipo_per","");
    $objTipoDatos->deleteTipo($xid_tipo_per);
}

?> 
              <div id="page-wrapper">
               <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Tipo de usuario
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
                                    <i class="fa fa-dashboard"></i>  <a href="tipos.php">Ver categorías</a>
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