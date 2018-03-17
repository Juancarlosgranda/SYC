<?php 
require_once("header2.php");    
require_once("funciones.php");
require_once("Datos/publicacionDatos.php");
require_once("Modelos/publicacion.php");

$xaccion=leerParam("accion","");
$objPublicacionDatos = new PublicacionDatos();
$objPublicacion = new Publicacion();

if ($xaccion=="crear") {
    $xid_per=leerParam("id_per","");
    $xid_cate=leerParam("id_cate","");
    $xfec_publi=leerParam("fec_publi","");
    $xid_publi=$objPublicacionDatos->obtenerId();
    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file);
    
    $objPublicacion->id_publi=$xid_publi;
    $objPublicacion->id_cate=$xid_cate;
    $objPublicacion->id_per=$xid_per;
    $objPublicacion->tit_publi=leerParam("tit_publi","");
    $objPublicacion->desc_publi=leerParam("desc_publi","");
    $objPublicacion->img_publi=$target_file;
    $objPublicacion->pre_publi=leerParam("pre","");
    $objPublicacion->mon_publi=leerParam("mon_publi","");
    $objPublicacion->tra_publi=leerParam("tra_publi","");
    $objPublicacion->fec_publi=$xfec_publi;
    $objPublicacionDatos->newPublicacion($objPublicacion);
    
}elseif ($xaccion=="editar") {
    $xid_per=leerParam("id_per","");
    $xid_cate=leerParam("id_cate","");
    $xfec_publi=leerParam("fec_publi","");
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file);
    $xid_publi=leerParam("id_publi","");
    
    $objPublicacion->id_publi=$xid_publi;
    $objPublicacion->id_cate=$xid_cate;
    $objPublicacion->id_per=$xid_per;
    $objPublicacion->tit_publi=leerParam("tit_publi","");
    $objPublicacion->desc_publi=leerParam("desc_publi","");
    $objPublicacion->img_publi=$target_file;
    $objPublicacion->pre_publi=leerParam("pre","");
    $objPublicacion->mon_publi=leerParam("mon_publi","");
    $objPublicacion->tra_publi=leerParam("tra_publi","");
    $objPublicacion->fec_publi=$xfec_publi;
    
    $objPublicacionDatos->setPublicacion($objPublicacion);
    
    
}elseif ($xaccion=="") {//significa que estamos eliminadno el registro
   $xid_publi=leerParam("xid_publi","");
   $xid_per=$_SESSION["id_per"]*1;
   $objPublicacionDatos->deletePublicacion($xid_publi);
    
  
}

?>
<div id="page-wrapper">

 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Publicacion
                <?php 
                    if($xaccion == "crear"){
                        echo"<small>Registro Creado Correctamente</small>";
                    }
                    if($xaccion == "editar"){
                        echo"<small>Registro Editado Correctamente</small>";
                    }
                    if($xaccion == ""){
                        echo"<small>Registro Eliminado Correctamente</small>";
                    }
                ?>
            </h1>
            <ol class="breadcrumb">
                <li><?php  
                    if  ($xid_per==1){
                  echo "<i class=''></i>  <a href='Publicaciones.php?xid_per=$xid_per'>Ver las publicaciones</a>";}
                    else{
                        echo "<i class=''></i>  <a href='mispublicaciones.php?xid_per=$xid_per'>Ver mi publicacion</a>";
                    }
                ?>
                        </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
</div>

<?php require_once("footer.php"); ?>