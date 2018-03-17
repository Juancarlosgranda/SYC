<?php  
require_once("header2.php");
require_once("funciones.php");
require_once("Datos/publicacionDatos.php");
require_once("Datos/comentarioDatos.php");
$objComentarioDatos = new ComentarioDatos();
$xid_per=leerParam("xid_per","");
$objPublicacionDatos = new PublicacionDatos();
$Publicaciones=$objPublicacionDatos->getPublicacionByPersona($xid_per);


?> 
        <div id="page-wrapper">
         <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="row carousel-holder">
                    <div class="row">
                        <br>
                        <center><h1>Mis publicaciones!!!</h1></center>
                        <br>
                    </div>
                </div>
                <div class="row">
                <?php  
                foreach($Publicaciones as $publi){
                    $resul=$objComentarioDatos->sizeComentario($publi->id_publi);
                    echo"
                    <div class='col-sm-3'>
                    <center><a href='publicaciones_editar.php?xid_publi=$publi->id_publi'><i class='glyphicon glyphicon-edit'></i>  Editar</a>
                    <a href='publicar_grabar.php?xid_publi=$publi->id_publi'><i class='glyphicon glyphicon-remove-sign'></i>  Eliminar</a></center>
                        <div class='thumbnail team'>
                            <img src='$publi->img_publi'>
                            <div class='caption'>
                                <h4 class='pull-right'>$publi->mon_publi $publi->pre_publi </h4>
                                <h4><a href='info_publicacionV.php?xid_publi=$publi->id_publi'>$publi->tit_publi</a>
                                </h4>
                                <p>$publi->desc_publi</p>
                            </div>
                                <p class='pull-right'>$resul comentarios</p>
                                <p>
                                <br>
                        </div>
                    </div>";
                }
                ?>
            </div>
            </div>

        </div>
    </div>
    </div>
<?php  
require_once("footer.php");
?> 