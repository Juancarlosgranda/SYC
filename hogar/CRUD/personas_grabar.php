<?php require_once("header.php");
require_once("../funciones.php");
require_once("../Datos/personaDatos.php");
require_once("../Modelos/persona.php");

$xaccion=leerParam("accion","");
$objPersonaDatos = new PersonaDatos();
$objPersona = new Persona();

if ($xaccion=="crear") {
    $personas=$objPersonaDatos->getPersonas();
    $xid_per=$objPersonaDatos->obtenerId($personas);
    $objPersona->id_per=$xid_per*1;
    $objPersona->nom_per=leerParam("nom_per","");
    $objPersona->ape_per=leerParam("ape_per","");
    $objPersona->fec_nac_per=leerParam("fec_nac_per","");
    $objPersona->email_per=leerParam("email_per","");
    $objPersona->tel_per=leerParam("tel_per","");
    $objPersona->log_per=leerParam("log_per","");
    $objPersona->pass_per=leerParam("pass_per","");
    $objPersona->tipo_per=leerParam("tipo_per","");
    $objPersonaDatos->newPersona($objPersona);
    
}elseif ($xaccion=="editar") {
    $objPersona->id_per=leerParam("xid_per","");
    $objPersona->nom_per=leerParam("nom_per","");
    $objPersona->ape_per=leerParam("ape_per","");
    $objPersona->fec_nac_per=leerParam("fec_nac_per","");
    $objPersona->email_per=leerParam("email_per","");
    $objPersona->tel_per=leerParam("tel_per","");
    $objPersona->log_per=leerParam("log_per","");
    $objPersona->pass_per=leerParam("pass_per","");
    $objPersona->tipo_per=leerParam("tipo_per","");
    
    $objPersonaDatos->setPersona($objPersona);
    
    
}elseif ($xaccion=="") {//significa que estamos eliminadno el registro
    $xid_per= leerParam("xid_per","");
    $objPersonaDatos->deletePersona($xid_per);
}

?>
<div id="page-wrapper">

 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuario
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
                <li>
                    <i class=""></i>  <a href="personas.php">Ver Usuarios</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
</div>

<?php require_once("footer.php"); ?>