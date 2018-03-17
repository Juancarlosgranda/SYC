<?php 
require_once("header.php");    
require_once("funciones.php");
require_once("Datos/publicacionDatos.php");
require_once("Modelos/publicacion.php");

$xaccion=leerParam("accion","");
$objPublicacionDatos = new PublicacionDatos();
$objPublicacion = new Publicacion();

if ($xaccion=="") {//significa que estamos eliminadno el registro
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
                  echo "<i class=''></i>  <a href='Publicaciones.php?xid_per=$xid_per'>Ver las publicaciones</a>";
                    
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